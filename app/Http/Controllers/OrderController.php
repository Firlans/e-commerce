<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController
{
    public function index()
    {
        // Get logged in user
        $user = auth()->user();

        // If user not logged in, redirect to login
        if (!$user) {
            return redirect('/login');
        }

        // Get cart items for current user
        $orders = Order::with('book')
            ->where('user_id', $user->id)
            ->where('status', 'cart')
            ->get();

        // Calculate total price of all items in cart
        $totalPrice = $orders->sum('total_price');

        return view('orders', [
            'orders' => $orders,
            'totalPrice' => $totalPrice
        ]);
    }

    public function addToCart(Request $request)
    {
        $user = auth()->user();
        if (!$user) {
            return redirect('/login');
        }

        $request->validate([
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);


        $book = Book::find($request->book_id);

        // Check if item already exists in cart
        $existingOrder = Order::where('user_id', $user->id)
            ->where('book_id', $request->book_id)
            ->where('status', 'cart')
            ->first();

        if ($existingOrder) {
            // Update quantity if item exists
            $existingOrder->quantity += $request->quantity;
            $existingOrder->total_price = $book->price * $existingOrder->quantity;
            $existingOrder->save();
        } else {
            // Create new order if item doesn't exist
            $total_price = $book->price * $request->quantity;
            Order::create([
                'user_id' => $user->id,
                'book_id' => $request->book_id,
                'quantity' => $request->quantity,
                'total_price' => $total_price,
                'status' => 'cart'
            ]);
        }

        return redirect()->route('orders.index')
            ->with('success', 'Item added to cart successfully');
    }

    public function removeFromCart(Order $order)
    {
        // Check if the order belongs to the authenticated user
        if ($order->user_id !== auth()->id()) {
            return redirect()->route('orders.index')
                ->with('error', 'Unauthorized action.');
        }

        // Delete the order
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Item removed from cart successfully.');
    }
}