<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
</head>
<body>
    <h1>Create Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <label for="">Customer:</label>
        <select name="customer_id" id=""> <!-- Cambiado a customer_id -->
            <option value="">Select Customer</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="">Material:</label>
        <select name="material_id" id=""> <!-- Cambiado a material_id -->
            <option value="">Select Material</option>
            @foreach($materials as $material)
                <option value="{{ $material->id }}">{{ $material->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="">Date</label>
        <input type="date" name="date" id="" required>
        <br>
        <label for="">Status</label>
        <input type="text" name="status" id="" required>
        <br>
        <button type="submit">Save</button>
        <a href="{{ route('orders.index') }}">Go Back</a>
    </form>
</body>
</html>