<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book["title"] }} - Firlan Books Store</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-50/30">
    <x-navbar></x-navbar>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm text-amber-700">
                <li><a href="/" class="hover:text-amber-900">Home</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li><a href="/products" class="hover:text-amber-900">Products</a></li>
                <li><i class="fa-solid fa-chevron-right text-xs"></i></li>
                <li class="text-amber-900 font-medium">{{ $book["title"] }}</li>
            </ol>
        </nav>

        <!-- Product Details Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column - Image Gallery -->
            <div class="space-y-6">
                <!-- Main Image -->
                <div class="aspect-[3/4] bg-white rounded-2xl shadow-sm overflow-hidden">
                    @if(isset($book["image-cover-url"]))
                        <img src="{{ asset($book['image-cover-url']) }}" alt="{{ $book['title'] }}"
                            class="w-full h-full object-contain p-8">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-amber-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-amber-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    @endif
                </div>

                <!-- Thumbnail Navigation -->
                <div class="grid grid-cols-4 gap-4">
                    @for($i = 0; $i < 4; $i++)
                        <button
                            class="aspect-square bg-white rounded-lg shadow-sm overflow-hidden border-2 border-transparent hover:border-amber-400 transition-colors">
                            @if(isset($book["image-cover-url"]))
                                <img src="{{ asset($book['image-cover-url']) }}" alt="Product view {{ $i + 1 }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-amber-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </button>
                    @endfor
                </div>
            </div>

            <!-- Right Column - Product Info -->
            <div class="space-y-8">
                <!-- Title and Categories -->
                <div class="space-y-4">
                    <h1 class="text-3xl font-serif font-bold text-amber-800">{{ $book["title"] }}</h1>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($book["categories"] as $category)
                            <span class="px-3 py-1 text-sm font-medium bg-amber-100 text-amber-800 rounded-full">
                                {{ $category }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Price Section -->
                <div class="space-y-2">
                    @if(isset($book["original_price"]) && $book["original_price"] > $book["price"])
                        <p class="text-lg text-gray-500 line-through">
                            Rp {{ number_format($book["original_price"], 0, ',', '.') }}
                        </p>
                    @endif
                    <p class="text-3xl font-bold text-amber-800">
                        Rp {{ number_format($book["price"], 0, ',', '.') }}
                    </p>
                </div>

                <!-- Quick Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Quantity Selector -->
                    <div class="flex items-center">
                        <button
                            class="p-2 rounded-l-lg bg-amber-100 text-amber-700 hover:bg-amber-200 transition-colors">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="number" value="1" min="1"
                            class="w-16 py-2 text-center border-y-2 border-amber-100 focus:outline-none text-amber-800">
                        <button
                            class="p-2 rounded-r-lg bg-amber-100 text-amber-700 hover:bg-amber-200 transition-colors">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>

                    <!-- Add to Cart Button -->
                    <button
                        class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-amber-700 text-white rounded-full hover:bg-amber-800 transition-colors">
                        <i class="fa-solid fa-cart-plus"></i>
                        <span>Add to Cart</span>
                    </button>

                    <!-- Wishlist Button -->
                    <button class="p-3 rounded-full bg-amber-100 text-amber-700 hover:bg-amber-200 transition-colors">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <!-- Share Button -->
                    <button class="p-3 rounded-full bg-amber-100 text-amber-700 hover:bg-amber-200 transition-colors">
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>
                </div>

                <!-- Description -->
                <div class="prose prose-amber max-w-none">
                    <h2 class="text-xl font-semibold text-amber-800 mb-4">Description</h2>
                    <p class="text-amber-700">{{ $book["description"] }}</p>
                </div>

                <!-- Product Details -->
                <div class="space-y-4">
                    <h2 class="text-xl font-semibold text-amber-800">Product Details</h2>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div class="space-y-2">
                            <p class="flex justify-between text-amber-700">
                                <span class="font-medium">Publisher</span>
                                <span>Publisher Name</span>
                            </p>
                            <p class="flex justify-between text-amber-700">
                                <span class="font-medium">Language</span>
                                <span>Indonesian</span>
                            </p>
                            <p class="flex justify-between text-amber-700">
                                <span class="font-medium">Pages</span>
                                <span>256</span>
                            </p>
                        </div>
                        <div class="space-y-2">
                            <p class="flex justify-between text-amber-700">
                                <span class="font-medium">ISBN</span>
                                <span>978-3-16-148410-0</span>
                            </p>
                            <p class="flex justify-between text-amber-700">
                                <span class="font-medium">Weight</span>
                                <span>300g</span>
                            </p>
                            <p class="flex justify-between text-amber-700">
                                <span class="font-medium">Dimensions</span>
                                <span>15 x 21 cm</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Shipping Info -->
                <div class="bg-amber-100/50 rounded-xl p-6 space-y-4">
                    <h2 class="text-xl font-semibold text-amber-800">Shipping Information</h2>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 text-amber-700">
                            <i class="fa-solid fa-truck-fast mt-1"></i>
                            <p>Free shipping for orders above Rp 200.000</p>
                        </div>
                        <div class="flex items-start gap-3 text-amber-700">
                            <i class="fa-solid fa-box mt-1"></i>
                            <p>Secure packaging to protect your books</p>
                        </div>
                        <div class="flex items-start gap-3 text-amber-700">
                            <i class="fa-solid fa-clock mt-1"></i>
                            <p>Order before 14:00 WIB for same-day shipping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <section class="mt-16">
            <h2 class="text-2xl font-serif font-bold text-amber-800 mb-8">You May Also Like</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                @for($i = 0; $i < 4; $i++)
                    <div class="group">
                        <div
                            class="bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                            <div class="relative aspect-[3/4] overflow-hidden bg-amber-50">
                                <div class="w-full h-full flex items-center justify-center bg-amber-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-amber-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <button
                                        class="bg-white text-amber-800 px-4 py-2 rounded-full font-medium transform -translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="font-medium text-amber-900 line-clamp-2">Related Book Title</h3>
                                <p class="mt-2 text-xl font-bold text-amber-800">Rp 150.000</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
    </main>

    <x-footer></x-footer>
</body>

</html>