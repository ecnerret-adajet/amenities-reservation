<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Owner;
use App\Tenant;
use App\Room;

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
}
