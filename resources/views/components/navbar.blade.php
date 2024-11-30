<header class="sticky top-0 z-50 w-full bg-gradient-to-r from-amber-50 to-amber-100 shadow-md font-main">
    <nav>
        <!-- Main navbar container -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo and Brand -->
                <div class="flex-shrink-0 flex items-center">
                    <h1
                        class="text-2xl md:text-3xl font-serif font-bold text-amber-800 hover:text-amber-700 transition-colors">
                        BibliHaven <!-- TODO : GANTI DENGAN NAMA TOKO APAPUN JANGAN NAMA FIRLAN -->
                    </h1>
                </div>

                <!-- Search Bar - Hidden on mobile -->
                <div class="hidden md:block flex-grow max-w-2xl mx-8">
                    <div class="relative">
                        <input type="text" name="search" placeholder="Cari buku favoritmu..."
                            class="w-full pl-10 pr-4 py-2 rounded-full border-2 border-amber-200 focus:border-amber-400 focus:outline-none bg-white placeholder-gray-400 text-gray-700">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-amber-700 hover:text-amber-900 font-medium transition-colors">
                        Home
                    </a>
                    <a href="/products" class="text-amber-700 hover:text-amber-900 font-medium transition-colors">
                        Products
                    </a>
                    <a href="/about" class="text-amber-700 hover:text-amber-900 font-medium transition-colors">
                        About
                    </a>
                    <button class="bg-amber-700 text-white px-4 py-2 rounded-full hover:bg-amber-800 transition-colors">
                        <!-- <i class="fa-solid fa-moon"></i> -->
                        <!-- <i class="fa-solid fa-sun"></i> -->
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="text-amber-700 hover:text-amber-900">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Search Bar - Only visible on mobile -->
        <div class="md:hidden px-4 pb-4">
            <div class="relative">
                <input type="text" name="search" placeholder="Cari buku favoritmu..."
                    class="w-full pl-10 pr-4 py-2 rounded-full border-2 border-amber-200 focus:border-amber-400 focus:outline-none bg-white placeholder-gray-400 text-gray-700">
                <div class="absolute left-3 top-2.5 text-gray-400">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </nav>
</header>