@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-center">🌍 Geo Map Location Search</h1>
    <form action="/search" method="GET" class="flex flex-col sm:flex-row gap-3">
        <input type="text" name="location" placeholder="Enter a location..." required
            class="p-3 text-black rounded w-full">
        <button type="submit"
            class="bg-blue-600 hover:bg-blue-800 px-4 py-3 rounded text-white font-semibold">
            Search
        </button>
    </form>
@endsection
