@extends('layouts.app')
@section('contenu')
        <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow">
                <div class="card-body">

                    <h1 class="text-center mb-4">Les détails de l'article</h1>
                    <hr>

                    <h3 class="fw-bold text-primary">
                        {{ $article->articles_names }}
                    </h3>

                    <p class="fs-4 text-success mt-3">
                        💰 {{ $article->articles_price }}€
                    </p>

                    <p class="text-muted mt-3">
                        {{ $article->articles_description }}
                    </p>
                    <div class="mt-4">
                        <a href="{{route('pages.articles')}}" class="btn btn-secondary">
                            ⬅ Retour
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection