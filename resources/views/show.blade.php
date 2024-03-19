@extends('layouts.app')

@section('title', 'Dettagli')

@section('main-content')
    <section>
        <div class="container py-4">
            <ul>
                <li><b>Titolo: </b>{{ $movie->title }}</li>
                <li><b>Titolo Originale: </b>{{ $movie->original_title }}</li>
                <li><b>Paese: </b>{{ $movie->nationality }}</li>
                <li><b>Data di uscita: </b>{{ $movie->date }}</li>
                <li><b>Voto: </b>{{ $movie->vote }}</li>
            </ul>
        </div>
    </section>
@endsection
