@extends('layout')
@section('contenido')

<div class="container" role="main" id="content">



    <div class="card mb-5 mt-5">
        <h6 class="card-header d-flex align-items-center py-2">
            <span class="fas fa-book fa-fw " aria-hidden="true"></span> <span class="mx-1">{{ $movies[0]->titulo }}</span>
            <span class="rounded flag flag-jp" title="Japanese"></span> <a class="ml-auto" target="_blank" href="/rss/qExm2byrAzdUG64SKBftcZXvg79RT5FN/manga_id/58469?h=0"><span class="fas fa-rss fa-2x"></span></a> </h6>
        <div class="card-body p-0">
            <div class="row edit">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <img class="rounded p-2" width="100%" src="{{ $movies[0]->imagen }}">
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="row m-0 py-1 px-0">
                        <div class="col-lg-3 col-xl-2 strong">ID Pelicula:</div>
                        <div class="col-lg-9 col-xl-10"><span class="fas fa-hashtag fa-fw " aria-hidden="true"></span># {{ $movies[0]->id }}</div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Título Pelicula:</div>
                        <div class="col-lg-9 col-xl-10">
                            <ul class="list-inline m-0">
                                <li class="list-inline-item"><span class="fas fa-book fa-fw " aria-hidden="true"></span> {{ $movies[0]->titulo }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Productora:</div>
                        <div class="col-lg-9 col-xl-10">
                            <a href="#">{{ $movies[0]->productora }}</a> </div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">País:</div>
                        <div class="col-lg-9 col-xl-10">
                            <a href="#">{{ $movies[0]->pais }}</a> </div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Genero:</div>
                        <div class="col-lg-9 col-xl-10"><a class="badge bg-dark" href="#">{{ $movies[0]->genero }}</a> </div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Puntuación:</div>
                        <div class="col-lg-9 col-xl-10">
                            <ul class="list-inline m-0">
                                <li class="list-inline-item"><span class="text-primary"><span class="fas fa-star fa-fw " aria-hidden="true" title="Bayesian rating"></span> {{ $movies[0]->nota }}</span> </li>
                            </ul>
                            <div id="histogram_div" class="display-none"><canvas id="ratings_histogram" data-json="[1,1,1,1,2,1,8,10,7,1,1,1,10,8,6,9,1,8,1,1,10,7,10,10,3,2,1,1,10,10,1,10,10,6,9,1,7,10,10,10,10,3,1,5,10,8,1,2,8,10,3,1,8,9,10,10,9,9,10,2,8,6,10,10,7,10,3,10,8,10,8,10,1,1,8,6,9,10,10,1,1,6,1,1,7,9,1,10,10,1,1,9,9,9,1,9,7,10,9,10,10,1,9,10,10,10,8,10,10,10,10,6,7,10,8,10,10,9,1,1,9,10,10,10,10,10,10,8,7,9,8,2,8,10,9,8,8,7,7,10,7,7,10,7,8,10,10,10,10,7,9]" style="display: block; width: 0px; height: 0px;" height="0" class="chartjs-render-monitor" width="0"></canvas></div>
                        </div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Estreno:</div>
                        <div class="col-lg-9 col-xl-10">{{ $movies[0]->añoestreno }}</div>
                    </div>
                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Sinopsis:</div>
                        <div class="col-lg-9 col-xl-10">{{ $movies[0]->sinopsis}}</div>
                    </div>

                    <div class="row m-0 py-1 px-0 border-top">
                        <div class="col-lg-3 col-xl-2 strong">Comprar:</div>
                        <div class="col-lg-9 col-xl-10">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><img src="https://mangadex.org/images/misc/amz.png"> <a rel="noopener noreferrer" target="_blank" href="#">Amazon.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection
