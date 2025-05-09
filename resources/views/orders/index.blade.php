@extends('layout')

@section('title', 'Order List')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Order List</h1>

    <a href="{{ route('orders.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">
        Create Order
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Customer</th>
                    <th class="py-3 px-6 text-left">Material</th>
                    <th class="py-3 px-6 text-left">Date</th>
                    <th class="py-3 px-6 text-left">Status</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @foreach($orders as $order)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $order->id }}</td>
                        <td class="py-3 px-6">{{ $order->customer->name }}</td>
                        <td class="py-3 px-6">{{ $order->material->name }}</td>
                        <td class="py-3 px-6">{{ $order->date }}</td>
                        <td class="py-3 px-6">
                            <span class="px-2 py-1 rounded-full text-white 
                                {{ $order->status === 'completed' ? 'bg-green-500' : ($order->status === 'pending' ? 'bg-yellow-500' : 'bg-red-500') }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <a href="{{ route('orders.show', $order->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Show</a>
                            <a href="{{ route('orders.edit', $order->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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