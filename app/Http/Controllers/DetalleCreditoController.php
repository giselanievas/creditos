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
        $min=intval($request['cDesde']) + 1;
        $request->validate([
            
            'LineaCredito' => 'required',
            'cDesde' => 'required',
            'cHasta' => 'required |numeric| min:'.$min,

        ]);
         
        $DetalleNuevo = new DetalleLineaCredito;
        $DetalleNuevo->lineaCredito_ID = $request->LineaCredito;
        $DetalleNuevo->coeficienteDesde = $request->cDesde;
        $DetalleNuevo->coeficienteHasta = $request->cHasta;
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
        $min=intval($request['cDesde']) + 1;
        $request->validate([
            
            'LineaCredito' => 'required',
            'cDesde' => 'required',
            'cHasta' => 'required |numeric| min:'.$min,

        ]);
        $DetalleNuevo = DetalleLineaCredito::find($id);
        $DetalleNuevo->lineaCredito_ID = $request->LineaCredito;
        $DetalleNuevo->coeficienteDesde = $request->cDesde;
        $DetalleNuevo->coeficienteHasta = $request->cHasta;
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
