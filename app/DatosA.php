<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Idioma;


class DatosA extends Model
{
    protected $table = "datos_as";
   protected $fillable = ['cedula','nivel','especialidad','idioma','Curtal','habilidades'];//

  public function idioma(){
    return $this->hasMany('App\Idioma'); //
    }
}
