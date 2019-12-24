<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rol;

class rolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles= DB::table('t013_roles')
        ->select('t013_id_rol', 't013_descripcion', 'f013_crear', 'f013_eliminar', 'f013_editar', 'f013_consultar')
        ->paginate(10);
        return view ('rol.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = new Rol;
        $rol->f013_descripcion = $request->f013_descripcion;
        $rol->f013_crear = $request->f013_crear;
        $rol->f013_eliminar = $request->f013_eliminar;
        $rol->f013_editar = $request->f013_editar;
        $rol->f013_consultar = $request->f013_consultar;
        $rol->save();
        return redirect()->route('rol.index')->with('status', 'Guardado');
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
        $rol = Rol::findOrFail($id);
        return view ('rol.edit', compact('rol'));
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
        $rol = Rol::findOrFail($id);
        $rol->fill($request->all());
        $rol->save();
        return redirect()->route('rol.index')->with('status','Actualizado');
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
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return redirect()->route('rol.index')->with('status', 'Eliminado');
    }
}
