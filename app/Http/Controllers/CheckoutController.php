<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Midtrans\Snap;

class CheckoutController
{
    public function process(Request $request)
    {
        $request->validate([
            'selected_orders' => ['required', 'string'],
        ]);

        DB::beginTransaction();

        try {
            $selectedOrders = json_decode($request->selected_orders, true);

            if (!is_array($selectedOrders) || empty($selectedOrders)) {
                throw new \Exception('Invalid order selection');
            }

            // Changed status from 'pending' to 'cart'
            $orders = Order::whereIn('id', $selectedOrders)
                ->where('user_id', auth()->id())
                ->where('status', 'cart')  // Changed this line
                ->with('book')
                ->get();

            if ($orders->isEmpty()) {
                throw new \Exception('No valid orders found');
            }

            $totalAmount = $orders->sum('total_price');

            // Generate a temporary unique transaction ID
            $transactionId = 'TRX-' . uniqid();

            $transaction = Transaction::create([
                'user_id' => auth()->id(),
                'total_amount' => $totalAmount,
                'status' => 'pending',
                'midtrans_transaction_id' => $transactionId // Set initial value
            ]);

            // Lanjutkan proses lainnya
            foreach ($orders as $order) {
                TransactionItem::create([
                    'transaction_id' => $transaction->id,
                    'order_id' => $order->id,
                    'quantity' => $order->quantity,
                    'price' => $order->book->price,
                    'subtotal' => $order->total_price
                ]);

                $order->update(['status' => 'pending']);
            }

            // Set up Midtrans payment
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = config('midtrans.is_production');
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;

            $params = [
                'transaction_details' => [
                    'order_id' => $transactionId,
                    'gross_amount' => (int) $totalAmount,
                ],
                'customer_details' => [
                    'first_name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                ],
                'item_details' => $orders->map(function ($order) {
                    return [
                        'id' => $order->book->id,
                        'price' => (int) $order->book->price,
                        'quantity' => $order->quantity,
                        'name' => $order->book->title,
                    ];
                })->toArray(),
            ];

            $snapToken = Snap::getSnapToken($params);

            // Update transaction with Midtrans ID (if necessary)
            $transaction->update([
                'midtrans_transaction_id' => $transactionId
            ]);

            DB::commit();

            return view('checkout', [
                'snapToken' => $snapToken,
                'transaction' => $transaction,
                'orders' => $orders
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Checkout Error: ' . $e->getMessage(), [
                'user_id' => auth()->id(),
                'selected_orders' => $request->selected_orders,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()
                ->route('orders.index')
                ->with('error', 'Checkout failed: ' . $e->getMessage());
        }
    }

    public function callback(Request $request)
    {
        try {
            $serverKey = config('midtrans.server_key');
            $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

            if ($hashed != $request->signature_key) {
                throw new \Exception('Invalid signature');
            }

            $transaction = Transaction::where('midtrans_transaction_id', $request->order_id)->first();

            if (!$transaction) {
                throw new \Exception('Transaction not found');
            }

            DB::beginTransaction();

            $transaction->update([
                'payment_type' => $request->payment_type,
                'payment_status' => $request->transaction_status,
                'paid_at' => $request->settlement_time ? now() : null
            ]);

            if ($request->transaction_status == 'settlement') {
                // Update associated orders
                $transaction->items->each(function ($item) {
                    $item->order->update(['status' => 'paid']);
                });
            }

            DB::commit();
            return response()->json(['status' => 'success']);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Callback Error: ' . $e->getMessage(), [
                'request' => $request->all(),
                'error' => $e->getMessage()
            ]);

            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}