<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
   protected $table = "paises";
   protected $fillable = ['nombre'];//


   public function estado(){
    return $this->belongsTo('App\Estado');
}
}
