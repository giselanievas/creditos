<?php

namespace App\Http\Controllers;
use App\Mail\MensajedeFormulario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FormularioController extends Controller
{
    public function store(Request $request)
    {
        $msg = $request->validate([
            
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'consulta' => 'required',
     
        ]);

        Mail::to('giselanievas21@hotmail.com')->send(new MensajedeFormulario($msg));

        return 'Mensaje enviado';

        

    }
}





