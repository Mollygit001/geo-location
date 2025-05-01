@extends('layout')

@section('content')
    <h2 class="text-2xl mb-4 font-semibold text-center">Map Result for: <span class="text-blue-400">{{ $query }}</span></h2>
    <div id="map" class="w-full h-96 rounded mb-6 shadow-lg"></div>
    <div class="text-center">
        <a href="/" class="text-blue-400 underline">← Back to Search</a>
    </div>

    <script>
        const map = L.map('map').setView([{{ $locations[0]['lat'] ?? 0 }}, {{ $locations[0]['lon'] ?? 0 }}], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        @foreach($locations as $location)
            L.marker([{{ $location['lat'] }}, {{ $location['lon'] }}])
                .addTo(map)
                .bindPopup("{{ $location['display_name'] }}")
                .openPopup();
        @endforeach
    </script>
@endsection
