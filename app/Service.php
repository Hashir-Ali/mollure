<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{  
    protected $fillable = [
       
        'service_name', 'duration', 'price_type', 'price', 'discount', 'discount_type','discount_amount',
    ];
    public function category(){
    	return $this->belongsTo('App\Category',  'category_id', 'id');
    }

    public function prof_detail(){
    	return $this->belongsTo('App\Professional',  'prof_id', 'id');
    }
}
