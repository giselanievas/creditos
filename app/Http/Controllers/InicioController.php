<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class InicioController extends Controller
{


    public function index(){
    
        return view('inicio');
    }

    public function registrado(){
        Auth::logout();
        return view('emails.registrado');
    }
    public function validado(){
      //  Auth::logout();
        return view('emails.validado');
    }
    public function validar($id){
               
        $usuario = User::where('id', $id)->first();
       
        if (! $usuario){
            
            return view('emails.no_encontrado');
        }else{
      
        $usuario->confirmed=true;
        $usuario->email_verified_at=carbon::now();
        $usuario->save();
            return view('emails.validado');
        }
    }
    


}
