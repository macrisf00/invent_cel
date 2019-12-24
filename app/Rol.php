<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 't013_roles';
    protected $fillable = ['f013_id_rol', 'f013_descripcion', 'f013_crear', 'f013_eliminar', 'f013_editar', 'f013_consultar'];
    protected $primarykey = 'f013_id_rol';
}
