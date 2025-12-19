@extends('layouts.app')
@section('title')
    Articles
@endsection
@section('contenu')
<h5 class="card-title fw-bold ">Voici les artilces disponibles</h5>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            @foreach($article as $articles)
                                <h3>{{ $articles->articles_names }}</h3>
                                <p class="card-text">prix: {{ $articles->articles_price }} €</p>
                                <a href="/show/{{ $articles->id }}">Voir</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection