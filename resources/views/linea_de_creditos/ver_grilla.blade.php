@extends('linea_de_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>Grilla de Créditos</h3>
</div>
<div class="container">
    <div class="container d-flex ">

        <a class="boton rounded-pill btn btn-outline-dark" href="{{route('grillaDeCredito')}}" role="button">Regresar</a>
    </div>
    <br>
    @if (session('mensaje')=='Se dio de Baja la Grilla')
        <div class="alert alert-success text-center">{{ session('mensaje') }}</div>
    @endif
    <br>
    <br>
    <div class="container-flud">
        @foreach($grillas as $grilla)
        <hr style=" color:black">
        <div class="col-lg-12 col-md-12 col-sm-12 mb-2 d-flex">

            <h3 class="card-title col-lg-9 col-md-9 col-sm-9">{{$grilla->descripcion}}</h3>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <a href="{{route('grillaDeCreditoDelete', $grilla->id)}}" class="eliminarproducto btn btn-danger container ">Eliminar Grilla </a>
            </div>
        </div>

        <div class="card">
            <img src="{{$grilla->imagen}}" class="card-img-top" alt="...">

            <div class="card-body">
            </div>
        </div>

     
        <br>
        
        <br>
        @endforeach
    </div>


</div>







@endsection