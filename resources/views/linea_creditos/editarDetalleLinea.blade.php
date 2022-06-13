@extends('linea_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>Editar Detalle Linea de Creditos </h3>
</div>
<hr class="container">
<div class="container">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger alert-dismissible fade show " role="alert">{{ $error }} </li>

        @endforeach
    </ul>
    
    <form action="{{ route('updateDetalleDeLinea',$dato->id)}}" method="POST" class="row" >
        @method('PUT')
        @csrf

       

        <div class="row container m-auto ">
            @if ( session('mensaje') )
              <div class="alert alert-success text-center">{{ session('mensaje') }}</div>
             @endif
            @if ( session('existe') )
              <div class="alert alert-danger text-center">{{ session('existe') }}</div>
             @endif


            <label for="" class="p-0 mb-1">¿Linea de Crédito?</label>
              <select class="form-control mb-2" name="LineaCredito">
                  <option value={{ $dato->lineaCredito_ID}}>{{ $dato->detalle->descripcion }}</option>
                @forelse ($lineaCredito as $item)
                    <option value={{ $item->id }}>{{ $item->descripcion }}</option>
                @empty
              </select>
                    <label class="p-0 mb-1">No se encuentran registros disponibles</label>
                    <a href="{{ route('lineaCredito')}}" class="btn btn-primary btn-sm mb-2">Agregar Linea de Crédito</a>
                @endforelse
              </select>

              <label for="" class="p-0 mb-1">Coeficiente Desde</label>
              <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number" min="0" step="any" value={{ $dato->coeficienteDesde }}   name="coeficienteDesde" placeholder="Coeficiente Desde">

              <label for="" class="p-0 mb-1">Coeficiente Hasta</label>
             <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number" min="0" step="any" name="coeficienteHasta"    value= {{ $dato->coeficienteHasta }}   placeholder="Coeficiente Hasta">

             <label for="" class="p-0 mb-1">Cantidad de cuotas</label>
             <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number"  name="cuota"    value="{{ $dato->cuotas }}"  min="1"  placeholder="Cantidad de cuotas">

            <button class="btn btn-success" type="submit">Guardar cambios</button>
        </div>

    </form>
</div>

@endsection