<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    //
    protected $table = 't009_tipos_documentos';
    protected $fillable = ['f009_descripcion'];
    protected $primaryKey = 'f009_id_tipo_documento';
}
