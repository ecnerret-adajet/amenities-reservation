@extends('layouts.app')
@section('content')


<h1> Dashboard </h1>

<ul class="breadcrumb">
  <li class="active">Dashboard</li>
</ul>

   <div class="row">


 


            <div class="col-xs-3">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion-ios-home-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Rooms</span>
                  <span class="info-box-number">{{$rooms->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-xs-3">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion-ios-locked-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Owners</span>
                  <span class="info-box-number">{{$owners->count() }}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-xs-3">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total tenants</span>
                  <span class="info-box-number">{{$tenants->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class=" col-xs-3">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion-ios-basketball-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Used Amenities</span>
                  <span class="info-box-number">{{$amenities->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

          

      </div><!-- /.row -->


                    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Status </h3>
  </div>
  <div class="panel-body">


  <table  id="room"  class="dt-responsive nowrap display table-bordered table-responsive table-hover table" width="100%">
  <thead>
    <tr>
      <th></th>
      <th>Owners Name</th>
      <th>Building Name</th>
      <th>Floor #</th>
      <th>Unit #</th>
       <th>Action</th>
    </tr>
  </thead>

    <tfoot>
      <tr>
      <th></th>
      <th>Owners Name</th>
      <th>Building Name</th>
      <th>Floor #</th>
      <th>Unit #</th>
      <th>Action</th>
    </tr>
  </tfoot> 
  <tbody>
   @foreach($rooms as $room)
    <tr>
    <td>
    @foreach($room->owners as $owner)
    <img class="img-resposive img-circle" style="width: 50px; height:auto; " src="{{asset('img/owners/'.$owner->avatar)}}">
    @endforeach
    </td>
    <td>
    @foreach($room->owners as $owner)
    {{$owner->first_name}} {{ $owner->last_name == null ? 'No owner' : $owner->last_name }}
    @endforeach
    </td>
      <td>
        @foreach($room->buildings as $building)
          {{$building->name}}
        @endforeach
      </td>
      <td>
        @foreach($room->floors as $floor)
          {{$floor->name}}
        @endforeach
      </td>
      <td>
        @foreach($room->units as $unit)
          {{$unit->unit_no}}
        @endforeach
      </td>
      <td>
      @role('Administrator')
      <a class="btn btn-primary" href="{{url('/rooms/'.$room->id.'/edit')}}">
      @endrole
      Edit 
      </a>
      </td>
    </tr>
       @endforeach
  </tbody>
</table> 


  </div>
</div>

         

 
       




</div><!-- end column -->
</div>

@endsection