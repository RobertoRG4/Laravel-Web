<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Materials</title>
</head>
<body>
    <h1>Show Materials</h1>

    <p><strong>Nombre:</strong> {{ $material->name }}</p>
    <p><strong>Descripción:</strong> {{ $material->description }}</p>

    <a href="{{ route('materials.index') }}">Regresar a la lista</a>
</body>
</html>