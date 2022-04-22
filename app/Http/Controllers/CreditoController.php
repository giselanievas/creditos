<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoLinea;
class CreditoController extends Controller
{
    public function index(){
        $datos=[];
        $datos=TipoLinea::all();
        return view('lineaCreditos.tipoDeLinea',compact('datos'));
    }

    public function agregar(Request $request){
        $request->validate([
            
            'descripcion' => 'required'
        ]);
         
        $tipoNuevo = new TipoLinea;
        $tipoNuevo->descripcion = $request->descripcion;

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
        $tipoNuevo->delete();
        return  redirect('/tipodelinea')->with('mensaje', 'Tipo de Linea Eliminada!');

    }

}
