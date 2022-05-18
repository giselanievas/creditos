<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\SessionManager;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::LOGUEADO;


    /**
     * 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('guest')->except('logout');
    }
   
       public function login(Request $request, SessionManager $sessionManager){
         $user = User::where('email',$request->email)->first();
        
         if ($user){
            if($user->confirmed != 1){
                $sessionManager->flash('msg','La cuenta no fue confirmada');
                 return redirect('/login');
             }else{
               
                $this->middleware('guest')->except('logout');
                if (Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'confirmed' => 1)))
                {
                      //  Auth::login($user);
                      // $sessionManager->flash('msg','validado');
                       return redirect('/ingreso');
                       // return redirect('/');
                } $sessionManager->flash('msg','La clave ingresada es incorrecta');
                  return redirect('/login');
               
             }
         }else{
            $sessionManager->flash('msg','La cuenta no existe');
            return redirect('/login');
         }
            
    }      

    
}
