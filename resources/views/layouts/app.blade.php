<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
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
    </style>
</head>
<body>
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
                            <a class="nav-link active" href="/">Accueuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Panier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-light ms-lg-3 px-3" href="#">Login</a>
                        </li>
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
    @yield('contenu')
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p class="mb-0">© 2025 MatShop · Tous droits réservés</p>
        </div>
    </footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>