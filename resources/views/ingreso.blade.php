@extends('layouts.app')

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
                                
                                <h3><br>El auto que querés, <br></h3>
                                <h3>el plan que necesitás.<br><br></h3>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3 col-md-4 float-left">
                    <img id="autito" src="{{ asset('img/autito.svg') }}">
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





    <section class="redes-sociales py-3 px-3">
        <div class="container py-2">
            <div class="row">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="datos">

                                <ul>
                                    <li class="nav-item">
                                        <img src="{{ asset('img/PL isologo contactos.svg') }}">
                                    </li>
                                    <br>
                                    <li class="nav-item">
                                    <li class="far fa-user"> Pablo López</li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-3">
                            <div class="seguinos">
                                <h5>Seguinos</h5>
                                <ul>
                                    <li>
                                        <i class="fab fa-instagram py-2 px-2 w3-hover-opacity"> </i>
                                        <a href="https://www.instagram.com/pl.autocreditos/?hl=es-la" target="_blank">Instagram</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-facebook py-2 px-2 w3-hover-opacity"> </i>
                                        <a href="https://www.facebook.com/pl.autocreditos" target="_blank">Facebook</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contactanos">
                                <h5>Contactanos</h5>
                                <ul>
                                    <li>
                                        <i class="fab fa-whatsapp py-2 "> 11 3609-8552</i>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope py-2"> plautocreditos@gmail.com</i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                </div>
                <div class="col-5">
                    <br>
                    <img class="float-left " id="lineaVerde" src="{{ asset('img/linea verde.svg') }}">
                </div>
            </div>
        </div>


    </section>


</section>


@endsection