<?php
 
namespace App;

use App\Role;
use App\Model_has_roles;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable

{
use Notifiable;

protected $fillable = [
'name', 'email', 'password',
];
protected $hidden = [
        'password', 'remember_token',
    ];

	      public function roles()
	 {
	 return $this->belongsToMany('App\Role');
	 // Si el nombre de la tabla es diferente a lo predeterminado o el ID de la tabla tiene otro nombre.
	 

     return $this->belongsToMany('App\Role', 'user_roles')
                    ->withPivot('create', 'read','update', 'delete');
    }

		public function AuthorizeRoles($roles){
			if ($this->hasAnyRole($roles)) {
				return true;	}
			abort(401,'no autorizado');
		}

}
