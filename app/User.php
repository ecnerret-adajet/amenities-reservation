<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
     use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* owner list */


    public function owners()
    {
        return $this->hasMany('App\Owner');
    }

    public function tenants()
    {
        return $this->hasMany('App\Tenant');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function amenities()
    {
        return $this->hasMany('App\Amenity');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }

    public function grants()
    {
        return $this->hasMany('App\Grant');
    }

}
