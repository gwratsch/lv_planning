<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planninggroup extends Model
{
    protected $guarded = [];
        
    public function planning(){
        return $this->belongsTo('App\Planning');
    }
}
