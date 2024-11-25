<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme='dark'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Becas UNEG</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="display: grid; grid-template-columns: auto 1fr; height: 100vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: Carreras y sede
280px; height: 100vh">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        
            <span class="fs-4">UNEG</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
       
            <li>
                <a href="{{ url('/careers') }}" class="nav-link text-white">
                 Carrera
                </a>
            </li>
            <li>
                <a href="{{ url('/campuses') }}" class="nav-link text-white">
                 Sedes
                </a>
            </li>
             <li>
                <a href="{{ url('/caree-campuses') }}" class="nav-link text-white">
                    Carreras y sedes
                </a>
            </li>
            <li>
                <a href="{{ url('/students') }}" class="nav-link text-white">
                    Estudiantes
                </a>
            </li>
            <li>
                <a href="{{ url('/stu-careers') }}" class="nav-link text-white">
                    Estudiantes por carrera
                </a>
            </li>
             <li>
                <a href="{{ url('/stu-campuses') }}" class="nav-link text-white">
                    Estudiantes y sede
                </a>
            </li>            
            <li>
                <a href="{{ url('/becas') }}" class="nav-link text-white">
                    Becas
                </a>
            </li>
                <li>
                <a href="{{ url('/stu-becas') }}" class="nav-link text-white">
                    Estudiantes con beca
                </a>
            </li>

        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>{{ Auth::user()->name }}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                    >
                    {{ __('Cerrar Sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
            </ul>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
