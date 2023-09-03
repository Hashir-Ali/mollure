<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prof_team_member extends Model
{

	public function get_availablity(){
		return $this->hasMany('App\Team_mem_availability','team_member','id');
	}
    public function get_blocked_time(){
        return $this->hasMany('App\Blocked_Time','team_member','id');
    }
}
