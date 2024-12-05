<header class="sticky top-0 z-50 w-full bg-gradient-to-r from-amber-50 to-amber-100 shadow-md font-main">
    <nav>
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
                    <div class="flex space-x-4">
                        @guest
                            <a href="/login"
                                class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors">
                                Sign In
                            </a>
                            <a href="/register"
                                class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors">
                                Sign Up
                            </a>
                        @else
                            <a href="/cart"
                                class="bg-amber-700 text-white px-4 py-2 rounded-full hover:bg-amber-800 transition-colors">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                            <div class="relative">
                                <button id="profile-menu-button"
                                    class="bg-amber-700 text-white px-4 py-2 rounded-full hover:bg-amber-800 transition-colors">
                                    <i class="fa-solid fa-user"></i>
                                </button>
                                <div id="profile-dropdown"
                                    class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
                                    <a href="/profile"
                                        class="block px-4 py-2 text-sm text-amber-700 hover:bg-amber-50">Profile</a>
                                    <a href="/orders"
                                        class="block px-4 py-2 text-sm text-amber-700 hover:bg-amber-50">Orders</a>
                                    <form action="/logout" method="POST" class="block">
                                        @csrf
                                        <button type="submit"
                                            class="w-full text-left px-4 py-2 text-sm text-amber-700 hover:bg-amber-50">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-amber-700 hover:text-amber-900">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
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
                @guest
                    <div class="flex flex-col space-y-2">
                        <a href="/login"
                            class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors text-center">
                            Sign In
                        </a>
                        <a href="/register"
                            class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors text-center">
                            Sign Up
                        </a>
                    </div>
                @else
                    <div class="flex flex-col space-y-2">
                        <a href="/cart"
                            class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors text-center">
                            Cart
                        </a>
                        <a href="/profile"
                            class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors text-center">
                            Profile
                        </a>
                        <a href="/orders"
                            class="bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors text-center">
                            Orders
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit"
                                class="w-full bg-amber-700 text-white px-6 py-2 rounded-full hover:bg-amber-800 transition-colors">
                                Logout
                            </button>
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
</header>

<script src="{{ asset('js/navbar.js') }}"></script>