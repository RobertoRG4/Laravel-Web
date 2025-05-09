@extends('layout')

@section('title', 'Material Details')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Material Details</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-4"><strong class="text-gray-700">Name:</strong> {{ $material->name }}</p>
        <p class="mb-4"><strong class="text-gray-700">Quantity:</strong> {{ $material->quantity }}</p>
        <p class="mb-4"><strong class="text-gray-700">Stock:</strong> {{ $material->stock }}</p>
        <p class="mb-4"><strong class="text-gray-700">Evidence:</strong> {{ $material->evidence }}</p>
    </div>

    <a href="{{ route('materials.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
        Go Back
    </a>
@endsection