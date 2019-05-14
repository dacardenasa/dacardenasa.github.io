@extends('layouts.home')

@section('title', 'Practica 7 Segmentos')
@section('descripcion', 'Desarrollo prueba tecnica 7 segmentos')
@section('keywords', '7 Segmentos')

@section('content')

    <div class="row mt-3">
        <div class="col">
            <p>
                <a href="#bloque1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="bloque1" class="btn btn-primary">Ver instrucciones</a>
            </p>
            <div class="collapse" id="bloque1">
                <div class="card card-body">
                    <ul  class="list-group">
                        <li class="list-group-item list-group-item-action list-group-item-info">El primer digito representa
                            el numero de veces que se imprimirá la cadena <span class="text-danger">(entre 1 y 5).</span></li>
                        <li class="list-group-item list-group-item-action list-group-item-success">El segundo digito es el
                            número para mostrar en la pantalla <span class="text-danger">(máximo 5 dígitos).</span></li>
                        <li class="list-group-item list-group-item-action list-group-item-dark">El boton <span class="text-success">mostrar 7 segmentos</span> ejecuta la aplicacion.</li>
                        <li class="list-group-item list-group-item-action list-group-item-danger">El boton <span class="text-primary">Volver Menu Principal</span> redirecciona la aplicacion al menu principal.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <form action="{{url('/ShowSegments')}}" method="GET">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="number">Digito 1</label>
                    <input type="number" class="form-control" placeholder="Escribe la cantidad de veces a repetir el digito" name="QuantityToRepeat" required>
                </div>
                <div class="form-group">
                    <label for="number2">Digito 2</label>
                    <input type="number" class="form-control" placeholder="Escribe el digito a mostrar" name="DigitToShow" required>
                </div>
                <button class="btn btn-success" type="submit">Mostrar 7 Segmentos</button>
                <a href="{{url('/')}}" class="btn btn-primary">Volver Menu Principal</a>
            </form>
        </div>
    </div>

@stop