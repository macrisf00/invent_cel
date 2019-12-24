<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TipoDocumento;

class tipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoDocumentos= DB::table('t009_tipos_documentos')
        ->select('f009_id_tipo_documento', 'f009_descripcion')
        ->paginate(10);
        return view ('tipoDocumento.index', compact('tipoDocumentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('tipoDocumento.create');
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
        $tipoDocumento = new TipoDocumento;
        $tipoDocumento->f009_descripcion = $request->f009_descripcion;
        $tipoDocumento->save();
        return redirect()->route('tipoDocumento.index')->with('status', 'Guardado');
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
        $tipoDocumento = TipoDocumento::findOrFail($id);
        return view ('tipoDocumento.edit', compact('tipoDocumento'));
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
        $tipoDocumento = TipoDocumento::findOrFail($id);
        $tipoDocumento->fill($request->all());
        $tipoDocumento->save();
        return redirect()->route('tipoDocumento.index')->with('status','Actualizado');
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
        $tipoDocumento = TipoDocumento::findOrFail($id);
        $tipoDocumento->delete();
        return redirect()->route('tipoDocumento.index')->with('status', 'Eliminado');
    }
}
