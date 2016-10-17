<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Owner;
use App\Tenant;
use App\Room;
use App\Amenity;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $owners = Owner::all();
        $tenants = Tenant::all();

        return view('home', compact('rooms','owners','tenants'));
    }

    public function reports()
    {
        $amenities = Amenity::all();
        return view('reports', compact('amenities'));
    }

 public function getreport(Request $request)
    {
         $this->validate($request, [
           'start_date' => 'required',
            'end_date' => 'required'
        ]); 


    
         $start_date = $request->get('start_date');
         $end_date = $request->get('end_date');
       
        
        $amenities = Amenity::where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'>=',$start_date)
            ->where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'<=',$end_date)
            ->get();
        
        return view('reports', compact(
            'amenities',
            'end_date',
            'start_date'
        ));
    }
}
