<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 't003_productos';
    protected $fillable = ['f003_referencia','f003_precio_compra','f003_precio_venta','f003_iva','f003_descuento'];
    protected $primaryKey = 'f003_imei';
}
