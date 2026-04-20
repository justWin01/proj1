<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PigHealth AI | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body { background-color: #020617; } /* Deepest Navy/Black */
        .lucide { width: 20px; height: 20px; stroke-width: 2px; }
    </style>
</head>
<body class="text-slate-200">
    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-950 border-r border-slate-800 flex flex-col">
            <div class="p-6 flex items-center gap-2">
                <i data-lucide="shield-check" class="text-green-500"></i>
                <h1 class="text-lg font-bold tracking-tight text-white">PIGHEALTH</h1>
            </div>

            <nav class="flex-1 px-4 space-y-1">
                <a href="#" class="flex items-center gap-3 p-3 bg-slate-900 rounded-lg text-green-400">
                    <i data-lucide="layout-dashboard"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i data-lucide="map"></i> GIS Heatmap
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i data-lucide="camera"></i> AI Vision
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i data-lucide="activity"></i> Health Logs
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition">
                    <i data-lucide="settings"></i> Settings
                </a>
            </nav>

            <div class="p-6 border-t border-slate-800 text-xs text-slate-500">
                <div class="flex items-center gap-2 mb-1">
                    <i data-lucide="database" class="w-3 h-3"></i> Sync: Active
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="cpu" class="w-3 h-3 text-green-500"></i> AI Model: v2.4.0
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto">
            @yield('content')
        </main>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
      lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
