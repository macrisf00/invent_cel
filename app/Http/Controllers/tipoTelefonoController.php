<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoTelefono;

class tipoTelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoTelefonos = DB::table('t011_tipos_telefonos')
        ->select('f011_id_tipo_telefono', 'f011_descripcion')
        ->paginate(10);
        return view ('tipoTelefono.index', compact('tipoTelefonos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipoTelefono.create');
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
        $tipoTelefono = new TipoTelefono;
        $tipoTelefono->f011_descripcion = $request->f011_descripcion;
        $tipoTelefono->save();
        return redirect()->route('tipoTelefono.index')->with('status', 'Guradado');
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
        $tipoTelefono = TipoTelefono::findOrFail($id);
        return view('tipoTelefono.edit', compact('$tipoTelefono'));
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
        $tipoTelefono = TipoTelefono::findOrFail($id);
        $tipoTelefono->fill($request->all());
        $tipoTelefono->save();
        return redirect()->route('tipoTelefono.index')->with('status','Actualizado');
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
        $tipoTelefono = TipoTelefono::findOrFail($id);
        $tipoTelefono->delete();
        return redirect()->route('tipoTelefono.index')->with('status', 'Eliminado');
    }
}
