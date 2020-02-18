<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Nacionalidad;

class Datosp extends Model
{
	    protected $table = "datosp";

       protected $fillable = ['cedula','pasaporte','nombre','apellido','sexo','sangre','fechanac','paisnac','estacivil','tel','telc','municipio','direccion','banco','numcta','tallac','tallap','tallaz','nombree','apellidoe','tele','telce','photo'];//  //
//
   public function Nacionalidad() {
    return $this->belongsToMany('App\Nacionalidad'); 
}
   }

