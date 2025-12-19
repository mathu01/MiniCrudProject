@extends('layouts.app')
@section('contenu')
    <section class="hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">
                Bienvenue sur <span>MatShop</span>
            </h1>
            <p class="lead mb-5">
                Découvrez des articles modernes, disponibles dans notre stock.
            </p>
            <a href="{{route('pages.articles')}}" class="btn btn-warning btn-custom fw-semibold me-3">
                Visiter les articles
            </a>
        </div>
    </section>
@endsection
