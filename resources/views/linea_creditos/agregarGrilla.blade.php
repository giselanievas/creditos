@extends('linea_creditos.inicio_creditos')

@section('creditos')
<div class="container text-center mb-4">
    <h3>Grilla de Créditos</h3>
</div>
<div class="container">
    <div class="container d-flex justify-content-center">
        <button class=" boton rounded-pill btn btn-outline-dark">Visualizar Grillas Cargadas</button>
        <br>
        <br>

    </div>

    <form action="{{route('guardarGrillaDeCredito')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
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

            <button type="submit" class="btn btn-primary"> Cargar Grillas</button>
        </div>



    </form>

</div>
@endsection