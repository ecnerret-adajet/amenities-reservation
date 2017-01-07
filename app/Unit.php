<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fiilable = [
    	'unit_no',
    	'availability'
    ];

    public function rooms()
    {
    	return $this->belongsToMany('App\Room');
    }
}
