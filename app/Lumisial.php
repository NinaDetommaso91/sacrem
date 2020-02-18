<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lumisial extends Model
{
   protected $table = "lumisiales";
   protected $fillable = ['nombre','municipio_id'];// //
}
