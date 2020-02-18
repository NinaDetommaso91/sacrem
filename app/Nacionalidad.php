<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Datosp;

class Nacionalidad extends Model
{
     protected $table = "nacionalidades";
   protected $fillable = ['nombre','pais_id'];//

    public function datosp() {
       return $this->belongsToMany('App\Datosp');
    }
}
