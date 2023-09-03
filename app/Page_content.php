<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page_content extends Model
{
    public function get_sub_content(){
    	return $this->hasMany('App\Page_content_tran','section_id','id');
    }
}
