<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Materials</title>
</head>
<body>
    <h1>Create Materials</h1>

    <form action="{{ route('materials.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <label>Quantity:</label>
        <input type="text" name="quantity">
        <br>
        <label>Stock:</label>
        <input type="text" name="stock">
        <br>
        <label>Evidence:</label>
        <input type="text" name="evidence">
        <br>
        <button type="submit">Save</button>
        <a href="{{ route('materials.index') }}">Go Back</a>
    </form>
</body>
</html>