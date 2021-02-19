@extends('layout')
@section('contenido')

<div class="card text-center mb-5">
    <img src="http://onesheetdesign.com/wp-content/uploads/movie_poster_design.jpg" class="card-img-top" alt="main banner" height="600px">
    <div class="card-body">
        <h1>Bienvenido a MovieDex <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z" />
        </h1>
        <p class="card-text">El mejor sitio web para estar informado de los últimos estrenos y noticias del cine!</p>
    </div>
</div>


<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-9">
            <h4 class="text-center my-3">Ultimos Estrenos</h4>

            @foreach ($ultimosTitulos as $pelicula)
            <div class="card mx-auto my-3" style="width:100%">
                <div class="row">
                    <div class="col-3">
                        <img class="card-img-top img-fluid" src="{{ $pelicula->imagen}}" alt="Card image">
                    </div>
                    <div class="card-body col-9">
                        <h4 class="card-title">{{ $pelicula->titulo }}</h4>
                        <p class="card-text">
                        <ul>
                            <li>Genero: {{ $pelicula->genero }}</li>
                            <li>Productora: {{ $pelicula->productora }}</li>
                            <li>Año Estreno: {{ $pelicula->añoestreno }}</li>
                        </ul>
                        </p>
                        <a href="ver/{{ $pelicula->id }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-3">
            <h4 class="text-center my-3">Top Películas</h4>
            <ul class="list-group">
                @php ($id = 1)
                @foreach ($top10 as $peliculatop)
                <li class="list-group-item"><b>{{ $id }}</b> - <a class="tpeli" href="ver/{{$peliculatop->id}}">{{ $peliculatop->titulo }}</a> <span class="text-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg> -- ({{$peliculatop->nota}}) </span></li>
                @php ($id++)
                @endforeach
            </ul>
        </div>
    </div>


</div>
</div>
@endsection