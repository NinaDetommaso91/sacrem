<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
   public $table = "cursos";
    protected $fillable=['curso'];//

 //
public function datosA() {
    	return $this->belongsToMany('App\DatosA');//
    }
}
