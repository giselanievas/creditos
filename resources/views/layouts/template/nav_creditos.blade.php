<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: rgb(80, 20, 120) ">
    <div class="container">
        <a class="navbar-brand  float-left" href="{{ route('inicio') }}">
            <img src="{{ asset('img/PL isologo encabezado.svg') }} " style="width: 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ingreso') }}" style="color:white">inicio</a>
                </li>
            </ul>   
            <ul class="navbar-nav me-auto">
                 @can('tipoLineaCredito')
                     <li class="nav-item">
                         <a class="nav-link " href="{{ route('tipoLineaCredito') }}" style="color:white">ABM Tipo de Linea</a>
                     </li>
                 @endcan
            </ul>
            <ul class="navbar-nav me-auto">
                 @can('tipoLineaCredito')
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('lineaCredito') }}" style="color:white">ABM Linea de Credito</a>
                     </li>
                 @endcan
            </ul>
            <ul class="navbar-nav me-auto">
                 @can('tipoLineaCredito')
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('detalleLineaCredito') }}" style="color:white">ABM Detalle de Linea</a>
                     </li>
                 @endcan
            </ul>   
            <ul class="navbar-nav me-auto">
                 @can('tipoLineaCredito')
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('grillaDeCredito') }}" style="color:white">Grillas de Créditos</a>
                     </li>
                 @endcan
            </ul>   


            

            <!-- Right Side Of Navbar -->
           
        </div>
    </div>
</nav>
