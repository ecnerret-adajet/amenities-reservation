<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function rooms()
    {
    	return $this->belongsToMany('App\Room');
    }

    public function amenities()
    {
    	return $this->belongsToMany('App\Amenity');
    }
}
