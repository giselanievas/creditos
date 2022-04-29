<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
use App\Models\lineaCredito;    
use App\Models\DetalleLineaCredito;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class DetalleCreditoController extends Controller
{
    public function index(){
        $datos=[];
        $datos=DetalleLineaCredito::all();
    
        return view('lineaCreditos.detalleLineasCreditos',compact('datos'));
    }
    public function agregar(){
        $lineaCredito=lineaCredito::all();
        return view('lineaCreditos.agregarDetalleLinea', compact('lineaCredito'));
    }
    public function guardar(Request $request){
        $min=intval($request['coeficienteDesde']) + 1;
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
        $lineaCredito=lineaCredito::where('id','!=',$dato->lineaCredito_ID)->get();
        return view('lineaCreditos.editarDetalleLinea', compact('dato','lineaCredito'));

    }
    public function update(Request $request, $id){
        $min=intval($request['coeficienteDesde']) + 1;
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
