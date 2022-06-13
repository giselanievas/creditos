@extends('linea_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>Editar Tipo de Linea de Creditos </h3>
</div>
    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif
  <div class="container">
    <form action="{{ route('updateTipoDeLinea', $dato->id) }}" method="POST" class="row">
        @method('PUT')
        @csrf


        @error('descripcion')
            <div class="alert alert-danger">
                La descripción es obligatoria
            </div>
        @enderror

        
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
         value="{{ $dato->descripcion }}">
        <button class="btn btn-success btn-block" type="submit">Editar</button>
    </form>
  </div>
@endsection