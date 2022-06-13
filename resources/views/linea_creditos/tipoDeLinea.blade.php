@extends('linea_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>ABM Tipo de Linea de Creditos </h3>
</div>
<hr class="container">
<div class="container">

   

     <form action="{{ route('agregarTipoLinea')}}" method="POST" class="row" >
        @csrf

       <strong  class="mb-3">Descripcíon</strong>

        <div class="row container m-auto">
            @if ( session('mensaje') )
              <div class="alert alert-success text-center">{{ session('mensaje') }}</div>
             @endif
            <input class="form-control col-lg-8 col-md-8 col-sm-12 mb-2" type="text" name="descripcion" placeholder="Ingrese Descripcíon">

                @error('descripcion')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           La Descripcíon es requerida
                    </div>
                @enderror 

            <button class="btn btn-primary" type="submit">Agregar</button>
        </div>

    </form>
</div>

<table class="table table-striped container">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descripcion</th>
        <th scope="col" >Acciones</th>
      </tr>
    </thead>
    <tbody class="text-center">
        @forelse ($datos as $dato)
         <tr >
            <th scope="row">{{ $dato->id }}</th>
            <td>{{ $dato->descripcion }}</td>
            <td >
                <div>
                  @if ($dato->baja)
                      <a href="{{route('habilitarTipoLinea', $dato)}}" class="btn btn-success btn-sm ml-2">Habilitar</a>   
                  @else
                      <a href="{{route('editarTipoDeLinea', $dato)}}" class="btn btn-warning btn-sm ml-2">Editar</a>   
                      <a href="{{route('eliminaTipoDeLinear', $dato->id)}}" class="btn btn-danger btn-sm  ml-2">Dar de Baja</a> 
                  @endif
                   
                </div>
    

            </td>
          </tr>
        
         @empty
         <tr >
          <th colspan="3">   <div class="alert alert-secondary text-center container mt-4 mb-5">  No hay datos registrados para mostrar </div></th>
     
       </tr>
         @endforelse

    </tbody>
  </table>


@endsection
