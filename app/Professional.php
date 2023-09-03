<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{   
    protected $fillable = [
       
        'legal_name','fixed_name', 'fixed_bio', 'fixed_pic', 'keyword_1', 'keyword_2', 'keyword_3','desire_pic','desire_bio','desire_name'
        ,'desire_keyword_1','desire_keyword_2','desire_keyword_3',
    ];
    public function profAddress(){
    	return $this->hasMany('App\Professional_address','prof_id','id');
    }

    public function prof_address() {
        return $this->profAddress()->where('status', 'active');
    }

    public function profFixLocation(){
    	return $this->hasMany('App\Fixed_location_salon','prof_id','id');
    }

    public function prof_fix_location() {
        return $this->profFixLocation()->where('status', 'active');
    }

    public function registration_docs() {
        return $this->hasMany('App\Professional_registration_doc','prof_id','id');
    }

    public function client_total_sale() {
        return $this->hasMany('App\Booking','user_id','id')->selectRaw('SUM(bookings.service_total_cost) as total_sale')->where('bookings.status','complete');
    }

    public function client_last_booking() {
        return $this->hasMany('App\Booking','user_id','id')->selectRaw('created_at as last_booking')->where('bookings.status','complete')->orderBy('created_at', 'desc')->take(1);
    }

    public function client_notes() {
        return $this->hasMany('App\Client_note','user_id','id')->select('note','id as tech_note_id')->where('client_notes.status','!=','remove')->orderBy('created_at', 'desc')->take(1);
    }

}
