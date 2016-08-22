<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
    	'name',
    	'charges',
    	'no_guest',
    	'amount_due',
    	'remarks',
    ];

    /* user belongs to department */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* list amenities */
    public function amenities()
    {
    	return $this->belongsToMany('App\Amenity');
    }
}
