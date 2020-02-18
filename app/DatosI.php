<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosI extends Model
{
    protected $table = "datos_is";

         protected $fillable = ['cedula','FechaIng','CodCarnet','ungido','Fechaung','Lugar','estaof','Observaciones']; //
}
