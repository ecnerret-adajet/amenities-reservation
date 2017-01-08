<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Room extends Model
{
    protected $fillable = [
    		'name',
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

    /* list all builidng name */

    public function buildings()
    {
        return $this->belongsToMany('App\Building')->withTimestamps();
    }

    public function getBuildingListAttribute()
    {
        return $this->buildings->pluck('id')->all();
    }

    /*list all floors  */
    public function floors()
    {
        return $this->belongsToMany('App\Floor')->withTimestamps();
    }

    public function getFloorListAttribute()
    {
        return $this->floors->pluck('id')->all();
    }

    /* list all unit per floor */
    public function units()
    {
        return $this->belongsToMany('App\Unit')->withTimestamps();
    }

    public function getUnitListAttribute()
    {
        return $this->units->pluck('id')->all();
    }

    


}
