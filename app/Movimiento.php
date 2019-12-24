<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table ='t002_movimientos';
    protected $fillable =['f002_imei','f002_fecha_entrada','f002_id_asesor_e','f002_id_local_e','f002_id_proveedor',
    'f002_fecha_salida','f002_id_asesor_s','f002_id_local_s'];
    protected $primarykey = 'f002_id_movto';

}
