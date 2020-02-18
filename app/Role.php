<?php

namespace App;


use App\User;
use App\Model_has_roles;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
        protected $table = "roles";
   protected $fillable = ['name'];// 

	 public function users()
    {
        return $this->belongsToMany('App\User');
        // Si el nombre de la tabla es diferente a lo predeterminado o el ID de la tabla tiene otro nombre.
     
    }
    
     

	}
 