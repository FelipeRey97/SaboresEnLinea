<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/f243ce0afc.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="header">
    @include('components.header')
    </header>

    <main>
    @yield('content')
    </main>

    <footer class="footer">
    @include('components.footer')
    </footer>
</body>
</html>