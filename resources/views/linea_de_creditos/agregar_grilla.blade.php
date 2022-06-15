@extends('linea_de_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
  <br>  
    <h3>Grillas de Créditos</h3>
</div>

<div class="container">
    @if (session('mensaje')=='Grilla Agregada Correctamente')
        <div class="alert alert-success text-center">{{ session('mensaje') }}</div>
        @endif
    <div class="container d-flex justify-content-center">


        <a class="boton rounded-pill btn btn-outline-dark" href="{{route('verGrillaDeCredito')}}" role="button"><b>Visualizar Grillas Cargadas</b></a>

        <br>
        <br>

    </div>
    <div class="row container m-auto">

        <form action="{{route('guardarGrillaDeCredito')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="form-group">
                    <br>
                    <div class="mb-3">
                        <label for="grilla">Nombre de la Grilla</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba aquí el Nombre de la Grilla" required>
                    </div>
                    <label for="imagen">Subir Grilla</label>
                    <input type="file" class="form-control" required id="imagen" name="imagen">
                </div>
                <br>
                <button class="btn btn-success" type="submit">Agregar Nueva Grilla</button>
            </div>




        </form>

    </div>




    @endsection