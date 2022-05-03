<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
use App\Models\lineaCredito;
class CotizadorController extends Controller
{
    public function index(){
            $TipoLinea = TipoLinea::all();
            return $TipoLinea;
    }

    public function modelos($id){
        
         $lineas = lineaCredito::where('tipoLinea_id','=',$id)->get();
         return $lineas;
    } 
}