<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UsuarioRol;

class usuarioRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarioRoles = DB::table('t014_usuario_rol as t014')
                    ->join('t008_usuarios','t014.f014_id_usuario','=','t008_usuarios.f008_id_usuario')
                    ->join('t013_roles','t014.f014_id_rol','=','t013_roles.f013_id_rol')
                    ->select('t014_id','t014_id_usuario','t014_id_rol','t008_usuarios.f008_numero_doc','t013_roles.f013_descripcion')
                    ->paginate(10);
        return view('usuarioRol.index', compact('usuarioRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $usuarioRoles = UsuarioRol::orderBy('f008_numero_doc')->get();
        return view('usuarioRol.create', compact('usuarioRoles'));
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
        $usuarioRol = new UsuarioRol;
        $usuarioRol->f014_id_usuario = $f014_id_usuario;
        $usuarioRol->f014_id_rol = $request->f014_id_rol;
        $usuarioRol->save();
        return redirect()->route('usuarioRol.index')->with('status','guardado');
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
        $usuarioRol = UsuarioRol::findOrFail($id);
        $usuarios = Usuario::all();
        $roles = Rol::all();
        return view('usuarioRol.edit', compact('usuarioRol','usuarios','roles'));
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
        $usuarioRol = UsuarioRol::findOrFail($id);
        $usuarioRol->fill($request->all());
        $usuarioRol->save();
        return redirect()->route('usuarioRol.index')->with('status','actualizado');
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
        $usuarioRol = UsuarioRol::findOrFail($id);
        $usuarioRol->delete();
        return redirect()->route('usuarioRol.index')->with('status','eliminado');
    }
}
