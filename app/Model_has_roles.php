<?php

namespace App;

use App\User;
use App\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;


class Model_has_roles extends Pivot
{

	        protected $table = "model_has_roles";

    protected $fillable = ['role_id','model_type','model_id',];
    public $timestamps = false; 



}

//

