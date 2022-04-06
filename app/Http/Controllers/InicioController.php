<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view('inicio');
    }

    public function validado(){
        Auth::logout();
        return view('emails.validado');
    }
}
