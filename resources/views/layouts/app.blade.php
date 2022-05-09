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
    <style>.go-top-container{
        position: fixed;
        bottom: 4rem;
        right: 4rem;
        width: 6.6rem;
        height: 6.6rem;
        height: 6.6rem;
        z-index: -1;
      }
      
      .go-top-button{
        width: 0rem;
        height: 0rem;
        background: rgb(80, 20, 120);
        border-radius: 50%;
        cursor: pointer;
        transition: .2s;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: -1;
      }
      
      .go-top-button i{
        position: absolute;
        font-size: 1.7rem;
        top: 48%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        color: #fff;
        transition: .2s;
      }
      
      .show{
        z-index: 10;
      }
      
      .show .go-top-button{
        animation: popup .3s ease-in-out;
        width: 6.6rem;
        height: 6.6rem;
        z-index: 11;
      }
      
      .show i{
        transform: translate(-50%, -50%) scale(1);
      }
      
      @keyframes popup {
        0%{
          width: 0rem;
          height: 0rem;
        }
        50%{
          width: 8rem;
          height: 8rem;
        }
        100%{
          width: 6.6rem;
          height: 6.6rem;
        }
      }
      </style>
</head>
<body>
    <div id="app">
         @include('layouts.template.nav')
  

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<script>

</script>
