<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Datos_m_;

class Cargo extends Model
{
    public $table = "cargos"; 
    protected $fillable=['cargo'];//

      public function Datos_m_() {
       return $this->belongsToMany('App\Datos_m_');
    }
}

