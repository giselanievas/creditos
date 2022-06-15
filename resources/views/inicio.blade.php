@extends('layouts.welcome')

@section('content')



<section class="intro">
    <div>
        <div class="row jumbotron fondo-imagen">
        
            <div class="col-9">
                <div class="col-12 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-2 col-md-1"></div>
                            <div class="col-6 col-md-4">
                                <h1><br>Abriendo<br>Caminos <br></h1>
                                <h4>Créditos prendarios <br>para autos.<br><br></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-6 col-md-4 float-left">
                    <img id="autito" src="{{ asset('img/autito.svg') }}">
                    <br><br><br>
                    <div class="container d-flex justify-content-center">
                          
                       
                    <a class="boton rounded-pill btn btn-outline-dark" href="{{route('visualizarGrillas')}}" role="button"><b>Visualizar Grillas</b></a>
                  
                    </div>

                </div>
            </div>
            <div class="col-3  py-4">
                
                <img id="formas" src="{{ asset('img/formas grandes.svg') }}">
            </div>
        </div>
    </div>

</section>
<div class="col-3">
    <img id="formitaVerde" src="{{ asset('img/formita verde.svg') }}">
</div>


<section class="container " id="nosotros">

    <div class="container-fluid">



        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">

                <div class="text">
                    <h1>Nosotros</h1>
                    <p>Somos una empresa especializada a la prestación de créditos prendarios para autos usados y 0km.</p>
                    <p>Nuestra <strong>misión</strong> es muy clara: ganar la confianza de nuestros clientes, ofreciendo la mejor atención personalizada con el mejor producto.</p>
                    <p>Posicionarnos en el mercado automotriz es nuestra <strong>visión</strong>, logrando fidelizar las agencias/concesionarias que ya nos eligen y captando nuevos socios a nuestra red de multimarcas.</p>
                    <p>Tenemos como objetivo ayudar a <strong>todos</strong>, ejerciendo un plan adecuado para cada situación.<br><strong>Experiencia</strong>, <strong>Seguridad</strong> y <strong>rapidez</strong>.</p>
                </div>
            </div>
            <div class="col-md-4">

                <div class="hombrecito">
                    <img id="hombrecito" src="{{ asset('img/hombrecito.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="beneficios" id="beneficios">
    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div class="text">
                    <h3>BENEFICIOS</h3>
                    <br><br>
                    <br><br>

                    <ul>
                        <li class="list-beneficio" id="beneficio-uno">
                            <h6>Te ayudamos a vender tu auto con la mejor atención personaliza.</h6>
                        </li>
                        <li class="list-beneficio" id="beneficio-dos">
                            <h6>Aprobamos TODOS los perfiles de clientes así tus ventas se hacen efectivas.</h6>
                        </li>
                        <li class="list-beneficio" id="beneficio-tres">
                            <h6>Trabajamos con las mejores agencias y concesionarias. <strong>Sumate!</strong></h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-10">
        </div>
        <div class="col-2">
            <img class="float-left " id="lineaVioleta" src="{{ asset('img/linea violeta.svg') }}">
        </div>
    </div>
</div>


<section class="cotizador img-fluid" id="cotizador">
    <div class="container mb-4 mt-4">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div class="text">
                    <h3>Cotizador</h3>
                    <h6>Simulá tu crédito ahora!</h6>
                    <br>

                </div>
            </div>
        </div>

        <div class=" container-fluid row mb-4">
            <div class="card mb-3 m-auto" style="max-width: 18rem;">
                <div class="card-header text-center">
                    <h5>Tasa Fija</h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-center">En pesos con sistema de Amortización Francés.</p>
                </div>
            </div>
            <div class="card mb-3 m-auto" style="max-width: 18rem;">
                <div class="card-header text-center">
                    <h5>TNA Fija<h5>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-center">En pesos con sistema de Amortización Francés</p>
                </div>
            </div>
            <div class="card mb-3 m-auto" style="max-width: 18rem;">
                <div class="card-header text-center">
                    <h5>UVA</h5>
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


</section>



<section class="alianzas py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="text">
                    <h3>Alianzas Comerciales</h3>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="row py-2 m-auto">

                    <div class="col-md-2 col-sm-3 m-auto">
                        <img class="img-fluid " src="{{ asset('img/logo santander@150x.png') }}">
                    </div>

                    <div class="col-md-2 col-sm-3 m-auto">
                        <img class="img-fluid" src="{{ asset('img/logo hsbc@150x.png') }}">
                    </div>
                    <div class="col-md-2 col-sm-3 m-auto">
                        <img class="img-fluid" src="{{ asset('img/logo supervielle@150x.png') }}">
                    </div>
                    <div class="col-md-2 col-sm-3 m-auto">
                        <img class="img-fluid" src="{{ asset('img/logo iudu@150x.png') }}">
                    </div>

                    <div class="col-md-2 col-sm-3 m-auto">
                        <img class="img-fluid" src="{{ asset('img/logo bibank@150x.png') }}">
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
                <img class="float-left " id="lineaVioleta" src="{{ asset('img/linea violeta.svg') }}">
            </div>
        </div>
    </div>

</section>




<section class="contacto img-fluid py-4 mt-2 ">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <div class="container py-4">
                    <div class="row">
                        <h3>Contactanos</h3>
                        <div class="col-6">
                            <p>Para resolver su consulta, complete el siguiente formulario.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container py-4">
                    <div class="row">
                        <form method="POST" action="{{route('formulario')}}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" required>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="mb-3">
                                <textarea name='consulta' id="consulta" class="form-control" rows="7" placeholder="Dejanos tu consulta!" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary boton ">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class=" col-sm-7 col-md-4 float-left">
        <img id="formitaAmarilla" src="{{ asset('img/formita amarilla.svg') }}">
    </div>

</section>




@endsection