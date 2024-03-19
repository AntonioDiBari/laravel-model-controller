@extends('layouts.app')

@section('title', 'Dettagli')

@section('main-content')
    <section>
        <div class="container py-4">
            <ul>
                <li><b>Titolo: </b>{{ $book->title }}</li>
                <li><b>Titolo Originale: </b>{{ $book->original_title }}</li>
                <li><b>Paese: </b>{{ $book->nationality }}</li>
                <li><b>Data di uscita: </b>{{ $book->date }}</li>
                <li><b>Voto: </b>{{ $book->vote }}</li>
            </ul>
        </div>
    </section>
@endsection
