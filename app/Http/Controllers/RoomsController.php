<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Owner;
use App\Room;
use App\Tenant;
use App\User;
use Carbon\Carbon;
use App\Building;
use Image;
use App\Floor;
use App\Unit;
use Flashy;

class RoomsController extends Controller
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
        $rooms = Room::latest()->get();
        return view('rooms.index', compact(
            'rooms',
            'user'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::pluck('first_name','id');
        $buildings = Building::pluck('name','id');

        $floors = Floor::where('availability',0)->pluck('name','id');


        $units = Unit::whereHas('floor', function($q){
            $q->where('id', 3);
        })->pluck('unit_no','id');

        

        
        
        return view('rooms.create', compact('owners','buildings','floors','units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request)
    {
        $room = Auth::user()->rooms()->create($request->all());  
        $room->owners()->attach($request->input('owner_list'));
        $room->buildings()->attach($request->input('building_list'));
        $room->floors()->attach($request->input('floor_list'));
        $room->units()->attach($request->input('unit_list'));

        $rooms = Room::all();
        foreach($rooms as $room){
            foreach($room->floors as $floor)
            {
                $floor_id = $floor->id;
             }
            foreach($room->units as $unit)
            {
                $unit_id = $unit->id;
             }      
         }

        $floor = Floor::findOrFail($floor_id);
        $floor->availability = 1;
        $floor->save();

        $unit = Unit::findOrFail($unit_id);
        $unit->availability = 1;
        $unit->save();

        flashy()->success('Successfully added a room!');
         return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
       $owners = Owner::lists('first_name', 'id');
       $buildings = Building::lists('name','id');
        return view('rooms.edit', compact('owners','room','buildings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoomRequest $request, Room $room)
    {
        $room->update($request->all());

        $room->owners()->sync((!$request->input('owner_list') ? [] : $request->input('owner_list')));

        
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect('home');
    }
}
