<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="password">
        <br>
        <label>Rol:</label>
        <select name="role_id" required>
            <option value="">Seleccione un rol</option>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Actualizar</button>
        <a href="{{ route('users.index') }}">Regresar a la lista</a>
    </form>
</body>
</html>