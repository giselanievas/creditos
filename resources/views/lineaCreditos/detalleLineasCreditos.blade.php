@extends('layouts.app')

@section('content')
<div class="container text-center mb-4">
    <h3>ABM de Detalles Linea de Creditos </h3>
</div>
<hr class="container">
<div class="container">
   @if ( session('mensaje') )
      <div class="alert alert-success text-center">{{ session('mensaje') }}</div>
   @endif

    <a href="{{ route('agregarDetalleLinea') }}" class="btn btn-primary row container m-auto">Agregar Detalle de Linea de Crédito</a> 
</div>

<table class="table table-striped container">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Linea de credito</th>
        <th scope="col">Coeficiente Desde</th>
        <th scope="col">Coeficiente Desde</th>
        <th scope="col">Cantidad de cuotas</th>
        <th scope="col" >Acciones</th>
      </tr>
    </thead>
    <tbody class="text-center">
        @forelse ($datos as $dato)
         <tr >
            <th scope="row">{{ $dato->id }}</th>
            <td>{{ $dato->detalle->descripcion }}</td>
            <td>{{ number_format($dato->coeficienteDesde, 2, ',', '.') }}</td>
            <td>{{ number_format($dato->coeficienteHasta, 2, ',', '.') }}</td>
            <td>{{ $dato->cuotas }}</td>
            <td >
                <div>
                    @if ($dato->baja)
                                 <a href="{{route('habilitarDetalleLinea', $dato->id)}}" class="btn btn-success btn-sm ml-2">Habilitar</a>    
                    @else
                                 <a href="{{route('editarDetalleDeLinea', $dato->id)}}" class="btn btn-warning btn-sm ml-2">Editar</a>  
                                 <a href="{{route('bajaDetalleDeLinear', $dato->id)}}" class="btn btn-danger btn-sm ml-2">Baja</a>   
                    @endif
 
                </div>
    

            </td>
          </tr>
        
         @empty
         <th colspan="5"> <div class="alert alert-secondary text-center container mt-4 mb-5">  No hay datos registrados para mostrar </div></th>
         @endforelse

    </tbody>
  </table>

@endsection
