<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoUsuario;

class tipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoUsuarios = DB::table('t007_tipos_usuarios')
        ->select('f007_id_tipo_usuario', 'f007_descripcion')
        ->paginate(10);
        return view('tipoUsuario.index', compact('tipoUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipoUsuario.create');
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
        //request()->validate([
            //'comu_nomb'=>'f004_descripcion|min:2'
        //]);

        $tipoUsuario = new TipoUsuario;
        //$flight->name = $request->name
        $tipoUsuario->f007_descripcion = $request->f007_descripcion;
        $tipoUsuario->save();
        return redirect()->route('tipoUsuario.index')->with('status','guardado');
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
        $tipoUsuario = TipoUsuario::findOrFail($id);
        return view('tipoUsuario.edit', compact('tipoUsuario'));
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
        $tipoUsuario = TipoUsuario::findOrFail($id);
        $tipoUsuario->fill($request->all());
        $tipoUsuario->save();
        return redirect()->route('tipoUsuario.index')->with('status','actualizado');
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
        $tipoUsuario = TipoUsuario::findOrFail($id);
        $tipoUsuario->delete();
        return redirect()->route('tipoUsuario.index')->with('status','eliminado');
    }
}
