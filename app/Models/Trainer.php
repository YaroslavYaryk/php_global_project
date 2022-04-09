<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Trainer extends Model
{
	public function place(){
		
		return $this->belongsTo(Place::class, 'place_id');
		
	}
}
