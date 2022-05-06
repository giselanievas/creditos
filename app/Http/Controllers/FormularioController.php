<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'consulta' => 'required',
     
        ]);
        
       
        dd($request);
/*         $nombre = $request->input('nombre');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $consulta = $request->input('consulta');

        return view('formulario' , [ 'nombre' => $nombre , 'email' =>$email, 'telefono'=> $telefono, 'consulta' => $consulta ]);
     
         */
    }
}





