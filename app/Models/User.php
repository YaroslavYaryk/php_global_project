<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	public function plan(){
		
		return $this->belongsTo(Price::class, 'plan_id');
		
	}

	public function place(){
		
		return $this->belongsTo(Place::class, 'place_id');
		
	}

	public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
