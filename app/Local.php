<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 't010_locales';
    protected $fillable = ['f010_nombre','f010_pais','f010_departamento','f010_ciudad'];
    protected $primaryKey = 'f010_id_local';
}
