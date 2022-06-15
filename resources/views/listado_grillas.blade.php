@extends('layouts.app')

@section('content')

<div class="container text-center mb-4">
    <br>
    <h3>Grillas de Créditos</h3>
</div>
<div class="container">
    <div class="container d-flex ">

        <a class="boton rounded-pill btn btn-outline-dark" href="{{route('inicio')}}" role="button">Regresar</a>
    </div>
    <br>
    <br>
    <div class="container-flud">
        @foreach($grillas as $grilla)
        <h3 class="card-title">{{$grilla->descripcion}}</h3>

        <div class="card">
            <img src="{{$grilla->imagen}}" class="card-img-top" alt="...">

            <div class="card-body">
            </div>
        </div>

        @endforeach
    </div>


</div>