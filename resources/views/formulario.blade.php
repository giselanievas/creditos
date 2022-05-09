<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Formulario de Contacto</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<style>
body{

    font-family: "Montserrat", sans-serif;

}    




</style>  
  





</head>
<header>
<div class="container">
    <div class="row">
 <div class="col-2">
<br><br>
<img src="{{ asset('img/PL isologo contactos.svg') }}">
<br><br><br><br>
</div>
</div>
</div>

</div> 

</header>
<body>
     
    <div class="container">
        <div class="row align-items-center">
        <div class="border mb-2" style=" border-color:rgb(80, 20, 120)">
            <p>Nombre: {{ $msg['nombre'] }}</p>
            <p>E-Mail: {{ $msg['email'] }}</p>
            <p>Teléfono: {{ $msg['telefono'] }}</p>
            <p>Consulta: {{ $msg['consulta'] }}</p>
         </div>      

       

        </div>
    </div>
    </div>
</body>

</html>


