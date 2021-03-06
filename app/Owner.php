<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Owner extends Model
{
    protected $fillable = [
    	'first_name',
    	'middle_name',
    	'last_name',
    	'birthday',
    	'phone_num',
    	'telephone_num',
        'avatar',
        'availability'
    ];

    protected $dates = [
    	'birthday'
    ];


    /* user belongs to department */

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* list grant user owner */
    public function grants(){
        return $this->hasMany('App\Grant');
    }

    /* set birthdate */

     public function setBirthdayAttribute($date)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function getBirthdayAttribute($date)
    {
        return new Carbon($date);
    }

    /* lists for rooms */
    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }

    /*list for amenities */
    public function amenities()
    {
        return $this->belongsToMany('App\Amenity');
    }

    /* list tenants */
    public function tenants()
    {
        return $this->belongsToMany('App\Tenant');
    }

 
   
   	


}
