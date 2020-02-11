<?php

namespace App\Http\Controllers;

use App\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Usuario']=Usuarios::paginate(6);
        return view('usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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
           $campos=[
               'Nombres'  => 'required|string|max:100',
               'Apellidos' => 'required|string|max:100',
               'Empresa' => 'required|string|max:100',
               'Cargo' => 'required|string|max:100',
               'Area_Visita' => 'required|string|max:100',
               'Anfitrion' => 'required|string|max:100',

           ];
           $Mensaje=["required"=> 'El :attribute es requerido'];
           
           $this->validate($request,$campos,$Mensaje);





        //$datosUsuarios=\request()->all();

        $datosUsuarios=request()->except('_token');

        Usuarios::insert($datosUsuarios);

        
        //return response()->json($datosUsuarios);
        return redirect('/usuarios')->with('Mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuarios=usuarios::findOrFail($id);

        return view('usuarios.edit',compact('usuarios'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios=request()->except(['_token','_method']);
        Usuarios::where('id','=',$id)->update($datosUsuarios);

        //$usuarios=usuarios::findOrFail($id);
        //return view('usuarios.edit',compact('usuarios'));

        return redirect('/usuarios')->with('Mensaje','Empleado editado con éxito');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuarios::destroy($id);

        return redirect('/usuarios')->with('Mensaje','Empleado eliminado con éxito');
    }
}
