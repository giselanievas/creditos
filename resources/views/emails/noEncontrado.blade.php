@extends('layouts.app')

@section('content')

<div style="background-color: rgb(80, 20, 120)" class="container alert  col-md-12 col-sm-12 col-lg-12 text-center">

    <h3 style="color: white">No se encuentra cuenta para validar</h3>
    <a href="{{ route('inicio') }}" class="btn   btn-sm  float-right rounded-pill col-4 m-auto mt-3" style="background-color: rgb(00, 235, 185); color: white">Volver al inicio</a>
</div>
@endsection
