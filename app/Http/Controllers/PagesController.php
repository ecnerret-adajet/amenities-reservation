<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\Tenant;
use App\Owner;
use App\Amenity;
use App\Reservation;

class PagesController extends Controller
{
    public function dashboard()
    {
    	$rooms = Room::all();
    	$tenants = Tenant::all();
    	$amenities = Amenity::all();
    	$owners = Owner::all();
    	return view('dashboard', compact('rooms','owners','tenants','amenities'));
    }
}
