<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

<div class="min-h-screen flex flex-col">

    <nav class="bg-blue-600 text-white p-4 flex justify-between">
        <h1 class="font-bold">My Laravel App</h1>

        <a href="/logout" class="bg-red-500 px-4 py-1 rounded hover:bg-red-600">
            Logout
        </a>
    </nav>

    <div class="flex-grow flex items-center justify-center">

        <div class="bg-white p-10 rounded-xl shadow-lg text-center">

            <h1 class="text-3xl font-bold mb-4">
                Welcome Home
            </h1>

            <p class="text-gray-600">
                You are successfully logged in.
            </p>

        </div>

    </div>

</div>

</body>
</html>
