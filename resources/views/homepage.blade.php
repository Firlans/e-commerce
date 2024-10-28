<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my store</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-navbar></x-navbar>
    <main class="
        max-w-7xl mx-auto px-4 mt-6
        sm:px-6 
        lg:px-8 
    ">
        <!-- Banner Container -->
        <div class="relative overflow-hidden bg-gradient-to-r from-amber-50 to-amber-100 rounded-2xl shadow-lg">
            <!-- Image and Content Grid -->
            <div class="
                grid gap-8 items-center
                md:grid-cols-2 
            ">
                <!-- Content Section -->
                <div class="
                    p-8 space-y-6
                    md:p-12 
                    lg:p-16 
                ">
                    <div class="space-y-4">
                        <!-- Sale Badge -->
                        <span class="inline-block px-4 py-1 bg-amber-600 text-white rounded-full text-sm font-medium">
                            Sale Event
                        </span>

                        <!-- Promotion Title -->
                        <h2 class="
                            text-3xl font-serif font-bold text-amber-800
                            md:text-4xl 
                            lg:text-5xl
                        ">
                            {{ $promotion["promotion"] }}
                        </h2>

                        <!-- Tagline -->
                        <h3 class="
                            text-xl  text-amber-700 font-medium
                            md:text-2xl
                        ">
                            {{ $promotion["tagLine"] }}
                        </h3>

                        <!-- Description -->
                        <p class="
                            text-amber-700 text-base 
                            md:text-lg
                        ">
                            {{ $promotion["decription"] }}
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <button
                        class="inline-flex items-center px-6 py-3 bg-amber-700 hover:bg-amber-800 text-white font-medium rounded-full transition-colors duration-300 group">
                        Lihat Promo
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- Image Section -->
                <div class="
                    relative h-64
                    md:h-full
                ">
                    <img src="{{ asset($image[0]) }}" alt="Book promotion"
                        class="absolute inset-0 w-full h-full object-cover object-center">
                    <!-- Decorative Elements -->
                    <div class="absolute inset-0 bg-gradient-to-t from-amber-100/50 to-transparent mix-blend-overlay">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-amber-300/20 rounded-full blur-2xl"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-amber-300/20 rounded-full blur-2xl"></div>
                </div>
            </div>
        </div>
    </main>
    <section class="
        product max-w-7xl mx-auto px-4 py-12
        sm:px-6 
        lg:px-8 
    ">
        <!-- Section Header -->
        <div class="text-center mb-12 space-y-4">
            <h2 class="
                text-3xl font-serif font-bold text-amber-800
                md:text-4xl 
            ">
                Buku Terlaris
            </h2>
            <p class="text-amber-700 max-w-2xl mx-auto">
                Temukan koleksi buku bestseller kami yang telah menginspirasi ribuan pembaca
            </p>
        </div>

        <!-- Product Grid -->
        <div class="
            grid grid-cols-2 text-xs gap-6
            sm:grid-cols-3
            lg:grid-cols-4
        ">
            @foreach ($books as $book)
                <div class="group">
                    <!-- Product Card -->
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-shadow hover:shadow-xl">
                        <!-- Product Image Container -->
                        <div class="relative aspect-[3/4] overflow-hidden bg-amber-50">
                            @if(isset($book["image-cover-url"]))
                                <img src="{{ asset($book['image-cover-url']) }}" alt="{{ $book['title'] }}"
                                    class="w-10/12 h-full mx-auto object-cover object-center transform group-hover:scale-105 transition-transform duration-300">
                            @else
                                <!-- Placeholder for missing image -->
                                <div class="w-full h-full flex items-center justify-center bg-amber-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-amber-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            @endif

                            <!-- Quick View Button -->
                            <a href="/product/{{ $book["id"]}}"
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <button
                                    class="bg-white text-amber-800 px-4 py-2 rounded-full font-medium transform -translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    Lihat Detail
                                </button>
                            </a>
                        </div>

                        <!-- Product Info -->
                        <div class="p-4 space-y-3">
                            <!-- Title -->
                            <h3
                                class="font-medium text-lg text-amber-900 line-clamp-2 hover:text-amber-700 transition-colors">
                                {{ $book["title"] }}
                            </h3>

                            <!-- Categories -->
                            <div class="flex flex-wrap gap-2">
                                @foreach ($book["categories"] as $category)
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-medium bg-amber-100 text-amber-800 rounded-full">
                                        {{ $category }}
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

                                <!-- Cart Button -->
                                <button
                                    class="p-2 rounded-full bg-amber-100 text-amber-700 hover:bg-amber-700 hover:text-white transition-colors duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="/products"
                class="inline-flex items-center px-6 py-3 bg-amber-700 hover:bg-amber-800 text-white font-medium rounded-full transition-colors duration-300 group">
                Lihat Semua Buku
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>