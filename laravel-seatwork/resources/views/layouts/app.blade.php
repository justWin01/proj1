<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PigHealth AI | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body { background-color: #020617; }
        .lucide { width: 20px; height: 20px; stroke-width: 2px; }


        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #020617; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #334155; }
    </style>
</head>
<body class="text-slate-200">
    <div class="flex h-screen overflow-hidden">

        <aside class="w-64 bg-slate-950 border-r border-slate-800 flex flex-col">
            <div class="p-6 flex items-center gap-3">
                <div class="relative">
                    <img src="/assets/pighealth.png" alt="PigHealth Logo" class="w-10 h-10 rounded-lg object-contain bg-slate-900 border border-slate-800 shadow-lg shadow-green-900/10">

                    <span class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 border-2 border-slate-950 rounded-full"></span>
                </div>
                <div>
                    <h1 class="text-sm font-bold tracking-widest text-white leading-none">PIGHEALTH</h1>
                    <span class="text-[10px] text-slate-500 font-medium uppercase tracking-tighter">AI Monitoring</span>
                </div>
            </div>

            <nav class="flex-1 px-4 space-y-1 mt-2">
                <a href="#" class="flex items-center gap-3 p-3 bg-slate-900 rounded-lg text-green-400 font-medium transition-all">
                    <i data-lucide="layout-dashboard"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition rounded-lg group">
                    <i data-lucide="map" class="group-hover:text-green-500 transition"></i> GIS Heatmap
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition rounded-lg group">
                    <i data-lucide="camera" class="group-hover:text-green-500 transition"></i> AI Vision
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition rounded-lg group">
                    <i data-lucide="activity" class="group-hover:text-green-500 transition"></i> Health Logs
                </a>
                <a href="#" class="flex items-center gap-3 p-3 text-slate-400 hover:bg-slate-900 hover:text-white transition rounded-lg group">
                    <i data-lucide="settings" class="group-hover:text-green-500 transition"></i> Settings
                </a>
            </nav>

            <div class="p-6 border-t border-slate-800 text-xs text-slate-500 bg-slate-950/50">
                <div class="flex items-center gap-2 mb-2">
                    <i data-lucide="database" class="w-3.5 h-3.5"></i>
                    <span>Sync: <span class="text-green-500 uppercase font-bold">Active</span></span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="cpu" class="w-3.5 h-3.5 text-slate-400"></i>
                    <span>AI Model: <span class="text-slate-300">v2.4.0</span></span>
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto bg-[#020617]">
            <header class="h-16 border-b border-slate-800 flex items-center justify-between px-8 bg-slate-950/30 backdrop-blur-md sticky top-0 z-10">
                <div class="flex items-center gap-2">
                    <span class="h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                    <h2 class="text-sm font-semibold text-slate-300 uppercase tracking-wider">Live System Feed</h2>
                </div>
                <div class="flex items-center gap-4 text-slate-400">
                    <button class="hover:text-white transition relative">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full border border-slate-900"></span>
                    </button>
                    <div class="h-8 w-8 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-[10px] font-bold text-white uppercase">
                        Admin
                    </div>
                </div>
            </header>

            <div class="p-8">
                <div class="border-2 border-dashed border-slate-800 rounded-xl h-[80vh] flex items-center justify-center text-slate-600 bg-slate-950/20">
                    Main Dashboard Content Area
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
    </script>
    </body>
</html>
