<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 420px;">

            <h3 class="text-center fw-bold mb-4">Connexion</h3>

            {{-- Message de statut --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mot de passe -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember me -->
                <div class="mb-3 form-check">
                    <input
                        type="checkbox"
                        name="remember"
                        class="form-check-input"
                        id="remember"
                    >
                    <label class="form-check-label" for="remember">
                        Se souvenir de moi
                    </label>
                </div>

                <!-- Bouton -->
                <button type="submit" class="btn btn-dark w-100">
                    Se connecter
                </button>

                <!-- Liens -->
                <div class="text-center mt-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <div class="text-center mt-2">
                    <a href="{{ route('register') }}" class="text-decoration-none">
                        Créer un compte
                    </a>
                </div>
            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
