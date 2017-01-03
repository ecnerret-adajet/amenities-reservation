@extends('layouts.app')
@section('content')

<h1> Amenities </h1>

<ul class="breadcrumb">
  <li><a href="#">Dashboard</a></li>
  <li class="active" ><a href="{{url('amenities')}}">Amenities</a></li>
</ul>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Amenities <a href="{{url('amenities/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Amenity</a></h3>
  </div>
  <div class="panel-body">
  <table  id="room"  class="dt-responsive nowrap display table-responsive table-bordered table-hover table" width="100%">
  <thead>
    <tr>
      <th>Reservation</th>
      <th>Name</th>
      <th>Tower #</th>
      <th>Unit #</th>
      <th>Guest</th>
       <th>Approved By</th>
       <th>Action</th>
    </tr>
  </thead>

    <tfoot>
    
      <tr>
      <th>Reservation</th>
      <th>Name</th>
      <th>Tower #</th>
      <th>Unit #</th>
      <th>Guest</th>
       <th>Approved By</th>
       <th>Action</th>
    </tr>
  </tfoot> 


  <tbody>
  @foreach($amenities as $amenity)
    <tr>


    <td>
    @foreach($amenity->reservations as $reservation)
      {{$reservation->name}}
    @endforeach
    </td>
    <td>
    @foreach($amenity->owners as $owner)
    {{$owner->first_name}}
    @endforeach
    </td>
      <td>{{$amenity->tower_no}}</td>
      <td>{{$amenity->unit_no}}</td>
      <td>{{$amenity->name_guest}}</td>
      <td>{{$amenity->approved_by}}</td>
      <td>
      <a href="{{url('/amenities/'.$amenity->id)}}"class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a>
      </td>
    </tr>
     @endforeach
  </tbody>
</table> 

  </div>
</div>





@endsection