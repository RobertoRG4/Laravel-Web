@extends('layout')

@section('title', 'Edit Material')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Material</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('materials.update', $material->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" name="name" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ $material->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Quantity:</label>
            <input type="text" name="quantity" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ $material->quantity }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Stock:</label>
            <input type="text" name="stock" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ $material->stock }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Evidence:</label>
            <input type="text" name="evidence" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ $material->evidence }}" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Update
        </button>
        <a href="{{ route('materials.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Go Back
        </a>
    </form>
@endsection