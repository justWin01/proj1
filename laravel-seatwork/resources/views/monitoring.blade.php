@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <div class="lg:col-span-2 bg-white p-4 rounded-lg shadow">
        <h3 class="text-lg font-bold mb-2">Spatial Disease Spread (GIS)</h3>
        <div id="map" class="h-[500px] rounded border"></div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
        <h3 class="text-lg font-bold mb-2">Real-time Alerts</h3>
        <div class="space-y-4">
            @foreach($alerts as $alert)
            <div class="p-3 {{ $alert->severity == 'high' ? 'bg-red-100' : 'bg-yellow-100' }} rounded border-l-4 border-red-500">
                <p class="text-sm font-bold">Pen #{{ $alert->pen_id }}</p>
                <p class="text-xs text-gray-600">Detected: {{ $alert->disease_name }} ({{ $alert->confidence }}%)</p>
                <button class="mt-2 text-xs text-blue-600 underline">View AI Snapshot</button>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([14.5, 121.0], 18);
    L.tileLayer('https://{s}.tile.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    // Example GIS Marker for a Pen
    L.circle([14.5001, 121.0001], {
        color: 'red', fillOpacity: 0.5, radius: 15
    }).addTo(map).bindPopup("<b>Infection Detected</b><br>Pen 4: 3 Pigs Flagged.");
</script>
@endpush
