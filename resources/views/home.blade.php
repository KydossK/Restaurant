@vite(['resources/css/home.css', 'resources/js/foo.js'])
@extends('base')
@section('content')

    

    <h1>{{$title}}</h1>
    <h2>{{$actu->titre}}</h2>
    <div><img src="{{ asset('images/' . $actu->image) }}" alt="{{ $actu->titre }}"></div>
    <p>{{$actu->message}}</p>
    <p>{{$actu->date_publication}}</p>



    @endsection