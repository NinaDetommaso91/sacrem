<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cargo;


class Datos_m_ extends Model
{
    protected $table = "datos_m";//

    protected $fillable = ['cedula','nombre','mision','HistorialMisional','observaciones','FechaAsig'];//  //

    
//
   public function Cargo() {
    return $this->belongsToMany('App\Cargo'); 
}


}
