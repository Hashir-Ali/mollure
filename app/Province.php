<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	protected $table = 'provinces';

	 public function municipality(){
    	return $this->belongsTo('App\Municipality',  'municipality_id', 'id');
    }
}
