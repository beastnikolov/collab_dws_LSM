@extends('layout')
@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3 class="text-center my-3">Ultimos Titulos</h3>
            
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
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-6">
        <h3 class="text-center my-3">Top 10 peliculas</h3>
        @foreach ($top10 as $peliculatop)
        <div class="card mx-auto my-3" style="width:100%">
            <div class="row">
                <div class="col-1">
                    <h3 class="text-center px-3" id="number">1</h3>
                </div>
                <div class="col-3">
                    <img class="card-img-top img-fluid" src="{{ $peliculatop->imagen}}" alt="Card image">
                </div>
                <div class="card-body col-8">
                    <h4 class="card-title">{{ $peliculatop->titulo }}</h4>
                    <p class="card-text">
                        <ul>
                            <li>Genero: {{ $peliculatop->genero }}</li>
                            <li>Productora: {{ $peliculatop->productora }}</li>
                            <li>Nota: {{ $peliculatop->nota }}</li>
                        </ul>
                    </p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    </div>

        
    </div>
</div>
@endsection