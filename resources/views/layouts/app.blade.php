<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'pl autocréditos') }}</title>
    
    
   {{--  <script src="{{ secure_asset('js/app.js') }}" defer></script> --}} 
 
    <!-- Scripts htts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--fontawesone-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <!-- Bootstrap-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    
    <title>PL autocréditos</title>

</head>
<body>
    <div id="app">
         @include('layouts.template.nav')
  

        <main >
            @yield('content')
        </main>
    </div>
</body>


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
                Copyrigth @ {{date('Y')}} Todos los derechos reservados
            </div>
        </div>
    </div>
</footer>

</html>
<script>

</script>
