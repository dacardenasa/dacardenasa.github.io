@extends('layouts.home')

@section('title', 'Menu Principal')
@section('descripcion', 'Menu Desarrollo prueba tecnica 7 segmentos')
@section('keywords', 'Menu 7 Segmentos')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <h1 class="text-center text-primary">Menu Principal</h1>
            <div class="list-group">
                <a href="{{url('/appExecute')}}" class="list-group-item list-group-item-action">Ejecutar Aplicacion</a>
                <a href="{{url('/exit')}}" class="list-group-item list-group-item-action list-group-item-success">Salir de la aplicacion</a>
            </div>
        </div>
    </div>

@stop