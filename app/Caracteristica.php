<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 't004_caracteristicas';
    protected $fillable = ['f004_descripcion'];
    protected $primaryKey = 'f004_id_atributo';
}
