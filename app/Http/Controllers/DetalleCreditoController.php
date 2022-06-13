<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
use App\Models\LineaCredito;    
use App\Models\DetalleLineaCredito;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DetalleCreditoController extends Controller
{
    public function index(){
        $datos=[];
        $datos=DetalleLineaCredito::all();
    
        return view('linea_creditos.detalleLineasCreditos',compact('datos'));
    }
    public function agregar(){
        $lineaCredito=LineaCredito::all();
        return view('lineaceditos.agregarDetalleLinea', compact('lineaCredito'));
    }
    public function guardar(Request $request){
        $min=intval($request['coeficienteDesde']) + 1;

        /// control para saber si ya esta cargada la linea de credito /////////////
            $control_detalle=DetalleLineaCredito:: where('lineaCredito_ID',$request->LineaCredito)
                    ->where('cuotas',$request->cuota)
                    ->get() ;
            
            if($control_detalle->isEmpty() == false){
                   return redirect('/detalleLinea/agregar')->with('existe', 'El detalle que desea cargar ya existe');
            }
        ///////////////////////////////////////////////////////////////////////////
        $request->validate([
            
            'LineaCredito' => 'required',
            'coeficienteDesde' => 'required',
            'coeficienteHasta' => 'required |numeric| min:'.$min,
            'cuota' => 'required  | min: 1',

        ]);
         
        $DetalleNuevo = new DetalleLineaCredito;
        $DetalleNuevo->lineaCredito_ID = $request->LineaCredito;
        $DetalleNuevo->coeficienteDesde = $request->coeficienteDesde;
        $DetalleNuevo->coeficienteHasta = $request->coeficienteHasta;
        $DetalleNuevo->cuotas = $request->cuota;
        $DetalleNuevo->baja = 0;

        $DetalleNuevo->save();

        return redirect('/detalleLinea')->with('mensaje', 'Detalle de Linea  Guardado');

    }

    public function editar($id){
        
        $dato = DetalleLineaCredito::findOrFail($id);
        $lineaCredito=LineaCredito::where('id','!=',$dato->lineaCredito_ID)->get();
        return view('linea_creditos.editarDetalleLinea', compact('dato','lineaCredito'));

    }
    public function update(Request $request, $id){
        $min=intval($request['coeficienteDesde']) + 1;

 /// control para saber si ya esta cargada la linea de credito /////////////
        $control_detalle=DetalleLineaCredito:: where('lineaCredito_ID',$request->LineaCredito)
                                               ->where('cuotas',$request->cuota)
                                               ->get() ;
        if($control_detalle->isEmpty() == false){
            return redirect()->to(route('editarDetalleDeLinea',['id'=>$id]))->with('existe', 'La datos que desea modificar ya existen en otro detalle');
        } 
///////////////////////////////////////////////////////////////////////////

        $request->validate([
            
            'LineaCredito' => 'required',
            'coeficienteDesde' => 'required',
            'coeficienteHasta' => 'required |numeric| min:'.$min,
            'cuota' => 'required | min: 1',

        ]);
        $DetalleNuevo = DetalleLineaCredito::find($id);
        $DetalleNuevo->lineaCredito_ID = $request->LineaCredito;
        $DetalleNuevo->coeficienteDesde = $request->coeficienteDesde;
        $DetalleNuevo->coeficienteHasta = $request->coeficienteHasta;
        $DetalleNuevo->cuotas = $request->cuota;
        $DetalleNuevo->baja = 0;

        $DetalleNuevo->save();
        return  redirect('/detalleLinea')->with('mensaje', 'Detalle de Linea editada!');
    
    }
    public function eliminar($id){
        $DetalleNuevo = DetalleLineaCredito::findOrFail($id);

        $DetalleNuevo->baja=1;
        $DetalleNuevo->save();
        return  redirect('/detalleLinea')->with('mensaje', 'Se dio de baja el Detalle de linea');

    }
    public function habilitar($id){
        $DetalleNuevo = DetalleLineaCredito::findOrFail($id);

        $DetalleNuevo->baja=0;
        $DetalleNuevo->save();
        return  redirect('/detalleLinea')->with('mensaje', 'Se habilito el Detalle de linea');

    }
}
