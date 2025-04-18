<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>

    <hr>
    <a href="{{ route('users.index') }}">All Users</a>
    <hr>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <br><br>

        <label for="">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <br><br>

        <label for="">Password:</label>
        <input type="password" name="password" required>

        <br><br>

        <label for="">Role:</label>
        <select name="role_id" required>
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>

        <br><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>