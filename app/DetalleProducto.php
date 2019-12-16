<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleProducto extends Model
{
    protected $table = 't005_detalle_producto';
    protected $fillable = ['f005_imei','f005_id_atributo','f005_valor'];
    protected $primaryKey = 'f005_id';
}
