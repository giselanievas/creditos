<?php

namespace App\Http\Controllers;
use App\Models\DbImagen; 
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('linea_de_creditos.agregar_grilla');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $db=new DbImagen();
        $imagen=$request->file('imagen');
        $descripcion=time().'.'.$imagen->getClientOriginalExtension();
        $uploadSuccess = $request->file('imagen')->store('public/img');
        $url = Storage::url($uploadSuccess);
        $db->imagen =  $url;
        $db->descripcion = $request->descripcion;
       



/*         $destino=public_path('imagen');
        $request->imagen->move($destino,$descripcion);
        $db::create([
            "descripcion"=>$request->descripcion,
            "imagen"=>'/imagen'.'/'.$descripcion

        ]); */
        $db->save();
        return redirect()->route('grillaDeCredito')->with('mensaje','Grilla Agregada Correctamente');


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
    public function show()
    {
        $db=new DbImagen();
        $grillas=$db::all();
        return view('linea_de_creditos.ver_grilla', compact('grillas'));
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
           $grillaborrar = DbImagen::findOrFail($id);
        /*    Storage::delete('public/'.$grillaborrar->imagen); */
           unlink(public_path($grillaborrar->imagen)); 
           $grillaborrar->delete();
           return redirect()->route('verGrillaDeCredito')->with('mensaje','Se dio de Baja la Grilla');
    }
}
