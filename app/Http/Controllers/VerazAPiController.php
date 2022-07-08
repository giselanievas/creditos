<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class VerazAPiController extends Controller
{
    public function index(Request $request)
    {
   
      

        $response = Http::get('https://servicio.infoexperto.com.ar/app/api/v1/informe/apikey/53270e53-9e80-408a-89f6-883402e36dbf/cuit/' . $request->cuil);
        $data = json_decode($response->getBody());
      


        if ($data->estado == "OK") {


            $apto = $data->datos->scoringLoteo->scoring;

            if ($apto > 3) {
                return redirect('/ingreso')->with('apto', 'ok')->with('cuil',$request->cuil);
            } else {
                return redirect('/ingreso')->with('apto', 'no');
            }
        } else {
            if($data->codigo == 404 && $data->error != ''){
                return redirect('/ingreso')->with('error', '3');
            }
            if ($data->codigo == 3) {

                return redirect('/ingreso')->with('error', '3');
            }
            if ($data->codigo == 5) {

                return redirect('/ingreso')->with('error', '5');
            }
            if ($data->codigo == 6 || $data->codigo ==  7) {

                return redirect('/ingreso')->with('error', '6');
            }
        }
    }
}
