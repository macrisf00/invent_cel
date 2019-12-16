<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Local;

class localController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locales = DB::table('t010_locales')
                    //->join('tb_municipio','c.muni_codi','=','tb_municipio.muni_codi')
                    ->select('f010_id_local','f010_nombre','f010_pais','f010_departamento','f010_ciudad')
                    ->paginate(10); //pagunacion
        return view('local.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('local.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'f010_nombre'=>'required|min:2',
            'f010_pais'=>'required|min:2',
            'f010_departamento'=>'required|min:2',
            'f010_ciudad'=>'required|min:2'

        ]);

        $local = new Local;
        //$flight->name = $request->name
        $local->f010_nombre = $request->f010_nombre;
        $local->f010_pais = $request->f010_pais;
        $local->f010_departamento = $request->f010_departamento;
        $local->f010_ciudad = $request->f010_ciudad;
        $local->save();
        return redirect()->route('local.index')->with('status','guardado');
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
        $local = Local::findOrFail($id);
        return view('local.edit', compact('local'));
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
        $local = Local::findOrFail($id);
        $local->fill($request->all());
        $local->save();
        return redirect()->route('local.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);
        $local->delete();
        return redirect()->route('local.index')->with('status','eliminado');
    }
}
