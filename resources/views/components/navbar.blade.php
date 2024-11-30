<header class="sticky top-0 z-50 w-full bg-gradient-to-r from-amber-50 to-amber-100 shadow-md font-main">
    <nav>
        <!-- Main navbar container -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo and Brand -->
                <div class="flex-shrink-0 flex items-center">
                    <h1
                        class="text-2xl md:text-3xl font-serif font-bold text-amber-800 hover:text-amber-700 transition-colors">
                        BiblioHaven
                    </h1>
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
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-amber-700 hover:text-amber-900">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu - Hidden by default, shows when mobile menu button is clicked -->
        <div id="mobile-menu" class="md:hidden hidden bg-amber-50 p-4">
            <div class="flex flex-col space-y-4">
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
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
    </nav>
</header>

<script src="{{ asset('js/navbar.js') }}"></script>
