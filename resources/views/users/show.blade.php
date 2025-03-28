<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detalles del Usuario</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Rol:</strong> {{ $user->role->name ?? 'N/A' }}</p>
    <a href="{{ route('users.index') }}">Volver a la lista</a>
</body>
</html>