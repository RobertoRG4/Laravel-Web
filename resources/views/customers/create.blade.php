@extends('layout')

@section('title', 'Create Customer')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Create Customer</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" name="name" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Customer Number:</label>
            <input type="text" name="customer_number" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ old('customer_number') }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Address:</label>
            <input type="text" name="address" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ old('address') }}" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Save
        </button>
        <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Go Back
        </a>
    </form>
@endsection