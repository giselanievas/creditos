@extends('layouts.app')

@section('contenidoDinamico')
   <div id="app">
        @include('layouts.template.nav')
 

       <main >
           @yield('content')
       </main>
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
                        <div class="seguinos" id="seguinos">
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


    <div id="button-up">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </div>

    <footer class="text-center py-3 shadow">
        <div class="container-fluid">
            <!--container de bootstrap que ocupa todo el ancho-->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    Copyrigth @ {{date('Y')}} SeederSoftware │ Todos los derechos reservados
                </div>
            </div>
        </div>
    </footer>
@endsection