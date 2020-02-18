<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Factory;
use App\model_has_roles;
use App\Role;
use App\User;

use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    

    use AuthenticatesUsers;
 
     

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
  




  }



public $GLOBALS['roles'] = something;(){

 $id = Auth::id(); //id usuario

             $roles=DB::table('role_user')
             ->where('role_user.user_id', '=', $id)
             ->select('role_id')->get();
                     return $this->roles();


}
            public function redirectPath($roles){
           
        if ($roles=='5') {
              return '5';            }
             if ($roles=='3') {
              return '3';
            }
             if ($roles=='1') {
              return '1';
            }
            else {
              return 'no';
            }



            }
 

    
}
