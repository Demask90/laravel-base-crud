@extends('layouts.app')

@section('content')
    <div class="container">
        <img src={{ $comic['thumb'] }} class="img-top" alt={{ $comic['title'] }}>
        <h1>{{ $comic['title'] }}</h1>
        <div>Serie: {{ $comic['series'] }}</div>
        <div>Tipo: {{ $comic['type'] }}</div>
        <div>Data di uscita: {{ $comic['sale_date'] }}</div>
        <div>Prezzo: {{ $comic['price'] }} $</div>
        
        <div>Descrizione: {{ $comic['description'] }}</div>
        
    </div>
@endsection