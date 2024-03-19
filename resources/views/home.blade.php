@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <div class="row">
                @forelse ($movies as $movie)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                {{ $movie->id }}) {{ $movie->title }}
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
