<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Customer</title>
</head>
<body>
    <h1>Show Customer</h1>

    <p><strong>Name:</strong> {{ $customers->name }}</p>
    <p><strong>Customer Number:</strong> {{ $customers->customer_number }}</p>
    <p><strong>Address:</strong> {{ $customers->address }}</p>

    <a href="{{ route('customers.index') }}">Go Back</a>
</body>
</html>