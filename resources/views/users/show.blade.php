<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
</head>
<body>
    <h1>User</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Role:</strong> {{ $user->role->name ?? 'N/A' }}</p>
    <a href="{{ route('users.index') }}">User List</a>
</body>
</html>