@extends('linea_de_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>Crear Detalle  Linea de Creditos </h3>
</div>
<hr class="container">
<div class="container">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger alert-dismissible fade show " role="alert">{{ $error }} </li>

        @endforeach
    </ul>
    
    <form action="{{ route('guardarDetalleLinea')}}" method="POST" class="row" >
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
                  <option value=''>Seleccione una Linea de Crédito</option>
                @forelse ($lineaCredito as $item)
                    <option value={{ $item->id }}>{{ $item->descripcion }}</option>
                @empty
              </select>
                    <label class="p-0 mb-1">No se encuentran registros disponibles</label>
                    <a href="{{ route('lineaCredito')}}" class="btn btn-primary btn-sm mb-2">Agregar Linea de Crédito</a>
                @endforelse
              </select>

              <label for="" class="p-0 mb-1">Coeficiente Desde</label>
              <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number"  min="0" step="any" value="{{ old('cDesde') }}"   name="coeficienteDesde" placeholder="Coeficiente Desde">

              <label for="" class="p-0 mb-1">Coeficiente Hasta</label>
             <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number" min="0"  step="any" name="coeficienteHasta"    value="{{ old('cHasta') }}"   placeholder="Coeficiente Hasta">
   
             <label for="" class="p-0 mb-1">Cantidad de cuotas</label>
             <input class=" form-control col-lg-4 col-md-4 col-sm-4 mb-2" type="number"  name="cuota"    value="{{ old('cuota') }}" min="1"  placeholder="Cantidad de cuotas">

            <button class="btn btn-success" type="submit">Agregar</button>
        </div>

    </form>
</div>

@endsection