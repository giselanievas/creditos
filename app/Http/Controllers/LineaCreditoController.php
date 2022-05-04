<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
use App\Models\lineaCredito;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LineaCreditoController extends Controller
{
   
        public function index(){
            $datos=[];
            $datos=lineaCredito::all();
         
            return view('lineaCreditos.lineaCreditos',compact('datos'));
        }
    
        public function agregar(){
            $tipoLinea=TipoLinea::where('baja','=',0)->get();
            return view('lineaCreditos.crearLineaCredito', compact('tipoLinea'));
        }


        public function guardar(Request $request){

            $usuario =auth()->user()->id;
            
            $min=intval($request['aDesde']) + 1;
           
            $request->validate([
                
                'descripcion' => 'required',
                'tipoDeLinea' => 'required',
                'aDesde' => 'required|integer|between:1990,2050',
                'aHasta' => 'required |numeric| min:'.$min,
                
            ]);
             
            $lineaNueva = new lineaCredito;
            $lineaNueva->descripcion = $request->descripcion;
            $lineaNueva->TipoLinea_id=$request->tipoDeLinea;
            $lineaNueva->Usuario_id= $usuario;
            $lineaNueva->añoDesde = $request->aDesde;
            $lineaNueva->añoHasta = $request->aHasta;
            $lineaNueva->baja=0;
    
            $lineaNueva->save();
    
            return redirect('/lineacredito')->with('mensaje', 'Linea de Crédito  Guardada');
    
        }
        public function editar($id){
            $dato =lineaCredito::findOrFail($id);
            $tipoLinea=TipoLinea::where('id','!=',$dato->tipoLinea_id)
                                  ->Where('baja','=',0)->get();
           
            return view('lineaCreditos.editarLineaCredito', compact('dato','tipoLinea'));
    
        }
        public function update(Request $request, $id){
            
            $usuario =auth()->user()->id;
            $min=intval($request['aDesde']) + 1;
            $request->validate([
                
                'descripcion' => 'required',
                'tipoDeLinea' => 'required',
                'aDesde' => 'required|integer|between:1990,2050',
                'aHasta' => 'required |numeric| min:'.$min,
                
            ]);
            
            $lineaNueva = lineaCredito::find($id);
            $lineaNueva->descripcion = $request->descripcion;
            $lineaNueva->TipoLinea_id=$request->tipoDeLinea;
            $lineaNueva->Usuario_id= $usuario;
            $lineaNueva->añoDesde = $request->aDesde;
            $lineaNueva->añoHasta = $request->aHasta;
            $lineaNueva->baja=0;
            $lineaNueva->save();
            return  redirect('/lineacredito')->with('mensaje', 'Linea de Crédito editada!');
        
        }
}
