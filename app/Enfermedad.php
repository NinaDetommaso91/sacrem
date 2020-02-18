<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
   public $table = "enfermedads";
    protected $fillable=['enfermedad','idtipo'];//
} //

