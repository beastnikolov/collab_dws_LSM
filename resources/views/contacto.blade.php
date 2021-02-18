<?php
use Illuminate\View\Middleware\ShareErrorsFromSession
?>

@extends('layout')
@section('contenido')

<div class="container">
    
    @if(session()->has('mensajeExito'))
        @if($mensaje = session()->get('mensajeExito'))
    
        <div class="alert alert-success mt-4 mb-0" role="alert">
            <strong>Bien hecho!</strong> {{ $mensaje }}
        </div>
    
        @endif
    @endif
    
    @if($errors->any())
    
        <div class="alert alert-danger mt-4" role="alert">
            <strong>VALIDATION ERROR:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    
    @endif
    
    <div class="mt-4 mb-5 bg-light border rounded">
        <form class="p-3" action="{{ route('enviar-email') }}" method="get">
            <h3 class="mb-3 text-black-50 text-center">Ponte en contacto</h3>
            <div class="mb-3">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                        <input class="form-control" name="nombre" type="text" placeholder="Nombre">
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <input class="form-control" name="apellidos" type="text" placeholder="Apellidos">
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                        <input class="form-control" name="email" type="email" placeholder="Email">
                    </div>
                    
                    <div class="col-12 col-sm-6">
                        <input class="form-control" name="telefono" type="number" placeholder="Teléfono">
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <input class="form-control" name="subject" type="text" placeholder="Asunto">
            </div>
            
            <div class="mb-3">
                <textarea class="form-control" name="contenido" placeholder="Contenido" style="height: 150px"></textarea>
            </div>
            
            <div class="d-flex justify-content-end">
                <input class="btn btn-primary align-self-end" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>


@endsection