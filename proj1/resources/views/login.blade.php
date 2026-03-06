<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/js/app.js'])

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-900">

    <div class="flex w-4/5 max-w-6xl shadow-2xl rounded-2xl overflow-hidden">

        <!-- Left Image -->
        <div class="w-1/2 hidden md:block">
            <img src="" alt="Login Image" class="h-full w-full object-cover">
        </div>

        <!-- Right Form -->
        <div class="w-full md:w-1/2 bg-gray-800/80 backdrop-blur-md p-12 flex flex-col justify-center">

            <!-- Tabs -->
            <div class="flex justify-between mb-8 text-white text-lg font-semibold">
                <button class="border-b-2 border-blue-500 pb-2">Sign In</button>
                <button class="text-gray-400">Sign Up</button>
            </div>

            <!-- Form -->
            <form id="loginForm" class="space-y-6">

                <div>
                    <label class="text-sm text-gray-300">Email</label>
                    <input
                        id="email"
                        type="email"
                        placeholder="your@email.com"
                        class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <div>
                    <label class="text-sm text-gray-300">Password</label>
                    <input
                        id="password"
                        type="password"
                        placeholder="********"
                        class="w-full mt-1 px-4 py-2 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                </div>

                <div class="flex justify-between items-center text-sm text-gray-400">
                    <label class="flex items-center space-x-1">
                        <input type="checkbox" class="accent-blue-500">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="hover:underline">Forgot password?</a>
                </div>

                <button type="submit" class="w-full py-2.5 mt-2 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition duration-300">
                    Log in
                </button>

                <button type="button" class="w-full py-2.5 mt-2 border border-blue-500 text-blue-500 font-bold rounded-lg hover:bg-blue-500 hover:text-white transition duration-300">
                    Sign in with Google
                </button>

            </form>

            <p class="text-center text-gray-500 text-xs mt-8">
                Privacy · Terms · About
            </p>
        </div>

    </div>
</body>
</html>
