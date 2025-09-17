<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Incluir navbar -->
    <div class="min-h-screen">
        @include('templates.navegacion')

        <!-- Contenido principal -->
        @yield('content')

        <!-- Incluir footer -->
        @include('templates.footer')
    </div>

    <!-- Scripts adicionales -->
    @stack('scripts')
</body>

</html>