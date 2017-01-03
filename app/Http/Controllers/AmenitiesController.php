<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AmenityRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Amenity;
use Carbon\Carbon;
use App\Room;
use App\Owner;
use App\Tenant;
use App\User;
use App\Reservation;
use App\Building;

class AmenitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenities = Amenity::latest()->get();
        return view('amenities.index', compact('amenities','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservations = Reservation::lists('name','id');
        $owners = Owner::lists('first_name','id');
        // $buildings = Building::lists('name','id');
        return view('amenities.create', compact('reservations',
            'buildings',
            'owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AmenityRequest $request)
    {
        $amenity = Auth::user()->amenities()->create($request->all());

        $amenity->reservations()->attach((!$request->input('reservation_list') ? [] : $request->input('reservation_list')));
        $amenity->owners()->attach((!$request->input('owner_list') ? [] : $request->input('owner_list')));
        // $amenity->buildings()->attach((!$request->input('building_list') ? [] : $request->input('building_list')));

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Amenity $amenity)
    {
        $reservations = Reservation::all();
        $owners = Owner::all();
        return view('amenities.show', compact('amenity',
            'reservations',
            'owners'
            ));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenity $amenity)
    {
        return view('amenities.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AmenityRequest $request, Amenity $amenity)
    {
        $amenity->update($request->all());

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amenity $amenity)
    {
        $amenity->delete();
        return redirect('home');
    }
}
