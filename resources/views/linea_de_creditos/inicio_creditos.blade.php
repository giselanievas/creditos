@extends('layouts.app')

@section('contenidoDinamico')
    <div id="app">
         @include('layouts.template.nav_creditos')
  

        <main class="py-4">
            @yield('creditos')
        </main>
    </div>
    <div id="button-up">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </div>
@endsection
