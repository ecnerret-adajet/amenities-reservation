@extends('layouts.app')
@section('content')
<div class="row">
<h1>Amenities <span class="badge pull-right">Amenities
{{$amenities->count()}}
</span></h1>



</div>
<div class="row">
<div class="col-md-12">



    
   <table  id="room"  class="dt-responsive nowrap display table-responsive table-hover table" width="100%">
  <thead>
    <tr>
              <th></th>
      <th>Reservation</th>
      <th>Name</th>
      <th>Tower #</th>
      <th>Unit #</th>
      <th>Guest</th>
      <th>Conforme</th>
       <th>Approved By</th>
       <th>Action</th>
    </tr>
  </thead>

    <tfoot>
    
      <tr>
        <th></th>
      <th>Reservation</th>
      <th>Name</th>
      <th>Tower #</th>
      <th>Unit #</th>
      <th>Guest</th>
      <th>Conforme</th>
       <th>Approved By</th>
       <th>Action</th>
    </tr>
  </tfoot> 


  <tbody>
  @foreach($amenities as $amenity)
    <tr>

    <td></td>

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
      <td>{{$amenity->conforme}}</td>
      <td>{{$amenity->approved_by}}</td>
      <td>
      <a href="{{url('/amenities/'.$amenity->id)}}">
      <i class="action ion-ios-compose-outline"></i>
      </a>
      </td>
    </tr>
     @endforeach
  </tbody>
</table> 

         
       




</div><!-- end column -->
</div>

@endsection