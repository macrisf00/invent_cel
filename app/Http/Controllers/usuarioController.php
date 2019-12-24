<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\TipoUsuario;
use App\TipoDocumento;
use App\TipoTelefono;
use App\Local;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('t008_usuarios as u')
        ->join('t007_tipos_usuarios','u.f008_id_tipo_usuario','=','t007_tipos_usuarios.f007_id_tipo_usuario')
        ->join('t009_tipos_documentos','u.f008_id_tipo_documento','=','t009_tipos_documentos.f009_id_tipo_documento')
        ->join('t011_tipos_telefonos','u.f008_id_tipo_telefono','=','t011_tipos_telefonos.f011_id_tipo_telefono')
        ->join('t010_locales','u.f008_id_local','=','t010_locales.f010_id_local')
        ->select('u.f008_id_usuario','t007_tipos_usuarios.f007_descripcion','u.f008_nombres','u.f008_apellidos',
            't009_tipos_documentos.f009_descripcion','u.f008_numero_doc','t011_tipos_telefonos.f011_descripcion',
            'u.f008_numero_tel','t010_locales.f010_nombre')
        ->paginate(10); //pagunacion
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }
}
