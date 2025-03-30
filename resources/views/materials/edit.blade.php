<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Materials</title>
</head>
<body>
    <h1>Create Materials</h1>

    <form action="{{ route('materials.update', $material->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $material->name }}" required>
        <br>
        <label>Quantity:</label>
        <input type="text" name="quantity" value="{{ $material->quantity }}" required>
        <br>
        <label>Stock:</label>
        <input type="text" name="stock" value="{{ $material->stock }}" required>
        <br>
        <label>Evidence:</label>
        <input type="text" name="evidence" value="{{ $material->evidence }}" required>
        <br>
        <button type="submit">Save</button>
        <a href="{{ route('materials.index') }}">Go Back</a>
    </form>
</body>
</html>