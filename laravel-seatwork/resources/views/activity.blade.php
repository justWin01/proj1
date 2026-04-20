@extends('layouts.app') @section('title', 'Farm Activity')

@section('content')
    <div>
        <h1>{{ $heading }}</h1>
        <p>Current Disease Detection Status: <strong>Active</strong></p>

        <div id="pigMap" style="height: 400px;"></div>
    </div>
@endsection

@push('scripts')
<script>
    // Initialize GIS Map for PigHealth
    var map = L.map('pigMap').setView([14.5995, 120.9842], 15);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
</script>
@endpush
