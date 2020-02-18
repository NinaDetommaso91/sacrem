<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\Pivot;

use Illuminate\Database\Eloquent\Model;

class Roleuser extends Pivot
{
      protected $table = "role_user";
   protected $fillable = ['user_id','role_id'];////
}
 