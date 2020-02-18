<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DatosA; 


class Nivelint extends Model
{
    
 protected $table = "nivelints";
   protected $fillable = ['nivel'];//


    public function datosp() {
       return $this->belongsToMany('App\Datosp');//
       }

}
