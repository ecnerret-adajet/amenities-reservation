<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable = [
    	'name',
    	'availability'
    ];

	public function rooms()
	{
		return $this->belongsToMany('App\Room');
	}
}
