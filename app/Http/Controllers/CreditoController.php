<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
class CreditoController extends Controller
{
    public function index(){
        $datos=[];
        $datos=TipoLinea::where('baja','=',0)->get();
        $deBaja=TipoLinea::where('baja','=',1)->get();
        return view('lineaCreditos.tipoDeLinea',compact('datos','deBaja'));
    }

    public function agregar(Request $request){
        $request->validate([
            
            'descripcion' => 'required'
        ]);
         
        $tipoNuevo = new TipoLinea;
        $tipoNuevo->descripcion = $request->descripcion;
        $tipoNuevo->baja = 0;

        $tipoNuevo->save();

        return redirect('/tipodelinea')->with('mensaje', 'Tipo de Linea  Guardada');

    }

    public function editar($id){
        $dato =TipoLinea::findOrFail($id);
        return view('lineaCreditos.editarTipoDeLinea', compact('dato'));

    }
    public function update(Request $request, $id){
        $request->validate([
            
            'descripcion' => 'required'
        ]);
        $tipoNuevo = TipoLinea::find($id);
        $tipoNuevo->descripcion = $request->descripcion;

        $tipoNuevo->save();
        return  redirect('/tipodelinea')->with('mensaje', 'Tipo de Linea editada!');
    
    }
    public function eliminar($id){
        $tipoNuevo = TipoLinea::findOrFail($id);

        $tipoNuevo->baja=1;
        $tipoNuevo->save();
        return  redirect('/tipodelinea')->with('mensaje', 'Se dio de baja el tipo de  linea');

    }
    public function habilitar($id){
        $tipoNuevo = TipoLinea::findOrFail($id);

        $tipoNuevo->baja=0;
        $tipoNuevo->save();
        return  redirect('/tipodelinea')->with('mensaje', 'Se habilito el tipo de linea');

    }

}
