<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function search(Request $request) {
        $query = $request->get('location');

        $response = Http::withHeaders([
            'User-Agent' => 'GeoMapLaravelApp/1.0 (arshadzamaaz@gmail.com)'
        ])->get("https://nominatim.openstreetmap.org/search", [
            'format' => 'json',
            'q' => $query
        ]);

        $locations = $response->json();

        return view('map', ['locations' => $locations, 'query' => $query]);
    }
}
