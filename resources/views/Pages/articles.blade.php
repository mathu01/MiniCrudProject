@extends('layouts.app')
@section('title')
    Articles
@endsection
@section('contenu')
    <section class="py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Produits fiables</h5>
                            <p class="card-text">Des articles stockés et gérés depuis une base de données sécurisée.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Interface moderne</h5>
                            <p class="card-text">Design responsive et épuré grâce à Bootstrap.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Accès sécurisé</h5>
                            <p class="card-text">Connexion utilisateur pour une meilleure expérience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Voici les artilces disponibles
    @foreach($article as $articles)
        <h3>{{ $articles->articles_name }}</h3>
        <p>{{ $article->articles_price }} €</p>
        <a href="/articles/{{ $article->id }}">Voir</a>
@endforeach
@endsection