<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producto;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = DB::table('t003_productos as p')
                    //->join('tb_municipio','c.muni_codi','=','tb_municipio.muni_codi')
                    ->select('p.f003_imei','p.f003_referencia','p.f003_precio_compra','p.f003_precio_venta','p.f003_iva','p.f003_descuento')
                    ->paginate(10); //pagunacion
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
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
            'f003_imei'=>'required|min:5',
            'f003_referencia'=>'required'
            

        ]);

        $producto = new Producto;
        //$flight->name = $request->name
        $producto->f003_imei = $request->f003_imei;
        $producto->f003_referencia = $request->f003_referencia;
        $producto->f003_precio_compra = $request->f003_precio_compra;
        $producto->f003_precio_venta = $request->f003_precio_venta;
        $producto->f003_iva = $request->f003_iva;
        $producto->f003_descuento = $request->f003_descuento;
        $producto->save();
        return redirect()->route('producto.index')->with('status','guardado');
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
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
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
        $producto = Producto::findOrFail($id);
        $producto->fill($request->all());
        $producto->save();
        return redirect()->route('producto.index')->with('status','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('status','eliminado');
    }
}
