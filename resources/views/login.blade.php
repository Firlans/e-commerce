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
                        <h2 class="text-3xl font-serif font-bold text-amber-800">Welcome Back</h2>
                        <p class="text-amber-700 mt-2">Sign in to continue your reading journey</p>
                    </div>

                    <!-- Login Form -->
                    <form class="space-y-6" action="/login" method="POST">
                        @csrf
                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-amber-700">Email Address</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 block w-full px-4 py-2 border border-amber-200 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-amber-50"
                                placeholder="Enter your email">
                        </div>

                        <!-- Password Input -->
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium text-amber-700">Password</label>
                                <a href="/forgot-password" class="text-sm text-amber-800 hover:text-amber-900">
                                    Forgot password?
                                </a>
                            </div>
                            <input type="password" name="password" id="password" required
                                class="mt-1 block w-full px-4 py-2 border border-amber-200 rounded-lg focus:ring-amber-500 focus:border-amber-500 bg-amber-50"
                                placeholder="Enter your password">
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember"
                                class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-amber-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-amber-700">
                                Remember me
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-amber-700 text-white px-6 py-3 rounded-full hover:bg-amber-800 transition-colors duration-300 font-medium">
                            Sign In
                        </button>
                    </form>

                    <!-- Register Link -->
                    <p class="mt-6 text-center text-sm text-amber-700">
                        Don't have an account?
                        <a href="/register" class="font-medium text-amber-800 hover:text-amber-900">Create one here</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
</body>

</html>