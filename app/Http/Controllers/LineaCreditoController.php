<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
use App\Models\LineaCredito;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LineaCreditoController extends Controller
{
   
        public function inicio(){
            
            return view('lineacreditos.inicioCreditos');
        }
        public function index(Request $request){
            $datos=[];
            $datos=LineaCredito::all();
         
            return view('lineacreditos.lineaCreditos',compact('datos'));
        }
    
        public function agregar(){
            $tipoLinea=TipoLinea::where('baja','=',0)->get();
            return view('lineaCreditos.crearLineaCredito', compact('tipoLinea'));
        }


        public function guardar(Request $request){

            $usuario =auth()->user()->id;
            
            $min=intval($request['aDesde']) + 1;
            /// control para saber si ya esta cargada la linea de credito /////////////
            $control_lineas=LineaCredito:: where('TipoLinea_id',$request->tipoDeLinea)
                                          ->where('añoDesde',"<=",$request->aHasta)
                                          ->where('añoHasta','>=',$request->aDesde)
                                         ->get() ;
            if($control_lineas->isEmpty() == false){
            return redirect('/lineacredito/agregar')->with('existe', 'La Linea que desea cargar ya existe');
            }
            ///////////////////////////////////////////////////////////////////////////
            $request->validate([
                
                'descripcion' => 'required',
                'tipoDeLinea' => 'required',
                'aDesde' => 'required|integer|between:1990,2050',
                'aHasta' => 'required |numeric| min:'.$min,
                
            ]);            
          
            
            $lineaNueva = new LineaCredito;
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
            $dato =LineaCredito::findOrFail($id);
            $tipoLinea=TipoLinea::where('id','!=',$dato->tipoLinea_id)
                                  ->Where('baja','=',0)->get();
           
            return view('lineaCreditos.editarLineaCredito', compact('dato','tipoLinea'));
    
        }
        public function update(Request $request, $id){
            
            $usuario =auth()->user()->id;
            $min=intval($request['aDesde']) + 1;
            /// control para saber si ya esta cargada la linea de credito /////////////
            $control_lineas=LineaCredito:: where('TipoLinea_id',$request->tipoDeLinea)
                                          ->where('id','!=',$id)
                                          ->where('añoDesde',"<=",$request->aHasta)
                                          ->where('añoHasta','>=',$request->aDesde)
                                          ->get() ;
            if($control_lineas->isEmpty() == false){
               return redirect()->to(route('editarLinea',['id'=>$id]))->with('existe', 'La datos que desea modificar ya existen en otra linea de credito');
            }
            ///////////////////////////////////////////////////////////////////////////
            $request->validate([
                
                'descripcion' => 'required',
                'tipoDeLinea' => 'required',
                'aDesde' => 'required|integer|between:1990,2050',
                'aHasta' => 'required |numeric| min:'.$min,
                
            ]);
            
            $lineaNueva = LineaCredito::find($id);
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
