@extends('layouts.app')

@section('content')


<section class="intro">
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5"> <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                <div class="text">
                    <h1>Abriendo Caminos</h1>
                    <p>Créditos prendarios <br>para autos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nosotros">
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6"> <!--la fila va a tener 5 columnas donde vamos a colocar el texto-->
                <div class="text">
                    <h1>Nosotros</h1>
                    <p>Somos una empresa especializada a la prestación de créditos prendarios para autos usados y 0km.</p>
                    <p>Nuestra <strong>misión</strong> es muy clara: ganar la confianza de nuestros clientes, ofreciendo la mejor atención personalizada con el mejor producto.</p>
                    <p>Posicionarnos en el mercado automotriz es nuestra <strong>visión</strong>, logrando fidelizar las agencias/concesionarias que ya nos eligen y captando nuevos socios a nuestra red de multimarcas.</p>
                    <p>Tenemos como objetivo ayudar a <strong>todos</strong>, ejerciendo un plan adecuado para cada situación.<br><strong>Experiencia</strong>, <strong>Seguridad</strong> y <strong>rapidez</strong>.</p>
                </div>
            </div>
            <div class="col-md-4"> <!--la fila va a tener 3 columnas donde vamos a colocar la imagen-->
                <div class="hombrecito">
                    <img id="hombrecito" src="images/hombrecito.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="beneficios">
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10"> <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                <div class="text">
                    <h1>Beneficios</h1>
                    <br>
                    <ul>
                        <li class="list-beneficio" id="beneficio-uno"><p>Te ayudamos a vender tu auto con la mejor atención personaliza.</p></li>
                        <li class="list-beneficio" id="beneficio-dos"><p>Aprobamos TODOS los perfiles de clientes así tus ventas se hacen efectivas.</p></li>
                        <li class="list-beneficio" id="beneficio-tres"><p>Trabajamos con las mejores agencias y concesionarias. <strong>Sumate!</strong></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cotizador">
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10"> <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                <div class="text">
                    <h1>Cotizador</h1>
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
              </div>
        </div>
    </div>
</section>

<section class="alianzas">
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10"> <!--la fila va a tener 8 columnas donde vamos a colocar el texto-->
                <div class="text">
                    <h1>Alianzas Comerciales</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="galeria">
                    <!--Primera Imagen-->
                    <div class="imagen">
                        <img src="images/logo santander@150x.png">
                    </div>
                    
                    <!--Segunda Imagen-->
                    <div class="imagen">
                        <img src="images/logo hsbc@150x.png">
                    </div>
                    
                    <!--tercera Imagen-->
                    <div class="imagen">
                        <img src="images/logo supervielle@150x.png">
                    </div>

                    <!--cuarta Imagen-->
                    <div class="imagen">
                        <img src="images/logo iudu@150x.png">
                    </div>

                    <!--quinta Imagen-->
                    <div class="imagen">
                        <img src="images/logo bibank@150x.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="contacto" class="container espacios">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="text">
                    <h1>Contactanos</h1>
                    <p>Para resolver su consulta, complete el siguiente formulario.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="text">
                    <form>					
                        <div class="mb-3">
                            <input type="text" class="form-control" id="InputNombre" placeholder="Nombre Completo">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="InputTelefono" placeholder="Teléfono">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <textarea name='awesome' class="form-control" rows="7" placeholder="Dejanos tu consulta!"
                            ></textarea>
                        </div>
                                                                
                        <button type="submit" class="btn btn-primary boton">Enviar</button>			
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="redes-sociales">
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
            </div>
            <div class="col-md-3">
                <div class="seguinos">
                    <h2>Seguinos</h3>
                    <ul>
                        <li class="nav-item">
                            <p class="fa fa-instagram">Instagram</p>
                        </li>
                        <li class="nav-item">
                            <p class="fa fa-facebook">Facebook</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contactanos">
                    <h2>Contactanos</h3>
                    <ul>
                        <li><p>11 3609-8552</p></li>
                        <li><p>plautocreditos@gmail.com</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container-fluid"> <!--container de bootstrap que ocupa todo el ancho-->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2>Copyright ®2022 Todos los derechos reservados</h2>
            </div>
        </div>
    </div>
</footer>

@endsection
