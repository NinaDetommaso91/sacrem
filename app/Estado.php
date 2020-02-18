<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
   protected $table = "estados";
   protected $fillable = ['nombre','paises_id'];//

  public function pais(){
    return $this->hasMany('App\Pais');
}

}
