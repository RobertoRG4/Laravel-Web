<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Order</title>
</head>
<body>
    <h1>Show Order</h1>

    <p><strong>Order Id:</strong> {{ $orders->id }}</p>
    <p><strong>Customer:</strong> {{ $orders->customer->name }}</p>
    <p><strong>Material:</strong> {{ $orders->material->name }}</p>
    <p><strong>Order Date:</strong> {{ $orders->date }}</p>
    <p><strong>Status:</strong> {{ $orders->status }}</p>

    <a href="{{ route('orders.index') }}">Go Back</a>
</body>
</html>