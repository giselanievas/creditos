@extends('layouts.app')

@section('content')

<body>
    <main>

        <section class="intro">
            <div class="container-flow">
                <!--container de bootstrap que ocupa todo el ancho-->
                <div class="row justify-content-evenly">
                    <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                    <div class="col-8">
                        <br>
                        <h1><br>Abriendo<br>Caminos <br></h1>
                        
                        <h4>Créditos prendarios <br>para autos.<br><br></h4>

                    </div>
                    <div class="float-left">
                    <img id="autito" src="{{ asset('img/autito.svg') }}">
                    </div>
                </div>
                <div class=" col-sm-6 col-md-3 float-left">
                    <img id="autito" src="{{ asset('img/autito.svg') }}">
                </div>

            </div>
            
        </section>
        <section class="container " id="nosotros">

            <div class="container-fluid">
                <!--container de bootstrap que ocupa todo el ancho-->


                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <!--la fila va a tener 5 columnas donde vamos a colocar el texto-->
                        <div class="text">
                            <h1>Nosotros</h1>
                            <p>Somos una empresa especializada a la prestación de créditos prendarios para autos usados y 0km.</p>
                            <p>Nuestra <strong>misión</strong> es muy clara: ganar la confianza de nuestros clientes, ofreciendo la mejor atención personalizada con el mejor producto.</p>
                            <p>Posicionarnos en el mercado automotriz es nuestra <strong>visión</strong>, logrando fidelizar las agencias/concesionarias que ya nos eligen y captando nuevos socios a nuestra red de multimarcas.</p>
                            <p>Tenemos como objetivo ayudar a <strong>todos</strong>, ejerciendo un plan adecuado para cada situación.<br><strong>Experiencia</strong>, <strong>Seguridad</strong> y <strong>rapidez</strong>.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--la fila va a tener 3 columnas donde vamos a colocar la imagen-->
                        <div class="hombrecito">
                            <img id="hombrecito" src="{{ asset('img/hombrecito.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="beneficios" id="beneficios">
            <div class="container">
                <!--container de bootstrap que ocupa todo el ancho-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                        <div class="text">
                            <h3>BENEFICIOS</h3>
                            <br><br>
                            <br><br>

                            <ul>
                                <li class="list-beneficio" id="beneficio-uno">
                                    <p>Te ayudamos a vender tu auto con la mejor atención personaliza.</p>
                                </li>
                                <li class="list-beneficio" id="beneficio-dos">
                                    <p>Aprobamos TODOS los perfiles de clientes así tus ventas se hacen efectivas.</p>
                                </li>
                                <li class="list-beneficio" id="beneficio-tres">
                                    <p>Trabajamos con las mejores agencias y concesionarias. <strong>Sumate!</strong></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cotizador" id="cotizador">
            <div class="container mb-4">
                <!--container de bootstrap que ocupa todo el ancho-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                        <div class="text">
                            <h3>Cotizador</h3>
                            <p>Simulá tu crédito ahora!</p>
                            <br>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 card-group">
                        <div class="card">
                            <div class="encabezado-card">
                                <h2>Tasa Fija</h2>
                            </div>
                            <div class="content">
                                <p>En pesos con sistema de Amortización Francés.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="encabezado-card">
                                <h2>TNA Fija</h2>
                            </div>
                            <div class="content">
                                <p>En pesos con sistema de Amortización Francés.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="encabezado-card">
                                <h2>UVA</h2>
                            </div>
                            <div class="content">
                                <p>Accede a la cuota inicial más baja del mercado.</p>
                            </div>
                        </div>
                        <cotizador />
                    </div>
                </div>
               
            </div>
         
        
        </section>
        <section class="alianzas">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text">
                            <h3>Alianzas Comerciales</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row py-2">
                    <div class="col-md-2">
                        <img class="img-fluid py-4" src="{{ asset('img/logo santander@150x.png') }}">
                    </div>
                    
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{ asset('img/logo hsbc@150x.png') }}">
                    </div>
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{ asset('img/logo supervielle@150x.png') }}">
                    </div>
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{ asset('img/logo iudu@150x.png') }}">
                    </div>
                    
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{ asset('img/logo bibank@150x.png') }}">
                    </div>

                </div>
            </div>



        </section>
        <section class="contacto py-4 mt-4">
             <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <div class="container py-4">
                        <div class="row">
                            <h3>Contactanos</h3>
                            <p>Para resolver su consulta, complete el siguiente formulario.</p>
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
                                    <input type="email" class="form-control" id="email" name="email"placeholder="Email" required>
                                </div>

                                <div class="mb-3">
                                    <textarea name='consulta' id="consulta" class="form-control" rows="7" placeholder="Dejanos tu consulta!" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary boton">Enviar</button>
                            </form>

                        </div>
                    </div>
                </div>
                </div>
             </div>

        </section>    







        <section class="redes-sociales py-4 px-4">
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
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <div class="seguinos">
                            <h4>Seguinos</h4>
                            <ul>
                                <li>
                                    <i class="fab fa-instagram py-2 px-2"> Instagram</i>
                                </li>
                                <li>
                                    <i class="fab fa-facebook py-2 px-2"> Facebook</i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contactanos">
                            <h4>Contactanos</h4>
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
        </section>

    </main>
</body>

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


@endsection