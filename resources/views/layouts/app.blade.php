<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <style>
    
            body {
                font-family: 'Poppins', sans-serif;
            }
            .hero {
                min-height: 90vh;
                background: linear-gradient(135deg, #0d6efd, #6610f2);
                color: white;
                display: flex;
                align-items: center;
            }
            .hero h1 span {
                color: #ffc107;
            }
            .btn-custom {
                border-radius: 30px;
                padding: 12px 30px;
            }
            footer{
                 position: absolute;
                bottom: 0;
                width: 100%;
                background-color: #333;
                color: #fff;
                padding: 1em;
                text-align: center;
            }
            main{
                padding-top: 4rem;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="#">MatShop</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('home')}}">Accueuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart">Panier</a>
                            </li>
                            @auth
                                <li class="nav-item d-flex align-items-center">
                                    <span class="nav-link">{{ auth()->user()->name }}</span>
                                    <form method="POST" action="{{ route('logout') }}" class="ms-2">
                                        @csrf
                                        <button class="btn btn-outline-light btn-sm" type="submit">Log Out</button>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="py-6">
            @yield('contenu')
        </main>
        <footer class="bg-dark text-light py-4 ">
        <div class="container text-center">
            <p class="mb-0">© 2025 MatShop · Tous droits réservés</p>
        </div>
    </footer>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
