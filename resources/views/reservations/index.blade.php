@extends('layouts.app')
@section('content')

<h1> Reservations </h1>

<ul class="breadcrumb">
  <li><a href="#">Dashboard</a></li>
  <li class="active" ><a href="{{url('reservations')}}">reservations</a></li>
</ul>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> reservations <a href="{{url('reservations/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add reservation</a></h3>
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
  @foreach($reservations as $reservation)
    <tr>


    <td>
    @foreach($reservation->reservations as $reservation)
      {{$reservation->name}}
    @endforeach
    </td>
    <td>
    @foreach($reservation->owners as $owner)
    {{$owner->first_name}}
    @endforeach
    </td>
      <td>{{$reservation->tower_no}}</td>
      <td>{{$reservation->unit_no}}</td>
      <td>{{$reservation->name_guest}}</td>
      <td>{{$reservation->approved_by}}</td>
      <td>
              <div class="btn-group">
            <a href="#" class="btn btn-primary">Option</a>
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{url('/reservations/'.$reservation->id)}}">Details</a></li>
              <li><a href="" data-toggle="modal" data-target=".bs-delete{{$reservation->id}}-modal-lg">Delete</a></li>
            </ul>
          </div>   
      </td>
    </tr>
     @endforeach
  </tbody>
</table> 

  </div>
</div>


@foreach($reservations as $reservation)

<!-- delete modal reservation information  -->
<div class="modal fade bs-delete{{$reservation->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">Delete a reservation</span>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
                <div class="panel-body"> 

                   <h4>  
            Are you sure you want to delete this reservation ?
        </h4>
        <em>
        <small>This will affect other data that belongs to this reservation</small>
        </em>

                    
                </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
    {{ Form::open(['method' => 'DELETE', 'route' => ['reservations.destroy', $reservation->id]]) }}
    {!! csrf_field() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        {!! Form::close() !!}
      </div>
    </div><!-- /.modal-content -->  
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




@endforeach


@endsection