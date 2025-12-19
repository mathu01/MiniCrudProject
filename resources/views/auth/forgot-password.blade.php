<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe oublié</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 450px;">

            <h4 class="text-center fw-bold mb-3">Mot de passe oublié</h4>

            <p class="text-muted small mb-4 text-center">
                Entrez votre adresse email et nous vous enverrons un lien
                pour réinitialiser votre mot de passe.
            </p>

            {{-- Message de succès --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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

                <!-- Bouton -->
                <button type="submit" class="btn btn-dark w-100">
                    Envoyer le lien de réinitialisation
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="text-decoration-none">
                    Retour à la connexion
                </a>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
