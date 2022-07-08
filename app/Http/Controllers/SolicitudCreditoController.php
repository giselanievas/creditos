<?php

namespace App\Http\Controllers;

use App\Mail\SolicitudDeCreditos;
use Illuminate\Http\Request;

class SolicitudCreditoController extends Controller
{
    public function store(Request $request)
    {
        $msg = $request->validate([
            
            'telefono' => 'required',
            'email' => 'required',
            'fecha' => 'required',
            'marca' => 'required',
            'linea' => 'required',
            'modelo' => 'required',
            'valor' => 'required',
            'monto' => 'required',
            'observaciones' => 'required',
     
        ]);

        Mail::to('giselanievas21@hotmail.com')->send(new SolicitudDeCreditos($msg));

}
}



