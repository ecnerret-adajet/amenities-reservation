<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tenant extends Model
{
    protected $fillable = [
    	'first_name',
    	'middle_name',
    	'last_name',
    	'age',
    	'birthday',
    	'phone_num',
    	'telephone_num',
        'availability'

    ];

    protected $dates = [
    	'birthday',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' .$this->last_name;
    }

    public function setBirthdayAttribute($date)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function getBirthdayAttribute($date)
    {
        return new Carbon($date);
    }

    /* tenants list */

    public function owners()
    {
        return $this->belongsToMany('App\Owner')->withTimestamps();
    }

    public function getOwnerListAttribute()
    {
        return $this->owners->lists('id')->all();
    }



      /*list for amenities */
    public function amenities()
    {
        return $this->belongsToMany('App\Amenity');
    }


}
