<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Grant extends Model
{
    protected $fillable = [
    	'confrim',
    	'confirm_date'
    ];

    protected $dates = [
    	'confirm_date'
    ];

    public function setConfirmDateAttribute($date){
    	$this->attributes['confirm_date'] = Carbon::parse($date);
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }


}
