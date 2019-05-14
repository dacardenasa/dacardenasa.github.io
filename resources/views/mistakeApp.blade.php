@extends('layouts.home')

@section('title', 'Ejecucion App')
@section('descripcion', 'Ejecucion Desarrollo prueba tecnica 7 segmentos')
@section('keywords', 'Ejecucion 7 Segmentos')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <h1 class="text-center text-danger">{{ $resultado }}</h1>
            <div class="text-center">
                <a href="{{url('/')}}" class="btn btn-primary">Volver al Menu Principal</a>
            </div>
        </div>
    </div>

@stop