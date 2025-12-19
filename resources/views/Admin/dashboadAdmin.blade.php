<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>
@section('contenu')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("Vous êtes connectés! en tant que admin") }}
            </div>
        </div>
    </div>
</div>
<hr>
@if (Session::has('message'))
        <p class="alert alert-success">
            {{Session::get('message')}}
            {{Session::put('message',null)}}
        </p>
@endif
<div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Ajouter un produit</h4>
            </div>

            <div class="card-body">
                <form action="{{route('admin.save')}}" method="POST">
                    @csrf
                    <!-- Nom du produit -->
                    <div class="mb-3">
                        <label class="form-label">Nom du produit</label>
                        <input type="text" name="articles_names" class="form-control" required>
                    </div>
                    <!-- Prix -->
                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input type="number" name="articles_price" class="form-control" step="0.01" required>
                    </div>
                    <div class="mb-3">
    <label class="form-label">Image du produit</label>
    <input type="file"
           name="image"
           class="form-control @error('image') is-invalid @enderror">

    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="articles_description" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Enregistrer
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
</x-app-layout>
