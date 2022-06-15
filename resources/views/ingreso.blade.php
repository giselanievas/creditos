@extends('layouts.welcome')

@section('content')
<section id="ingreso">
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
                          
                       
                    <p><a href="http://www.bcra.gob.ar/BCRAyVos/Situacion_Crediticia.asp"  class="rounded-pill btn btn-outline-light" type="button" target="_blank"><b>Consultar en Veraz</b></a>.</p>
                  
                    </div>
              
               
            </div>
           
</div>


</section>
<div class="col-3">
    <img id="formitaVerde" src="{{ asset('img/formita verde.svg') }}">
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