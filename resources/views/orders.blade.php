<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - BiblioHaven</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    <div class="text-center py-12">
                        <div class="mb-4">
                            <i class="fa-solid fa-shopping-cart text-5xl text-amber-300"></i>
                        </div>
                        <p class="text-amber-700">No pending orders found</p>
                        <a href="/products"
                            class="mt-4 inline-block bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors">
                            Continue Shopping
                        </a>
                    </div>
                @else
                    <div class="space-y-6">
                        @foreach($orders as $order)
                            <div class="border rounded-lg p-4 hover:border-amber-300 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-20 h-24 bg-amber-100 rounded-lg overflow-hidden">
                                            @if($order->book->image_cover_url)
                                                <img src="{{ asset($order->book->image_cover_url) }}"
                                                    alt="{{ $order->book->title }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center">
                                                    <i class="fa-solid fa-book text-2xl text-amber-300"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-amber-900">{{ $order->book->title }}</h3>
                                            <p class="text-sm text-amber-700">Quantity: {{ $order->quantity }}</p>
                                            <p class="text-sm text-amber-700">Total: Rp
                                                {{ number_format($order->total_price, 0, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <span class="px-3 py-1 text-sm font-medium bg-amber-100 text-amber-800 rounded-full">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                        <!-- Alpine.js Dropdown -->
                                        <div x-data="{ isOpen: false }" class="relative">
                                            <button @click="isOpen = !isOpen" @keydown.escape="isOpen = false"
                                                class="text-amber-700 hover:text-amber-900">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>

                                            <!-- Dropdown Menu -->
                                            <div x-show="isOpen" @click.away="isOpen = false"
                                                x-transition:enter="transition ease-out duration-200"
                                                x-transition:enter-start="opacity-0 transform scale-95"
                                                x-transition:enter-end="opacity-100 transform scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="opacity-100 transform scale-100"
                                                x-transition:leave-end="opacity-0 transform scale-95"
                                                class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1 z-10"
                                                style="display: none;">
                                                <form action="{{ route('cart.remove', $order->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="w-full text-left px-4 py-2 text-sm text-amber-700 hover:bg-amber-50">
                                                        <i class="fa-solid fa-trash-can mr-2"></i>Remove from Cart
                                                    </button>
                                                </form>
                                                <button
                                                    class="w-full text-left px-4 py-2 text-sm text-amber-700 hover:bg-amber-50">
                                                    <i class="fa-solid fa-heart mr-2"></i>Save for Later
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Checkout Button -->
                    <div class="mt-6 text-right">
                        <form method="POST">
                            @csrf
                            <button type="submit"
                                class="inline-block bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors">
                                Proceed to Checkout
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>