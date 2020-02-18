<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DatosA; 


class Especialidad extends Model
{
   
 protected $table = "especialidads";
 protected $fillable = ['especialidad'];// 

	 public function datosA() {
    	return $this->belongsToMany('App\DatosA');//
     }//
}
