<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/js/app.js'])

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-900">

    <div class="flex w-4/5 max-w-10xl shadow-2xl rounded-2xl overflow-hidden justify-center">



        <div class="w-full md:w-1/2 bg-gray-800/80 backdrop-blur-md p-12 flex flex-col justify-center">

            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-white">Welcome Home</h1>
                <a href="/logout" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition duration-300">
                    Logout
                </a>
            </div>

            <!-- Card -->
            <div class="bg-gray-700/70 p-8 rounded-xl shadow-lg">
                <h2 class="text-2xl font-bold text-white mb-4">Hello, Admin!</h2>
                <p class="text-gray-300 mb-6">
                    You are successfully logged in. Enjoy your dashboard experience.
                </p>
            </div>

            <!-- Footer -->
            <p class="text-center text-gray-400 text-xs mt-8">
                ECL System © 2026
            </p>

        </div>

    </div>

</body>
</html>
