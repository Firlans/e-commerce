<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - BiblioHaven</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-50/30">
    <x-navbar></x-navbar>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-serif font-bold text-amber-800">Our Books Collection</h1>
            <p class="text-amber-700 mt-2">Discover our carefully curated selection of books</p>
        </div>

        <!-- Filters and Products Container -->
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            <aside class="w-full lg:w-64 space-y-6">
                <!-- Search Filter -->
                <div class="bg-white p-4 rounded-xl shadow-sm">
                    <h2 class="font-semibold text-amber-800 mb-3">Search</h2>
                    <div class="relative">
                        <input type="text" placeholder="Search books..."
                            class="w-full pl-10 pr-4 py-2 rounded-lg border-2 border-amber-200 focus:border-amber-400 focus:outline-none">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="bg-white p-4 rounded-xl shadow-sm">
                    <h2 class="font-semibold text-amber-800 mb-3">Categories</h2>
                    <div class="space-y-2">
                        @foreach($categories as $category)
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="rounded border-amber-300 text-amber-600 focus:ring-amber-500">
                                <span class="text-amber-700">{{ $category->title }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="bg-white p-4 rounded-xl shadow-sm">
                    <h2 class="font-semibold text-amber-800 mb-3">Price Range</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="text-sm text-amber-700">Min Price</label>
                            <input type="number" placeholder="Rp 0"
                                class="w-full mt-1 px-3 py-2 rounded-lg border-2 border-amber-200 focus:border-amber-400 focus:outline-none">
                        </div>
                        <div>
                            <label class="text-sm text-amber-700">Max Price</label>
                            <input type="number" placeholder="Rp 1.000.000"
                                class="w-full mt-1 px-3 py-2 rounded-lg border-2 border-amber-200 focus:border-amber-400 focus:outline-none">
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Products Section -->
            <div class="flex-1">
                <!-- Sort and View Options -->
                <div class="bg-white p-4 rounded-xl shadow-sm mb-6">
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                        <!-- Sort Options -->
                        <div class="flex items-center space-x-3">
                            <label class="text-amber-700">Sort by:</label>
                            <select
                                class="rounded-lg border-2 border-amber-200 focus:border-amber-400 focus:outline-none px-3 py-2">
                                <option>Newest</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Popularity</option>
                            </select>
                        </div>

                        <!-- View Options -->
                        <div class="flex items-center space-x-3">
                            <span class="text-amber-700">View:</span>
                            <button class="p-2 rounded-lg bg-amber-100 text-amber-700 hover:bg-amber-200">
                                <i class="fa-solid fa-grid-2 text-lg"></i>
                            </button>
                            <button class="p-2 rounded-lg hover:bg-amber-100 text-amber-700">
                                <i class="fa-solid fa-list text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($books as $book)
                        <div class="group">
                            <div
                                class="bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                <!-- Image Container -->
                                <div class="relative aspect-[3/4] overflow-hidden bg-amber-50">
                                    @if(isset($book->image_cover_url))
                                        <img src="{{ asset($book->image_cover_url) }}" alt="{{ $book->title }}"
                                            class="w-10/12 h-full mx-auto object-cover object-center transform group-hover:scale-105 transition-transform duration-300">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-amber-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-amber-300" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                            </svg>
                                        </div>
                                    @endif

                                    <!-- Quick Actions -->
                                    <div
                                        class="absolute top-3 right-3 space-y-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="p-2 rounded-full bg-white shadow-md text-amber-700 hover:text-amber-900">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                        <button
                                            class="p-2 rounded-full bg-white shadow-md text-amber-700 hover:text-amber-900">
                                            <i class="fa-solid fa-share-nodes"></i>
                                        </button>
                                    </div>

                                    <!-- Quick View -->
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                        <a href="/product/{{ $book['id'] }}"
                                            class="bg-white text-amber-800 px-6 py-3 rounded-full font-medium transform -translate-y-2 group-hover:translate-y-0 transition-transform duration-300 hover:bg-amber-50">
                                            View Details
                                        </a>
                                    </div>
                                </div>

                                <!-- Product Info -->
                                <div class="p-4 space-y-3">
                                    <!-- Title -->
                                    <a href="/product/{{ $book['id'] }}" class="block">
                                        <h3
                                            class="font-medium text-lg text-amber-900 line-clamp-2 hover:text-amber-700 transition-colors">
                                            {{ $book["title"] }}
                                        </h3>
                                    </a>

                                    <!-- Categories -->
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ($book->categories as $category)
                                            <span
                                                class="inline-block px-2 py-1 text-xs font-medium bg-amber-100 text-amber-800 rounded-full">
                                                {{ $category->title }}
                                            </span>
                                        @endforeach
                                    </div>

                                    <!-- Price and Action -->
                                    <div class="flex items-center justify-between pt-2">
                                        <div class="space-y-1">
                                            @if(isset($book["original_price"]) && $book["original_price"] > $book["price"])
                                                <p class="text-sm text-gray-500 line-through">
                                                    Rp {{ number_format($book["original_price"], 0, ',', '.') }}
                                                </p>
                                            @endif
                                            <p class="text-xl font-bold text-amber-800">
                                                Rp {{ number_format($book["price"], 0, ',', '.') }}
                                            </p>
                                        </div>

                                        <!-- Add to Cart -->
                                        <button
                                            class="flex items-center gap-2 px-4 py-2 rounded-full bg-amber-100 text-amber-700 hover:bg-amber-700 hover:text-white transition-colors duration-300">
                                            <i class="fa-solid fa-cart-plus"></i>
                                            <span class="hidden sm:inline">Add</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-2">
                        <button
                            class="p-2 rounded-lg border-2 border-amber-200 text-amber-700 hover:bg-amber-100 disabled:opacity-50 disabled:cursor-not-allowed">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button class="px-4 py-2 rounded-lg bg-amber-700 text-white">1</button>
                        <button
                            class="px-4 py-2 rounded-lg border-2 border-amber-200 text-amber-700 hover:bg-amber-100">2</button>
                        <button
                            class="px-4 py-2 rounded-lg border-2 border-amber-200 text-amber-700 hover:bg-amber-100">3</button>

                        <span class="px-4 py-2 text-amber-700">...</span>

                        <button
                            class="px-4 py-2 rounded-lg border-2 border-amber-200 text-amber-700 hover:bg-amber-100">12</button>

                        <button class="p-2 rounded-lg border-2 border-amber-200 text-amber-700 hover:bg-amber-100">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>