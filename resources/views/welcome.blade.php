<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center fw-bold mb-5">
                        Movies
                    </h1>
                </div>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/9/2014/12/hollywood2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <a href="#" class="btn btn-primary">{{ $movie->vote }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
