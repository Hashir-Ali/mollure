<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = 'municipality';

    public function provinces(){
    	return $this->hasMany('App\Province','municipality_id','id');
    }
}
