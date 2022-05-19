<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: rgb(80, 20, 120) ">
    <div class="container">
        @can('cotizador')
        <a class="navbar-brand  float-left" href="{{ url('/ingreso') }}">
            <img src="{{ asset('img/PL isologo encabezado.svg') }} " style="width: 200px;">
        </a>
        @endcan

        @if(auth()->user() == false )
        <a class="navbar-brand  float-left" href="{{ url('/') }}">
            <img src="{{ asset('img/PL isologo encabezado.svg') }} " style="width: 200px;">
        </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav m-auto">
                @can('cotizador')
                <li class="nav-item">
                    <a class="nav-link" href="/ingreso" style="color:white">Inicio</a>
                </li>
                @endcan
                @if(auth()->user() == false )
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color:white">Inicio</a>
                    </li>
                @endif
 
               
                <li class="nav-item">
                    <a class="nav-link" href="#nosotros" style="color:white">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#beneficios" style="color:white">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactanos" style="color:white">Contactanos</a>
                </li>
                @can('cotizador')   
                    <li class="nav-item">
                        <a class="nav-link" href="#cotizador" style="color:white">Cotizador</a>
                    </li>
                 @endcan
                 @can('tipoLineaCredito')
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('lineaCredito') }}" style="color:white">Parámetros</a>
                     </li>
                 @endcan
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                    <li> <a class="fab fa-whatsapp py-2 px-2  rounded-circle nav-item m-1" href="#seguinos"></a></li>
                    <li><a class="fab fa-facebook py-2 px-2 w3-hover-opacity rounded-circle nav-item m-1" href="https://www.facebook.com/pl.autocreditos" target="_blank"></a></li>
                    <li> <a class="fab fa-instagram py-2 px-2 w3-hover-opacity rounded-circle nav-item m-1" href="https://www.instagram.com/pl.autocreditos/?hl=es-la" target="_blank"></a></li>
                    <li class="nav-item">
                           
                            
                           
                            <a class="btn rounded-pill" style="border-color: rgb(00, 235, 185); color:rgb(00, 235, 185); border-width:3px" href="{{ route('login') }}"><strong>Acceder</strong></a>
                        </li>
                    @endif

   
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color:rgb(80, 20, 120)" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
