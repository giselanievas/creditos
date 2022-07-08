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
                <h5>Datos de la solicitud de Credito - CUIL {{$msg['cuil']}}</h5>
        
              </div>
              <div class="border mb-2" style=" border-color:rgb(80, 20, 120)">
                <div class="row col-12 mt-3">
                <div class="col-6">
                    <p>Teléfono Celular: {{ $msg['telefono'] }}</p>
                </div>
                <div class="col-6">
                   <p>E-Mail: {{ $msg['email'] }}</p>
                </div>
                <div class="col-6">
                  <p>Año del Auto: {{ $msg['fecha'] }}</p>
                </div>
                <div class="col-6">
                   <p>Marca del Auto: {{ $msg['marca'] }}</p>
                </div>
                <div class="col-6">
                   <p>Linea del Auto: {{ $msg['linea'] }}</p>
                </div>
                <div class="col-6">
                   <p>Modelo del Auto: {{ $msg['modelo'] }}</p>
                </div>
                <div class="col-6">
                   <p>Valor del Auto: {{ $msg['valor'] }}</p>
                </div>
                <div class="col-6">
                   <p>Monto del Prestamo: {{ $msg['monto'] }}</p>   
                </div>
                <div class="col-12">
                   <p>Observaciones: {{ $msg['observaciones'] }}</p>  
                </div>
               
                </div>
             </div>      
          
          </div>
        
    
    </body>
    </html>