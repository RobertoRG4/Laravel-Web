<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Index</title>
</head>
<body>
    <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
    <h1>Customer Index</h1>

    <a href="{{ route('customers.create') }}">Create Customer</a>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Customer Number</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customers)
                <tr>
                    <td>{{ $customers->name }}</td>
                    <td>{{ $customers->customer_number }}</td>
                    <td>{{ $customers->address }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customers->id) }}">Show</a>
                        <a href="{{ route('customers.edit', $customers->id) }}">Edit</a>
                        <form action="{{ route('customers.destroy', $customers->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>