<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Movimiento;
use App\Usuarios;

class movimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimiento = DB::table('t002_movimientos as m')
        ->join('t003_productos','m.f002_imei','=','t003_productos.f003_imei')
        ->join('t008_usuarios','m.f002_id_asesor_e','=','t008_usuarios.f008_id_usuario')
        ->join('t008_usuarios','m.f002_id_asesor_s','=','t008_usuarios.f008_id_usuario')
        ->join('t008_usuarios','m.f002_id_proveedor','=','t008_usuarios.f008_id_usuario')
        ->join('t010_locales','m.f002_id_local_e','=','t010_locales.f010_id_local')
        ->join('t010_locales','m.f002_id_local_s','=','t010_locales.f010_id_local')
        ->select('f002_id_movto','f002_imei','f002_fecha_entrada','f002_id_asesor_e','f002_id_local_e','f002_id_proveedor',
                 'f002_fecha_salida','f002_id_asesor_s','f002_id_local_s')
        ->paginate(10); //pagunacion
        return view('movimiento.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::orderBy('f003_imei')->get();
        $caracteristicas = Caracteristica::orderBy('f004_descripcion')->get();
        return view('movimiento.create',compact('productos','movimientos'));
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
            'f002_imei'=>'required',
            'f002_fecha_entrada'=>'required',
            'f002_id_asesor_e'=>'required'

        ]);
        //
        $movimiento = new Movimiento;
        //$flight->name = $request->name
        $movimiento->f005_imei = $request->f005_imei;
        $movimiento->f005_id_atributo = $request->f005_id_atributo;
        $movimiento->f005_valor = $request->f005_valor;
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status','guardado');

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
        $Movimiento = Movimiento::findOrFail($id);
        $productos = Producto::all();//inner join
        $caracteristicas = Caracteristica::all();//inner join
        return view('movimiento.edit', compact('movimiento','productos','caracteristicas'));
      
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
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->fill($request->all());
        $movimiento->save();
        return redirect()->route('movimiento.index')->with('status','actualizado');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->delete();
        return redirect()->route('movimiento.index')->with('status','eliminado');
    
    }
}
