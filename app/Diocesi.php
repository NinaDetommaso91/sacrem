<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diocesi extends Model
{
    protected $table = "diocesis";
   protected $fillable = ['nombre','estado_id'];//  //
}
