<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
    <body>
        <div class="container mt-4 col-md-6 col-sm-12 col-lg-4 grid">
            <div class="g-gol-4 " style="text-align: center;">
              <div class="border pt-2 mt-2 " style="background-color: rgb(80, 20, 120); color: white; border-color:rgb(80, 20, 120)">
                <h5>Datos de la solicitud de Credito</h5>
        
              </div>
              <div class="border mb-2" style=" border-color:rgb(80, 20, 120)">
                <p>Teléfono Celular: {{ $msg['telefono'] }}</p>
                <p>E-Mail: {{ $msg['email'] }}</p>
                <p>Año del Auto: {{ $msg['fecha'] }}</p>
                <p>Marca del Auto: {{ $msg['marca'] }}</p>
                <p>Linea del Auto: {{ $msg['linea'] }}</p>
                <p>Modelo del Auto: {{ $msg['modelo'] }}</p>
                <p>Valor del Auto: {{ $msg['valor'] }}</p>
                <p>Monto del Prestamo: {{ $msg['monto'] }}</p>
                <p>Observaciones: {{ $msg['observaciones'] }}</p>
             </div>      
          
          </div>
        
    
    </body>
    </html>