<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
</head>
<body>
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $orders->id) }}" method="POST">
        @csrf
        @method('patch')
        <label>Customer:</label>
        <select name="customer_id" id=""> 
            <option value="">Select Customer</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @if($customer->id == $orders->customer_id)
                    <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
                @endif
            @endforeach
        </select>
        <br>
        <label>Material:</label>
        <select name="material_id" id=""> 
            <option value="">Select Material</option>
            @foreach($materials as $material)
                <option value="{{ $material->id }}">{{ $material->name }}</option>
                @if($material->id == $orders->material_id)
                    <option value="{{ $material->id }}" selected>{{ $material->name }}</option>
                @endif
            @endforeach
        </select>
        <br>
        <label>Order Date:</label>
        <input type="date" name="date" value="{{ $orders->date }}" required>
        <br>
        <label>Status:</label>
        <input type="text" name="status" value="{{ $orders->status }}" required>
        <br>
        <button type="submit">Update</button>
        <a href="{{ route('orders.index') }}">Go Back</a>
    </form>
</body>
</html>