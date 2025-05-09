@extends('layout')

@section('title', 'Material List')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Material List</h1>

    <a href="{{ route('materials.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">
        Create Material
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Quantity</th>
                    <th class="py-3 px-6 text-left">Stock</th>
                    <th class="py-3 px-6 text-left">Evidence</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach($materials as $material)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $material->name }}</td>
                        <td class="py-3 px-6">{{ $material->quantity }}</td>
                        <td class="py-3 px-6">{{ $material->stock }}</td>
                        <td class="py-3 px-6">{{ $material->evidence }}</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('materials.show', $material->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Show</a>
                            <a href="{{ route('materials.edit', $material->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                            <form action="{{ route('materials.destroy', $material->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" onclick="return confirm('Are you sure?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection