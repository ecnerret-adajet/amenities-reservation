<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Room extends Model
{
    protected $fillable = [
    		'name',
    		'floor_num',
    		'no_unit',
    		'building_num'
    ];

    /* list user */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* list all owners */

    public function owners()
    {
      return $this->belongsToMany('App\Owner')->withTimestamps();
    }
    
    public function getOwnerListAttribute()
    {
        return $this->owners->lists('id')->all();
    }

    


}
