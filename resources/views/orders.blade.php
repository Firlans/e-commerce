<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - BiblioHaven</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Midtrans -->
    @if(request()->routeIs('checkout.*'))
        <script src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
    @endif
</head>

<body class="bg-amber-50/30">
    <x-navbar></x-navbar>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm text-amber-700">
                <li><a href="/" class="hover:text-amber-900">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li class="text-amber-900 font-medium">My Orders</li>
            </ol>
        </nav>

        <!-- Orders List -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6">
                <h1 class="text-2xl font-serif font-bold text-amber-800 mb-6">Pending Orders</h1>
                @if($orders->isEmpty())
                    <x-empty-state icon="shopping-cart" message="No pending orders found"
                        :action-link="route('products.index')" action-text="Continue Shopping" />
                @else
                    <!-- Main orders container -->
                    <div class="space-y-6" id="ordersContainer">
                        @foreach($orders as $order)
                            <div class="border rounded-lg p-4 hover:border-amber-300 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <!-- Checkout checkbox -->
                                        <div class="flex items-center">
                                            <input type="checkbox"
                                                class="checkout-item form-checkbox h-5 w-5 text-amber-600 rounded border-amber-300 focus:ring-amber-500"
                                                data-order-id="{{ $order->id }}" data-price="{{ $order->total_price }}"
                                                onchange="updateTotal()">
                                        </div>

                                        <div class="w-20 h-24 bg-amber-100 rounded-lg overflow-hidden">
                                            <x-book-cover :book="$order->book" />
                                        </div>

                                        <div>
                                            <h3 class="font-medium text-amber-900">{{ $order->book->title }}</h3>
                                            <p class="text-sm text-amber-700">Quantity: {{ $order->quantity }}</p>
                                            <p class="text-sm text-amber-700">Price: Rp
                                                {{ number_format($order->total_price, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <x-order-status :status="$order->status" />
                                        <div class="relative" x-data="{ open: false }">
                                            <button @click="open = !open" @click.away="open = false" type="button"
                                                class="text-amber-700 hover:text-amber-900">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>

                                            <div x-show="open"
                                                class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1 z-10">
                                                <button type="button" onclick="deleteOrder({{ $order->id }})"
                                                    class="w-full text-left px-4 py-2 text-sm text-amber-700 hover:bg-amber-50">
                                                    <i class="fa-solid fa-trash-can mr-2"></i>Remove from Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Total and Checkout Section -->
                    <div class="mt-6 border-t pt-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-lg font-medium text-amber-800">Total Selected:</span>
                            <span class="text-xl font-bold text-amber-900" id="totalAmount">Rp 0</span>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" onclick="processCheckout()" id="checkoutButton" disabled
                                class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                Proceed to Checkout
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Hidden forms for actions -->
        <form id="deleteForm" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>

        <form id="checkoutForm" action="{{ route('checkout.process') }}" method="POST" style="display: none;">
            @csrf
            <input type="hidden" name="selected_orders" id="selectedOrders">
        </form>

    </main>

    <x-footer></x-footer>
    <script>
        function updateTotal() {
            const checkboxes = document.querySelectorAll('.checkout-item');
            let total = 0;
            let hasChecked = false;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    hasChecked = true;
                    total += parseFloat(checkbox.dataset.price);
                }
            });

            document.getElementById('totalAmount').textContent =
                `Rp ${total.toLocaleString('id-ID')}`;

            document.getElementById('checkoutButton').disabled = !hasChecked;
        }

        function deleteOrder(orderId) {
            if (confirm('Are you sure you want to remove this item?')) {
                const form = document.getElementById('deleteForm');
                form.action = `/cart/${orderId}`;
                form.submit();
            }
        }

        function processCheckout() {
            const checkboxes = document.querySelectorAll('.checkout-item:checked');
            const selectedOrders = Array.from(checkboxes).map(cb => cb.dataset.orderId);

            if (selectedOrders.length === 0) {
                alert('Please select at least one item to checkout');
                return;
            }

            document.getElementById('selectedOrders').value = JSON.stringify(selectedOrders);
            document.getElementById('checkoutForm').submit();
        }
    </script>
</body>

</html>