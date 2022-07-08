<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudDeCreditos;
use Illuminate\Http\Request;

class SolicitudCreditoController extends Controller
{
    public function store(Request $request,$cuil)
    {
      
        $msg = $request;
        $msg->cuil=$cuil;
       
        Mail::to('giselanievas21@hotmail.com')->send(new SolicitudDeCreditos($msg));
        return redirect('/ingreso')->with('apto', 'email');

}
}



