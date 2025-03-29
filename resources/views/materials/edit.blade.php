<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Materials</title>
</head>
<body>
    <h1>Create Materials</h1>

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

    <form action="{{ route('materials.update', $material->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $material->name }}" required>
        <br>
        <label>Description:</label>
        <input type="text" name="description" value="{{ $material->description }}" required>
        <br>
        <button type="submit">Save</button>
        <a href="{{ route('materials.index') }}">Go Back</a>
    </form>
</body>
</html>