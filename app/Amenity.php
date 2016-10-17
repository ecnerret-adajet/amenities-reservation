<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Amenity extends Model
{

	protected $table = 'amenities';

	protected $fillable = [
			'date_apply',
			'tower_no',
			'unit_no',
			'name_occupants',
			'name_guest',
			'conforme',
			'conforme_date',
			'approved_by',
			'date_approved'
	];

	protected $dates = [
			'date_apply',
			'conforme_date',
			'date_approved'
	];

	  /* user belongs to department */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }


	/* set date_apply */

     public function setDateApplyAttribute($date)
    {
        $this->attributes['date_apply'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /* set date_apply */

    public function setConformeDateAttribute($date)
    {
        $this->attributes['conforme_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }

     /* set date_apply */

    public function setDateApprovedAttribute($date)
    {
        $this->attributes['date_approved'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    public function owners(){
        return $this->belongsToMany('App\Owner')->withTimestamps();
    }
    public function getOwnerListAttribute()
   	{
   		return $this->owners->lists('id')->all();
   	}

   	public function tenants()
   	{
   		return $this->belongsToMany('App\Tenants')->withTimestamps();
   	}

   	public function getTenantListAttribute()
   	{
   		return $this->tenants->lists('id')->all();
   	}

   	public function reservations()
   	{
   		return $this->belongsToMany('App\Reservation')->withTimestamps();
   	}

   	public function getReservationListAttribute()
   	{
   		return $this->reservations->lists('id')->all();
   	}

    /* list all building availabilty */

    public function buildings()
    {
      return $this->belongsToMany('App\Building')->withTimestamps();
    }

     public function getBuildingListAttribute()
     {
      return $this->buildings->lists('id')->all();
     }





}
