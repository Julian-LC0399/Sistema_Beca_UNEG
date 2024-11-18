<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme='dark'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema de becas uneg') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de sesión') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class='d-flex justify-content-center align-items-center' style="height: calc(100vh - 4rem)">
            @yield('content')
        </div>
    </main>
</body>
</html>
