<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTelefono extends Model
{
    //
    protected $table = 't011_tipos_telefonos';
    protected $fillable = ['f011_descripcion'];
    protected $primarykey = 'f011_id_tipo_telefono';
}
