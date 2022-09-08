@extends('layout.MovieController')


@section('main-content')
    <div class="container">
        <div class="row pt-5 justify-content-center">
            @forelse ($bestMovies as $movie)
                <div class="card col-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum illo similique quas
                            facilis optio rerum amet nobis voluptate. Vitae natus facilis voluptas tempore quod
                            necessitatibus
                            libero ipsum veniam quaerat deserunt?
                        </p>
                    </div>
                </div>
            @empty
                <h3>
                    nessun film trovato
                </h3>
            @endforelse
        </div>
    </div>
@endsection
