<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso_datos_is extends Model
{
    protected $table = "curso_datos_is";

         protected $fillable = ['cedulaS','curso_id','FechaRea','lugar','status']; //
}
