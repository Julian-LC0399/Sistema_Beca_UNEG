<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Becas UNEG</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f8f9fa;
            }
            .navbar {
                background-color: #ffffff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .hero-section {
                background-color: #ffffff;
                padding: 4rem 0;
                margin-top: 2rem;
            }
            .logo-container {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 2rem;
                margin-bottom: 2rem;
            }
            .logo-container img {
                height: 80px;
                object-fit: contain;
            }
            .auth-buttons .btn {
                margin: 0 0.5rem;
            }
            .feature-card {
                background: white;
                border-radius: 8px;
                padding: 2rem;
                margin: 1rem 0;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                transition: transform 0.3s ease;
            }
            .feature-card:hover {
                transform: translateY(-5px);
            }
            .banner-image {
                width: 100%;
                max-height: 200px;
                object-fit: cover;
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img src="/images/uneg_logo.png" alt="UNEG Logo" height="55" class="me-2">
                        <img src="/images/43_logo.png" alt="43 Aniversario" height="55" class="me-2">
                        <img src="/images/2030_logo.png" alt="2030 Logo" height="55">
                    </a>
                </div>
                @if (Route::has('login'))
                    <div class="auth-buttons">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Sesión abierta</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Iniciar sesión</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <div class="container">
            <div class="hero-section text-center">
                <div class="logo-container">
                    <img src="{{ asset('images/uneg_logo.png') }}" alt="UNEG Logo">
                    <img src="{{ asset('images/43_logo.png') }}" alt="43 Aniversario">
                    <img src="{{ asset('images/2030_logo.png') }}" alt="2030 Logo">
                </div>
                
                <h1 class="display-4 mb-4">Sistema de Becas UNEG</h1>
                <p class="lead mb-5">Bienvenido al sistema de gestión de becas de la Universidad Nacional Experimental de Guayana</p>
                
                <img src="{{ asset('images/desarrollo_estudiantil.png') }}" alt="Desarrollo Estudiantil" class="banner-image mb-5">
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Becas Disponibles</h3>
                        <p>Explora las diferentes modalidades de becas que ofrece la UNEG para apoyar tu desarrollo académico.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card" onclick="window.open('https://servicio.uneg.edu.ve/sde/principal/login.php', '_blank')" style="cursor: pointer;">
                        <h3>Sistema de Desarrollo Estudiantil</h3>
                        <p>Gestiona tu solicitud de beca de manera fácil y rápida a través de nuestra plataforma.</p>
                    </div>
                </div>
                                <div class="col-md-4">
                    <div class="feature-card" onclick="window.open('https://uneg.edu.ve/', '_blank')" style="cursor: pointer;">
                        <h3>UNEG</h3>
                        <p>Dirigete a la página principal de la UNEG</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <footer class="text-center py-4 mt-5">
            <p class="text-muted">Universidad Nacional Experimental de Guayana - Sistema de Becas</p>
            <small class="text-muted">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</small>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
