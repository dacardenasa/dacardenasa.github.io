@extends('layouts.home')

@section('title', 'Ejecucion App')
@section('descripcion', 'Ejecucion Desarrollo prueba tecnica 7 segmentos')
@section('keywords', 'Ejecucion 7 Segmentos')

@section('content')
    {{ $numeroDigitos = $numeroDigitos - 1}}

            @for ($i = 1; $i <= $digito1; $i++)
                <div class="row">
                    <div class="col">
                @for($j = 0; $j <= $numeroDigitos; $j++)
                    @switch($arraynumber[$j])
                        @case(0)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/0.jpg')}}" alt="Image">
                        @break
                        @case(1)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/1.jpg')}}" alt="Image">
                        @break
                        @case(2)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/2.jpg')}}" alt="Image">
                        @break
                        @case(3)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/3.jpg')}}" alt="Image">
                        @break
                        @case(4)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/4.jpg')}}" alt="Image">
                        @break
                        @case(5)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/5.jpg')}}" alt="Image">
                        @break
                        @case(6)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/6.jpg')}}" alt="Image">
                        @break
                        @case(7)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/7.jpg')}}" alt="Image">
                        @break
                        @case(8)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/8.jpg')}}" alt="Image">
                        @break
                        @case(9)
                        <img class="img-fluid float-left img-thumbnail" src="{{asset('/img/9.jpg')}}" alt="Image">
                        @break
                        @default
                        <span>Something went wrong, please try again</span>
                    @endswitch
                @endfor
                    </div>
                </div>
            @endfor
    <a href="{{url('/')}}" class="btn btn-primary">Volver al Menu Principal</a>
@stop