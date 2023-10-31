<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listadoAPI()
{
    $usuarios = User::all(); 

   return response()->json($usuarios);

}

public function buscarAPI (Request $request)
{
    $query = $request->input('query');

    $users = User::where('name', 'like', "%$query%")
                    ->orWhere('email', 'like', "%$query%")
                    ->orWhere('localidad', 'like', "%$query%")
                    ->get();

    return response()->json($users);
}


public function borrarApi($id){
    $users = User::find($id);
    if($users){
        $users->delete();
    } else{
        dd('el users no existe');
    }
}



public function  createApi(Request $request){
    $users = new User();
    $users->name = $request->input('name');
    $users->email = $request->input('email');
    $users->concesionaria = $request->input('concesionaria');
    $users->localidad = $request->input('localidad');
    $users->telefono = $request->input('telefono');
    $users->password = Hash::make($request->input('password'));
    $users->confirmed = $request->input('confirmed');
    $users->save();
    return response()->json($users, 201);
  

}

}
