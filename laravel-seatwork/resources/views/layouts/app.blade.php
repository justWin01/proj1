<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PigHealth | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <nav class="w-64 bg-slate-800 text-white p-6">
            <h1 class="text-2xl font-bold mb-8">PigHealth AI</h1>
            <ul>
                <li class="mb-4"><a href="#" class="hover:text-green-400">Dashboard</a></li>
                <li class="mb-4"><a href="#" class="hover:text-green-400">GIS Heatmap</a></li>
                <li class="mb-4"><a href="#" class="hover:text-green-400">Detection Logs</a></li>
            </ul>
        </nav>

        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow p-4 flex justify-between">
                <span class="font-semibold text-gray-700">Farm: Northern Sector A</span>
                <span class="text-red-500 animate-pulse">● Live AI Monitoring</span>
            </header>

            <main class="p-6 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('scripts')
</body>
</html>
