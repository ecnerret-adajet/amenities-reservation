<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Carbon\Carbon;
use App\Grant;
use App\User;
use App\Owner;
use Flashy;
use DB;


class GrantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grants = Grant::orderBy('created_at','desc')->get();
        return view('grants.index', compact('grants','start_date','end_date'));
    }

    /**
     * search for authorize logs
     */
    public function logs(Request $request){
        $this->validate($request, [
           'start_date' => 'required',
            'end_date' => 'required'
        ]); 

        $start_date = $request->get('start_date');
         $end_date = $request->get('end_date');

        $grants = Grant::where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'>=',$start_date)
            ->where(DB::raw('DATE_FORMAT(created_at,"%Y-%m-%d")'),'<=',$end_date)
            ->get();

        return view('grants.index', compact('grants','start_date','end_date'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $grant = New Grant;
        $grant->confirm = 1;
        $grant->confirm_date = Carbon::now();
        $grant->owner()->associate($id);
        $grant->user()->associate(Auth::user());
        $grant->save();

        flashy()->success('Grant access succesfully');
        return redirect('owners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
