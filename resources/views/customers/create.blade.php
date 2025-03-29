<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
</head>
<body>
    <h1>Create Customer</h1>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br>
        <label>Customer Number:</label>
        <input type="text" name="customer_number" value="{{ old('customer_number') }}" required>
        <br>
        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}" required>
        <br>
        <button type="submit">Save</button>
        <a href="{{ route('customers.index') }}">Go Back</a>
    </form>
</body>
</html>