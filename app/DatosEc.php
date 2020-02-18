<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Ocupacion;

class DatosEc extends Model
{
    protected $table = "datos_ecs";

         protected $fillable = ['cedula','ocupacion','pdep','ingresom','vehiculo','condicionesVe','vivienda','condicionesVi'];// s

       public function ocupacion() {
     return $this->hasOne('App\Ocupacion');
    }
}
