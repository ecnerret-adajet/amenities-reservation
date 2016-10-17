@extends('layouts.app')
@section('content')

<h1 class="page-header">Amenities Reciept

 </h1>

<ul class="breadcrumb no-print">
  <li><a href="{{url('dashboard')}}">Dashboard</a></li>
  <li><a href="{{url('amenities')}}">Amenities</a></li>
  <li class="active" ><a href="{{url('amenities/create')}}">Add Amenities</a></li>
</ul>


<div class="panel panel-primary print">
  <div class="panel-heading">
    <h3 class="panel-title">Owner <a href="{{url('amenities')}}" class="btn btn-info no-print"><i class="fa fa-file" aria-hidden="true"></i> All Amenities</a></h3>
  </div>
  <div class="panel-body">

<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th colspan="4">Amenities Reservation Slip</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="info" colspan="2">Facility Used</td>
      <td colspan="2">
      	@foreach($amenity->reservations as $reservation)
      			{{$reservation->name}}
      	@endforeach
      </td>
    </tr>
     <tr>
      <td class="info" colspan="2">Owner/Tenant</td>
      <td colspan="2">
      	@foreach($amenity->owners as $owner)
      			{{$owner->last_name}}, {{$owner->first_name}} {{$owner->middle_name}} 
      	@endforeach
      </td>
    </tr>

    <tr>
      <td class="info">Date Apply</td>
      <td>
  		{{$amenity->date_apply}}
      </td>
      <td class="info">Tower No</td>
      <td>{{$amenity->tower_no}}</td>
    </tr>



    <tr>
  <td class="info">Conforme</td>
    <td>{{$amenity->conforme}}</td>
      <td class="info">Conforme date</td>
    <td>{{$amenity->conforme_date}}</td>
  
    </tr>


      <tr>
  <td class="info">Approved by</td>
    <td>{{$amenity->approved_by}}</td>
      <td class="info">Approved date</td>
    <td>{{$amenity->date_approved}}</td>
  
    </tr>

    <tr>
  <td class="info">Name of occupants</td>
  <td>{{$amenity->name_occupants}}</td>
  <td class="info">Name of guest</td>
  <td>{{$amenity->name_guest}}</td>
    </tr>
 
  </tbody>
</table> 

<div class="row no-print">
<div class="col-md-12">
		<a href="" class="pull-right btn btn-primary" onclick="myFunction()"><i class="fa fa-file"></i>&nbsp;Print Reciept</a>
</div>
</div>



  </div>
</div>


@endsection