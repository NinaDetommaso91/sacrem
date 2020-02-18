<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use App\DatosA; 

class Idioma extends Model
{
	   protected $table = "idiomas";
	   protected $fillable = ['idioma'];//



    public function datosA() {
    	return $this->belongsToMany('App\DatosA');//
    }
}