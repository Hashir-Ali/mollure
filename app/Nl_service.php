<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nl_service extends Model
{
    public function category(){
    	return $this->belongsTo('App\Category',  'category_id', 'id');
    }

    public function prof_detail(){
    	return $this->belongsTo('App\Professional',  'prof_id', 'id');
    }
}
