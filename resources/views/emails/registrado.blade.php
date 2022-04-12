@extends('layouts.app')

@section('content')

 
<div class="container alert alert-success col-md-12 col-sm-12 col-lg-12 text-center">
    <h3>Se ha registrado correctamente , en la brevedad estaremos activando su cuenta</h3>  
    <a href="{{ route('inicio') }}" class="btn btn-primary  btn-sm  float-right">Volver al inicio</a>
</div>

@endsection
