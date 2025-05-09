@extends('layout')

@section('title', 'User Details')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">User Details</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mb-4"><strong class="text-gray-700">ID:</strong> {{ $user->id }}</p>
        <p class="mb-4"><strong class="text-gray-700">Name:</strong> {{ $user->name }}</p>
        <p class="mb-4"><strong class="text-gray-700">Email:</strong> {{ $user->email }}</p>
        <p class="mb-4"><strong class="text-gray-700">Role:</strong> {{ $user->role->name ?? 'N/A' }}</p>
    </div>

    <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
        Go Back
    </a>
@endsection