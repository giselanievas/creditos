@extends('layouts.app')

@section('content')
<div class="container text-center mb-4">
    <h3>ABM de Linea de Creditos </h3>
</div>
<hr class="container">
<div class="container">

     <a href="{{ route('agregarLineaCredito') }}" class="btn btn-primary row container m-auto">Agregar Linea de Crédito</a>
</div>

<table class="table table-striped container">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Tipo de Linea</th>
        <th scope="col">Modelos Desde</th>
        <th scope="col">Modelos Hasta</th>
        <th scope="col" >Acciones</th>
      </tr>
    </thead>
    <tbody class="text-center">
        @forelse ($datos as $dato)
         <tr >
            <th scope="row">{{ $dato->id }}</th>
            <td>{{ $dato->descripcion }}</td>
            <td>{{ $dato->tipoDeCredito->descripcion}}</td>
            <td>{{ $dato->añoDesde }}</td>
            <td>{{ $dato->añoHasta }}</td>
            <td >
                <div>
                    <a href="{{route('editarLinea', $dato)}}" class="btn btn-warning btn-sm ml-2">Editar</a>   
                   
                </div>
    

            </td>
          </tr>
        
         @empty
         <div class="alert alert-secondary text-center container mt-4 mb-5">  No hay datos registrados para mostrar </div>
           
         
       
         @endforelse

    </tbody>
  </table>

@endsection
