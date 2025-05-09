@extends('layout')

@section('title', 'Customer Details')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Customer Details</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-4"><strong class="text-gray-700">Name:</strong> {{ $customers->name }}</p>
        <p class="mb-4"><strong class="text-gray-700">Customer Number:</strong> {{ $customers->customer_number }}</p>
        <p class="mb-4"><strong class="text-gray-700">Address:</strong> {{ $customers->address }}</p>
    </div>

    <a href="{{ route('customers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
        Go Back
    </a>
@endsection