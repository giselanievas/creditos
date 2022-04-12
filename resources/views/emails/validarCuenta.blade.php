
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
    <div class="container  col-md-6 col-sm-12 col-lg-4 grid">
        <div class="g-gol-4 " style="text-align: center;">
         <h4>Verificar Cuenta Para  {{ $msg['concesionaria'] }}</h4> 
          <div class="border border-primary bg-primary pt-2 " style="color: white">
            <h5>Datos de la solicitud de registro</h5>
    
          </div>
          <div class="border border-primary">
            <p>Nombre: {{ $msg['name'] }}</p>
            <p>E-Mail: {{ $msg['email'] }}</p>
            <p>Teléfono: {{ $msg['telefono'] }}</p>
            <p>Localidad: {{ $msg['localidad'] }}</p>
         </div>      
          <a class="btn btn-primary mt-2 mb-2" href="{{ route('validarEmail',$msg['id'])}}">Validar Correo</a>
      </div>
    

</body>
</html>