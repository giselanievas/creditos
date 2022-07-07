<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
class VerazAPiController extends Controller
{
    public function index(Request $request){
        
        $response=Http::get('https://servicio.infoexperto.com.ar/app/api/v1/informe/apikey/53270e53-9e80-408a-89f6-883402e36dbf/cuit/'.$request->cuil);
        $data = json_decode($response->getBody());
        
    
       /* ($data->datos->scoringLoteo->scoring); */
       $apto = $data->datos->scoringLoteo->scoring;
       
       if ($apto == 5){
        return redirect('/ingreso')->with('apto', 'ok');
       }

       else{
        return redirect('/ingreso')->with('apto', 'no');

       } 


    
 
    }
}
