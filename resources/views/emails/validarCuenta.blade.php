
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
    <div class="container mt-4 col-md-6 col-sm-12 col-lg-4 grid">
        <div class="g-gol-4 " style="text-align: center;">
         <h4>Verificar Cuenta Para:  {{ $msg['concesionaria'] }}</h4> 
          <div class="border pt-2 mt-2 " style="background-color: rgb(80, 20, 120); color: white; border-color:rgb(80, 20, 120)">
            <h5>Datos de la solicitud de registro</h5>
    
          </div>
          <div class="border mb-2" style=" border-color:rgb(80, 20, 120)">
            <p>Nombre: {{ $msg['name'] }}</p>
            <p>E-Mail: {{ $msg['email'] }}</p>
            <p>Teléfono: {{ $msg['telefono'] }}</p>
            <p>Localidad: {{ $msg['localidad'] }}</p>
         </div>      
          <a class="btn mt-2 mb-2" style="background-color: rgb(00, 235, 185); color: white" href="{{ route('validarEmail',$msg['id'])}}">Validar Correo</a>
      </div>
    

</body>
</html>