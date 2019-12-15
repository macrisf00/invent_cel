<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Caracteristica;

class caracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristicas = DB::table('t004_caracteristicas')
                    //->join('tb_municipio','c.muni_codi','=','tb_municipio.muni_codi')
                    ->select('f004_id_atributo','f004_descripcion')
                    ->paginate(10); //pagunacion
        return view('caracteristica.index', compact('caracteristicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$municipios = Municipio::orderBy('muni_nomb')->get();
        return view('caracteristica.create');
        //return view('caratereristia.create',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caracteristica = new Caracteristica;
        //$flight->name = $request->name
        $caracteristica->f004_descripcion = $request->f004_descripcion;
        $caracteristica->save();
        return redirect()->route('caracteristica.index')->with('status','guardado');
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
        $caracteristica = Caracteristica::findOrFail($id);
        $caracteristica->fill($request->all());
        $caracteristica->save();
        return redirect()->route('caracteristica.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caracteristica = Caracteristica::findOrFail($id);
        $caracteristica->delete();
        return redirect()->route('caracteristica.index')->with('status','eliminado');
    }
}
