@extends('layout')

@section('title', 'Customer List')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Customer List</h1>

    <a href="{{ route('customers.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">
        Create Customer
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Customer Number</th>
                    <th class="py-3 px-6 text-left">Address</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach($customers as $customer)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $customer->name }}</td>
                        <td class="py-3 px-6">{{ $customer->customer_number }}</td>
                        <td class="py-3 px-6">{{ $customer->address }}</td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('customers.show', $customer->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Show</a>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
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