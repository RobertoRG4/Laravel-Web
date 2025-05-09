@extends('layout')

@section('title', 'Create User')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Create User</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ old('name') }}" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-lg shadow-sm" value="{{ old('email') }}" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
            <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-lg shadow-sm" required>
            <small class="text-gray-500">Password must be at least 8 characters long.</small>
        </div>
        <div class="mb-4">
            <label for="role_id" class="block text-gray-700 font-bold mb-2">Role:</label>
            <select name="role_id" id="role_id" class="w-full border-gray-300 rounded-lg shadow-sm" required>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create
        </button>
        <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Go Back
        </a>
    </form>
@endsection