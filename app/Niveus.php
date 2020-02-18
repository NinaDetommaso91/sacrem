<?php

namespace App;
use\App\User;

use Illuminate\Database\Eloquent\Model;

class Niveus extends Model
{
    	   protected $table = "niveus";

protected $fillable = ['usuario', 'nivel',];
//

public function user()
{

  return $this->belongsTo('App\User');
       $pro= User::with('users')->get();   //

}
   //

}
