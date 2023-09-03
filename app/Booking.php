<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = ['book_date'];

    public function booking_trans(){
    	return $this->hasMany('App\Book_tran','book_id','id');
    }

    public function booking_trans_active(){
        return $this->hasMany('App\Book_tran','book_id','id')->where('status','new');
    }

    public function booking_photoshoot(){
    	return $this->hasMany('App\Photoshoot','book_id','id');
    }
    public function booking_message(){
    	return $this->hasMany('App\User_message','book_id','id');
    }
    /*public function booking_message(){
    	return $this->hasMany('App\User_message','book_id','id');
    }*/

    public function booking_professional(){
    	return $this->hasMany('App\Professional','id','prof_id');
    }

    public function edit_requests(){
        return $this->hasMany('App\Booking_edit_request','book_id','id')->orderBy('type')->orderBy('book_trans_id');
    }
    

}
