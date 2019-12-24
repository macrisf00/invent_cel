<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    //
    protected $table = 't007_tipos_usuarios';
    protected $fillable = ['f007_descripcion'];
    protected $primaryKey = 'f007_id_tipo_usuario';
}
