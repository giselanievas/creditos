<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: rgb(80, 20, 120) ">
    <div class="container">
        <a class="navbar-brand  float-left" href="{{ url('/') }}">
            <img src="{{ asset('img/PL isologo encabezado.svg') }} " style="width: 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color:white">inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color:white">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color:white">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color:white">Contactanos</a>
                </li>
                @can('cotizador')   
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color:white">Cotizador</a>
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
                        <li class="nav-item">
                            <a class="btn rounded-pill" style="border-color: rgb(00, 235, 185); color:rgb(00, 235, 185); border-width:3px" href="{{ route('login') }}"><strong>Acceder</strong></a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn rounded-pill" style="border-color: rgb(00, 235, 185); color:rgb(00, 235, 185);border-width:3px" href="{{ route('register') }}"><strong>{{ __('Registro') }}</strong></a>
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
