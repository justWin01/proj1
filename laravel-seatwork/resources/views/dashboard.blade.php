@extends('layouts.app')

@section('content')
<header class="p-6 border-b border-slate-800 bg-slate-950/50 backdrop-blur-md sticky top-0 z-10 flex justify-between items-center">
    <div class="flex items-center gap-4">
        <div class="p-2 bg-green-500/10 rounded-lg">
            <i data-lucide="navigation" class="text-green-500"></i>
        </div>
        <div>
            <h2 class="text-xl font-semibold">Main Farm Enclosure</h2>
            <p class="text-xs text-slate-500 uppercase tracking-widest">Sector A-12 Monitoring</p>
        </div>
    </div>

    <div class="flex gap-6">
        <div class="flex flex-col items-end">
            <span class="text-xs text-slate-500 flex items-center gap-1"><i data-lucide="thermometer" class="w-3 h-3"></i> Ambient</span>
            <span class="text-lg font-mono">27.5°C</span>
        </div>
        <div class="flex flex-col items-end">
            <span class="text-xs text-slate-500 flex items-center gap-1"><i data-lucide="users" class="w-3 h-3"></i> Population</span>
            <span class="text-lg font-mono">842</span>
        </div>
    </div>
</header>

<div class="p-6">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

        <div class="lg:col-span-3 bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-2xl">
            <div class="p-4 border-b border-slate-800 flex justify-between items-center bg-slate-900/50">
                <span class="text-sm font-medium flex items-center gap-2">
                    <i data-lucide="globe" class="text-blue-400"></i> GIS Spatial Analysis
                </span>
                <div class="flex gap-2">
                    <button class="p-1 hover:bg-slate-800 rounded"><i data-lucide="zoom-in" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:bg-slate-800 rounded"><i data-lucide="layers" class="w-4 h-4"></i></button>
                </div>
            </div>
            <div id="map" class="h-[500px]"></div>
        </div>

        <div class="space-y-6">
            <div class="bg-slate-900 border border-slate-800 p-4 rounded-2xl">
                <h3 class="text-sm font-semibold mb-4 flex items-center gap-2 uppercase tracking-tighter">
                    <i data-lucide="zap" class="text-yellow-400 text-sm"></i> Live AI Alerts
                </h3>

                <div class="space-y-3">
                    <div class="p-3 bg-red-500/5 border border-red-500/20 rounded-xl relative overflow-hidden">
                        <div class="absolute right-0 top-0 p-2 opacity-20">
                            <i data-lucide="alert-triangle" class="w-12 h-12 text-red-500"></i>
                        </div>
                        <p class="text-xs font-bold text-red-400">DISEASE DETECTED</p>
                        <p class="text-sm mt-1">Lethargy / Abnormal Slump</p>
                        <p class="text-[10px] text-slate-500 mt-2 flex items-center gap-1">
                             <i data-lucide="clock" class="w-3 h-3"></i> Pen 4 • 14:22 PM
                        </p>
                    </div>

                    <div class="p-3 bg-slate-800/50 border border-slate-700 rounded-xl">
                        <p class="text-xs font-bold text-slate-400">AI STATUS</p>
                        <p class="text-sm mt-1 text-slate-300 italic">No new threats detected in Sector B.</p>
                        <div class="mt-3 flex gap-2">
                             <button class="text-[10px] bg-slate-700 px-2 py-1 rounded flex items-center gap-1">
                                <i data-lucide="eye" class="w-3 h-3"></i> Review Stream
                             </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-green-900/20 to-slate-900 border border-green-500/20 p-4 rounded-2xl">
                <h4 class="text-xs font-bold text-green-500 mb-2 uppercase">Farm Wellness Score</h4>
                <div class="flex items-center gap-4">
                    <span class="text-3xl font-bold">98%</span>
                    <i data-lucide="trending-up" class="text-green-500"></i>
                </div>
                <p class="text-[10px] text-slate-500 mt-2 italic">Based on movement & skin tone analysis.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Map setup
    var map = L.map('map', { zoomControl: false }).setView([14.50, 121.00], 18);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png').addTo(map);

    // Marker for an infected pig found by Computer Vision
    L.circle([14.5002, 121.0001], {
        color: '#ef4444', weight: 1, fillColor: '#ef4444', fillOpacity: 0.4, radius: 10
    }).addTo(map).bindPopup("<div class='text-slate-900 font-sans'><b>Pen 4 Infection Hub</b><br>3 Alerts Recorded Today</div>");
</script>
@endpush
