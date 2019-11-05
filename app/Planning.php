<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
   protected $guarded = [];
   public function planninggroup(){
        return $this->hasOne('App\Planninggroup');
   }
}
