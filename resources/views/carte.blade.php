@extends('base')

@section('content')
    @foreach ($produits as $produit)
        <div>
            <h2>{{ $produit->nom }}</h2>
            <p>{{ $produit->description }}</p>
        </div>
    @endforeach
@endsection
