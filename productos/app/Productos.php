<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $fillable = array('nombre','referencia','precio','peso','categoria','stock','fechaCreacion','ultimaVenta');
}
