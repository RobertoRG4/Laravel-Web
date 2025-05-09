<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles') <!-- Permite agregar estilos específicos desde cada vista -->
</head>
<body class="bg-gray-100">
    <!-- Include the navigation bar -->
    @include('layouts.navigation')

    <!-- Main content -->
    <div class="container mx-auto py-8 px-4">
        @yield('content')
    </div>

    @stack('scripts') <!-- Permite agregar scripts específicos desde cada vista -->
</body>
</html>