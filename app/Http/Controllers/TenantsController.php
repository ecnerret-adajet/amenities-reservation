<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TenantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Owner;
use App\Room;
use App\Tenant;
use App\User;
use Image;
use Carbon\Carbon;
use Flashy;

class TenantsController extends Controller
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
        $tenants = Tenant::latest()->get();
        return view('tenants.index', compact(
            'tenants'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::lists('first_name','id');
        return view('tenants.create', compact('owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantRequest $request)
    {
        $tenant = Auth::user()->tenants()->create($request->all());  

        if($request->has('owner_list')){
            $tenant->owners()->attach($request->input('owner_list'));
        }

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('../img/tenants/' . $filename ) ); 
            $tenant->avatar = $filename;
            $tenant->save();
        }


     return redirect('tenants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {
        return view('tenants.show', compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        $tenants = Tenant::all();
        return view('tenants.edit', compact('tenant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TenantRequest $request, Tenant $tenant)
    {
        $tenant->update($request->all());
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        flashy()->success('Successfully deleted a tenant');
        return redirect('tenants');
    }
}
