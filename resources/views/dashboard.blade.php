@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-md-12">

<h1>Dashboard</h1>

   <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion-ios-home-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Rooms</span>
                  <span class="info-box-number">{{$rooms->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion-ios-locked-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Owners</span>
                  <span class="info-box-number">{{$owners->count() }}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total tenants</span>
                  <span class="info-box-number">{{$tenants->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion-ios-basketball-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Used Amenities</span>
                  <span class="info-box-number">{{$amenities->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

         

   <table  id="room"  class="dt-responsive nowrap display table-responsive table-hover table" width="100%">
  <thead>
    <tr>
      <th></th>
      <th>Owners Name</th>
      <th>Rodadasom name</th>
      <th>Floor #</th>
      <th>Unit #</th>
      <th>Building #</th>
       <th>Action</th>
    </tr>
  </thead>

    <tfoot>
      <tr>
      <th></th>
      <th>Owners Name</th>
      <th>fasfasf name</th>
      <th>Floor #</th>
      <th>Unit #</th>
      <th>Building #</th>
      <th>Action</th>
    </tr>
  </tfoot> 
  <tbody>
   @foreach($rooms as $room)
    <tr>
    <td>
    @foreach($room->owners as $owner)
    <img class="img-resposive img-circle" style="width: 50px; height:auto; " src="{{asset('/img/owners/'.$owner->avatar)}}">
    @endforeach
    </td>
    <td>
    @foreach($room->owners as $owner)
    {{$owner->first_name}} {{ $owner->last_name == null ? 'No owner' : $owner->last_name }}
    @endforeach
    </td>
      <td>{{$room->name}}</td>
      <td>{{$room->floor_num}}</td>
      <td>{{$room->no_unit}}</td>
      <td>{{$room->building_num}}</td>
      <td>
      <a href="{{url('/rooms/'.$room->id.'/edit')}}">
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