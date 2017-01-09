@extends('layouts.app')
@section('content')
<h1>All Owners</h1>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Owners <a href="{{url('owners/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Owner</a><a href="{{url('tenants/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Tenant</a></h3>
  </div>
  <div class="panel-body">
 
  <table  id="room"  class="dt-responsive table-bordered nowrap display table-responsive table-hover table" width="100%">
  <thead>
    <tr>
       <th></th>
      <th>Full Name</th>
      <th>Age</th>
      <th>Birthday</th>
      <th>Phone Number</th>
      <th>Telephone Number</th>
      <th>Action</th>
       
    </tr>
  </thead>

    <tfoot>
        <tr>
       <th></th>
      <th>Full Name</th>
      <th>Age</th>
      <th>Birthday</th>
      <th>Phone Number</th>
      <th>Telephone Number</th>
      <th>Action</th>
       
    </tr>
  </tfoot> 


  <tbody>

   @foreach($owners as $owner)
    <tr>
 
        <td>
          <img class="img-responsive img-circle" style="width:35px; height:auto;" src="{{asset('/img/owners/'.$owner->avatar)}}">
        </td>
        <td>{{$owner->first_name}} {{$owner->middle_name}} {{$owner->last_name}}</td>
        <td>
             {{  $owner->birthday->diffInYears($base_date) }}

        </td>
        <td>
          {{ date('F d, Y', strtotime($owner->birthday)) }}
        </td>
        <td>{{$owner->phone_num}}</td>
        <td>{{$owner->telephone_num}}</td>
        <td>
        <a class="btn btn-primary" href="{{ url('/owners/'.$owner->id) }}">
          Details
        </a>

        </td>

    </tr>
       @endforeach
  </tbody>
</table> 



  </div>
</div>
@endsection