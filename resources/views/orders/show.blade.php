@extends('layout')

@section('title', 'Order Details')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Order Details</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-4"><strong class="text-gray-700">Order ID:</strong> {{ $orders->id }}</p>
        <p class="mb-4"><strong class="text-gray-700">Customer:</strong> {{ $orders->customer->name }}</p>
        <p class="mb-4"><strong class="text-gray-700">Material:</strong> {{ $orders->material->name }}</p>
        <p class="mb-4"><strong class="text-gray-700">Order Date:</strong> {{ $orders->date }}</p>
        <p class="mb-4"><strong class="text-gray-700">Status:</strong> {{ $orders->status }}</p>
    </div>

    <a href="{{ route('orders.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
        Go Back
    </a>
@endsection