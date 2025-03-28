<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

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

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <label>Rol:</label>
        <select name="role_id" required>
            <option value="">Seleccione un rol</option>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Guardar</button>
        <a href="{{ route('users.index') }}">Regresar a la lista</a>
    </form>
</body>
</html>