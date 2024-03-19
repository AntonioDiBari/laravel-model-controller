@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <div class="row g-3">
                @forelse ($movies as $index => $movie)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('movie.show', $movie) }}">
                                    {{ $movie->id }}) {{ $movie->title }}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    Nessun Film
                @endforelse
            </div>
        </div>
    </section>
@endsection
