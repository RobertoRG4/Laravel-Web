<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Materials</title>
</head>
<body>
    <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
    <h1>Index Materials</h1>

    <a href="{{ route('materials.create') }}">Crear Material</a>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Stock</th>
                <th>Evidence</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $material)
                <tr>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->quantity }}</td>
                    <td>{{ $material->stock }}</td>
                    <td>{{ $material->evidence }}</td>
                    <td>
                        <a href="{{ route('materials.edit', $material->id) }}">Edit</a>
                        <a href="{{ route('materials.show', $material->id) }}">Show</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>