@extends('lineacreditos.inicioCreditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>Crear Linea de Creditos </h3>
</div>
<hr class="container">
<div class="container">

    
    <form action="{{ route('guardarLineaCredito')}}" method="POST" class="row" >
        @csrf

       <strong  class="mb-3">Descripcíon</strong>

        <div class="row container m-auto ">
            @if ( session('mensaje') )
              <div class="alert alert-success text-center">{{ session('mensaje') }}</div>
             @endif
            @if ( session('existe') )
              <div class="alert alert-danger text-center">{{ session('existe') }}</div>
             @endif

            <input class="form-control col-lg-8 col-md-8 col-sm-12 mb-2" type="text" name="descripcion" placeholder="Ingrese Descripcíon" value={{ old('descripcion') }}>

            <label for="" class="p-0 mb-1">¿Tipo de Crédito?</label>
              <select class="form-control mb-2" name="tipoDeLinea">
                  <option value=''>Seleccione un Tipo de Crédito</option>
                @forelse ($tipoLinea as $item)
                    <option value={{ $item->id }}>{{ $item->descripcion }}</option>
                @empty
              </select>
                    <label class="p-0 mb-1">No se encuentran registros disponibles</label>
                    <a href="{{ route('tipoLineaCredito')}}" class="btn btn-primary btn-sm mb-2">Agregar Tipo de Crédito</a>
                @endforelse
              </select>

              <label for="" class="p-0 mb-1">Modelo Desde</label>
              <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number"  value="{{ old('aDesde') }}"  min='1990' name="aDesde" placeholder="Año Desde">

              <label for="" class="p-0 mb-1">Modelo Hasta</label>
             <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number" name="aHasta"    value="{{ old('aHasta') }}"  min='1991' placeholder="Año Hasta">

            <button class="btn btn-success" type="submit">Agregar</button>
        </div>

    </form>
</div>

@endsection