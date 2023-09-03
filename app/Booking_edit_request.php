<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_edit_request extends Model
{
    
    public function new_bk_team_member(){
    	return $this->belongsTo('App\Prof_team_member','team_member','id');
    }

    public function new_bk_service(){
    	return $this->belongsTo('App\Service','service_id','id');
    }
}
