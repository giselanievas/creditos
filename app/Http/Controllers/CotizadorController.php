<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
use App\Models\DetalleLineaCredito;
use App\Models\LineaCredito;
class CotizadorController extends Controller
{
    public function index(){
            $TipoLinea = TipoLinea::all();
            return $TipoLinea;
    }

     public function calculos($id,$modelo,$cuotas){
         
 

       $linea = LineaCredito::select('id')->Where([
           ['tipoLinea_id',$id],
           ['añoDesde','<=',$modelo],
           ['añoHasta','>=',$modelo]
       ])->first();
                     
   
     
          $detalle = DetalleLineaCredito::where([
              ['lineaCredito_ID',$linea->id],
              ['cuotas',$cuotas],
          ])->get();
   
                             
          return $detalle;      
    }  
}