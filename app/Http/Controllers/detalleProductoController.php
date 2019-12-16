<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DetalleProducto;
use App\Producto;
use App\Caracteristica;


class detalleProductoController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleProductos = DB::table('t005_detalle_producto as d')
        ->join('t003_productos','d.f005_imei','=','t003_productos.f003_imei')
        ->join('t004_caracteristicas','d.f005_id_atributo','=','t004_caracteristicas.f004_id_atributo')
        ->select('d.f005_id','t003_productos.f003_imei','t004_caracteristicas.f004_descripcion','d.f005_valor')
        ->paginate(10); //pagunacion
        return view('detalleProducto.index', compact('detalleProductos'));
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
        return view('detalleProducto.create',compact('productos','caracteristicas'));
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
            'f005_imei'=>'required',
            'f005_id_atributo'=>'required',
            'f005_valor'=>'required'

        ]);
        //
        $detalleProducto = new DetalleProducto;
        //$flight->name = $request->name
        $detalleProducto->f005_imei = $request->f005_imei;
        $detalleProducto->f005_id_atributo = $request->f005_id_atributo;
        $detalleProducto->f005_valor = $request->f005_valor;
        $detalleProducto->save();
        return redirect()->route('detalleProducto.index')->with('status','guardado');

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
        $detalleProducto = DetalleProducto::findOrFail($id);
        $productos = Producto::all();
        $caracteristicas = Caracteristica::all();
        return view('detalleProducto.edit', compact('detalleProducto','productos','caracteristicas'));
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
        $detalleProducto = DetalleProducto::findOrFail($id);
        $detalleProducto->fill($request->all());
        $detalleProducto->save();
        return redirect()->route('detalleProducto.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleProducto = DetalleProducto::findOrFail($id);
        $detalleProducto->delete();
        return redirect()->route('detalleProducto.index')->with('status','eliminado');
    }
}
