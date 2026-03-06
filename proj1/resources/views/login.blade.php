<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    @vite(['resources/css/app.css'])
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-80 p-8 bg-white rounded-xl shadow-lg">

        <h2 class="text-2xl font-bold text-center mb-6">
            Login
        </h2>

        <form action="/home" class="space-y-4">

            <input
                type="text"
                placeholder="Username"
                required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >

            <input
                type="password"
                placeholder="Password"
                required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >

            <button
                type="submit"
                class="w-full py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 transition"
            >
                Login
            </button>

        </form>

    </div>

</body>
</html>
