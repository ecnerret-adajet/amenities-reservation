@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">{{$rooms->count()}}</span>
    <a href="{{url('rooms/create')}}">
   <i class="fa fa-user-plus" aria-hidden="true"></i> Add Rooms
   </a>
  </li>
  <li class="list-group-item">
    <span class="badge">{{$owners->count()}}</span>
    <a href="{{url('owners/create')}}">
   <i class="fa fa-user-plus" aria-hidden="true"></i> Add Owner
   </a>
  </li>
   <li class="list-group-item">
    <span class="badge">{{$tenants->count()}}</span>
    <a href="{{url('tenants/create')}}">
   <i class="fa fa-user-plus" aria-hidden="true"></i> Add Tenant
   </a>
  </li>

</ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-4">
                      <div class="panel panel-primary">
                            <div class="panel-heading">
                            <span>Total Rooms</span>
                          </div>
                      </div>
                    </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
