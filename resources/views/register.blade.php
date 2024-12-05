<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Firlan Books Store</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-amber-50/30">
    <x-navbar></x-navbar>
    <main class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="flex min-h-[calc(100vh-16rem)] items-center justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-serif font-bold text-amber-800">Create Account</h2>
                        <p class="text-amber-700 mt-2">Join our community of book lovers</p>
                    </div>

                    <!-- Registration Form -->
                    <form class="space-y-6" action="/register" method="POST">
                        @csrf
                        <!-- Name Input -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-amber-700">Full Name</label>
                            <input type="text" name="name" id="name" required
                                class="mt-1 block w-full px-4 py-2 border border-amber-200 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-amber-50"
                                placeholder="Enter your full name">
                        </div>

                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-amber-700">Email Address</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 block w-full px-4 py-2 border border-amber-200 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-amber-50"
                                placeholder="Enter your email">
                        </div>

                        <!-- Password Input -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-amber-700">Password</label>
                            <input type="password" name="password" id="password" required
                                class="mt-1 block w-full px-4 py-2 border border-amber-200 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-amber-50"
                                placeholder="Create a password">
                        </div>

                        <!-- Confirm Password Input -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-amber-700">Confirm
                                Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="mt-1 block w-full px-4 py-2 border border-amber-200 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-amber-50"
                                placeholder="Confirm your password">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-amber-700 text-white px-6 py-3 rounded-full hover:bg-amber-800 transition-colors duration-300 font-medium">
                            Create Account
                        </button>
                    </form>

                    <!-- Sign In Link -->
                    <p class="mt-6 text-center text-sm text-amber-700">
                        Already have an account?
                        <a href="/login" class="font-medium text-amber-800 hover:text-amber-900">Sign in here</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>

</html>