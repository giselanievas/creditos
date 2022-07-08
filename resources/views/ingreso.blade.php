@extends('layouts.welcome')







@section('content')


<section id="ingreso">

    @if (session('apto') =='ok')


    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Apto',
            text: "",
            html: `
  <h4>Completar Solicitud </h4>
  <h4>CUIL: {{session('cuil')}}</h4>

   
   <form method="POST" action="{{route('solicitudCredito',session('cuil'))}}" >
    @csrf
    <div class="col-12 row">
    <div class="col-6 mb-2">
        <input type="number" class="form-control"  id="telefono" name="telefono" placeholder="Teléfono Celular" required>
    </div>

    <div class="col-6">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>

    <div class="col-6 mb-2">
        <input type="date" class="form-control"  id="fecha" name="fecha" placeholder="Año del Auto" required>
    </div>
    <div class="col-6">
        <input type="text" class="form-control"  id="marca" name="marca"placeholder="Marca del Auto" required>
    </div>

    <div class="col-6 mb-2">
        <input type="text" class="form-control"  id="linea" name="linea"placeholder="Linea del Auto" required>
    </div>

    <div class="col-6">
       <input type="number" class="form-control"  id="modelo" name="modelo"placeholder="Modelo del Auto" required>
    </div>

    <div class="col-6 mb-2">
       <input type="number" step="any" class="form-control"  id="valor" name="valor"placeholder="Valor del Auto" required>
    </div>

    <div class="col-6">
       <input type="number" step="any" class="form-control"  id="monto" name="monto"placeholder="Monto del Préstamo" required>
    </div>

    <div class="col-12 mb-2"> 
     <input type="text" class="form-control"  id="observaciones" name="observaciones" placeholder="Observaciones" required>
    </div>
   
    <button type="submit" class="btn btn-primary boton mt-2">Enviar</button>
    </div>
   </form>
   
  `,

            
            
            confirmButtonColor: '#d33',
            confirmButtonText: 'Salir'

        })
    </script>


    @endif
    @if (session('apto') =='no')


    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script>
        Swal.fire(

            'Comunicate con un comercial',
            'NO se ajusta a nuestra política crediticia para ofrecerle un crédito ',
            'warning'

        )
    </script>
    @endif
    @if (session('apto') =='email')


    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script>
        Swal.fire(

            'Email enviado correctamente',
            '',
            'success'

        )
    </script>
    @endif

    
    @if (session('error') =='3')


    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script>
        Swal.fire(

            'Cuil Inexistente',
            ' ',
            'error'

        )
    </script>
    @endif
    @if (session('error') =='5')


    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script>
        Swal.fire(

            'Corte de servicio de API',
            ' ',
            'error'

        )
    </script>
    @endif

    @if (session('error') =='6')


    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@4/bootstrap-4.css" rel="stylesheet">
    <script>
        Swal.fire(

            'No se encuentran datos',
            ' ',
            'error'

        )
    </script>
    @endif




    <div class="jumbotron pb-5">
        <div class="col-3 py-4 float-end">

            <img id="formas" src="{{ asset('img/formas grandes.svg') }}">
        </div>
        <div class="col-9">
            <div class="col-12 ">
                <div class="container">
                    <div class="row">
                        <div class="col-2 col-md-1"></div>
                        <div class="col-6 col-md-4">

                            <h1 style="color:white; font-family:Montserrat, sans-serif"><br><b><i>El auto que querés, <br>
                                        el plan que necesitás.</i></b><br><br></h1>
                        </div>

                    </div>
                </div>
            </div>
            <div class=" col-sm-3 col-md-4 float-left ml-4">
                <img id="autito" src="{{ asset('img/autito.svg') }}">
                <br><br><br>
                <div class="container d-flex justify-content-center">


                    <p><a href="http://www.bcra.gob.ar/BCRAyVos/Situacion_Crediticia.asp" class="rounded-pill btn btn-outline-light" type="button" target="_blank"><b>Consultar en Veraz</b></a>.</p>

                </div>


            </div>

        </div>


</section>
<div class="col-3">
    <img id="formitaVerde" src="{{ asset('img/formita verde.svg') }}">
</div>
<div class="row col-6">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger alert-dismissible fade show " role="alert">{{ $error }} </li>

        @endforeach
    </ul>
    
    <form action="{{ route('consumirApi') }}" method="GET">
        @csrf
        <label>CUIL</label>
        <input type="text" name="cuil" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-2"> Enviar datos</button>
    </form>
</div>

<section class="cotizador img-fluid" id="cotizador">
    <div class="col-1">
        <br>
        <img class="float-right m-auto" src="{{ asset('img/cuadradito amarillo.svg') }}">
    </div>

    <div class="container mb-4 mt-4">


        <div class="col-md-10">

            <div class="text">
                <h3>Cotizador</h3>
                <h6>Simulá tu crédito ahora!</h6>
                <br>

            </div>
        </div>
    </div>

    <div class=" container-fluid row  mb-4">
        <div class="card mb-3 m-auto" style="max-width: 18rem;">
            <div class="card-header text-center">
                <h5>Tasa Fija Tradicional</h5>
            </div>
            <div class="card-body text-center">
                <p class="card-text text-center">Crédito en pesos con sistema de Amortización Francés.</p>
            </div>
        </div>
        <div class="card mb-3 m-auto" style="max-width: 18rem;">
            <div class="card-header text-center">
                <h5>Inclusión Financiera<h5>
            </div>
            <div class="card-body text-center">
                <p class="card-text text-center">Tasa promoción para clientes sin experiencia crediticia</p>
            </div>
        </div>
        <div class="card mb-3 m-auto" style="max-width: 18rem;">
            <div class="card-header text-center">
                <h5>Prendario UVA</h5>
            </div>
            <div class="card-body text-center">
                <p class="card-text text-center">Accede a la cuota inicial más baja del mercado.</p>
            </div>
        </div>


        @can('cotizador')
        <cotizador />
        @endcan

    </div>
    </div>

    </div>

    <div class="row container-fluid">

        <div class="col-3">
            <br>
            <img class="float-right" id="lineaVerde" src="{{ asset('img/linea verde.svg') }}">
        </div>
    </div>






</section>


@endsection