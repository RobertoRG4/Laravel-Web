@extends('layout')

@section('title', 'Create Order')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Create Order</h1>

    <form action="{{ route('orders.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="customer_id" class="block text-gray-700 font-bold mb-2">Customer:</label>
            <select name="customer_id" id="customer_id" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                <option value="">Select Customer</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="material_id" class="block text-gray-700 font-bold mb-2">Material:</label>
            <select name="material_id" id="material_id" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                <option value="">Select Material</option>
                @foreach($materials as $material)
                    <option value="{{ $material->id }}">{{ $material->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>
            <input type="date" name="date" id="date" class="w-full border-gray-300 rounded-lg shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
            <input type="text" name="status" id="status" class="w-full border-gray-300 rounded-lg shadow-sm" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Save
        </button>
        <a href="{{ route('orders.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Go Back
        </a>
    </form>
@endsection