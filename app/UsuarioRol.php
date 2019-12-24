<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    //
    protected $table = 't014_usuario_rol';
    protected $fillable = ['f014_id_usuario','f014_id_rol'];
    protected $primaryKey = 'f014_id';
}
