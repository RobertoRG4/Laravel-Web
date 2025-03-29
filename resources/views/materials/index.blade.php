<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Materials</title>
</head>
<body>
    <h1>Index Materials</h1>

    <a href="{{ route('materials.create') }}">Crear Material</a>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Acctions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $material)
                <tr>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->description }}</td>
                    <td>
                        <a href="{{ route('materials.edit', $material->id) }}">Edit</a>
                        <form action="{{ route('materials.destroy', $material->id) }}" method="POST">
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