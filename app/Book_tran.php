<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_tran extends Model
{
    //

	protected $fillable = ['start_time','team_member'];

    public function booking_team_member(){
    	return $this->belongsTo('App\Prof_team_member','team_member','id');
    }

    public function booking_service(){
    	return $this->belongsTo('App\Service','service_id','id');
    }

    public function booking_detail(){
    	return $this->belongsTo('App\Booking','book_id','id');
    }
}
