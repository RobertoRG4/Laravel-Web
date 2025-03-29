<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <hr>
    <a href="{{ route('users.index') }}">All Users</a>
    <hr>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <br><br>

        <label for="">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <br><br>

        <label for="">Password:</label>
        <input type="password" name="password">

        <br><br>

        <label for="">Role:</label>
        <select name="role_id" required>
            @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>