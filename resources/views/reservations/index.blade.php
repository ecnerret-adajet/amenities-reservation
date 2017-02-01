@extends('layouts.app')
@section('content')

<h1> Reservations </h1>

<ul class="breadcrumb">
  <li><a href="#">Dashboard</a></li>
  <li class="active" ><a href="{{url('reservations')}}">All Reservation </a></li>
</ul>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Reservations 
      <a data-toggle="modal" class="btn btn-info" data-target=".bs-show-reservation-modal-lg" href="">
         <i class="fa fa-plus" aria-hidden="true"></i> Add reservation
      </a>
    </h3>
  </div>
  <div class="panel-body">


  <table class="table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Changes</th>
              <th class="text-right">Option</th>
          </tr>
      </thead>
      <tbody>
          @foreach($reservations as $reservation)
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->name}}</td>
                <td>{{$reservation->charges}}</td>
                <td class="pull-right">
                  <div class="btn-group">
      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
        <a data-toggle="modal" data-target=".bs-edit{{$reservation->id}}-modal-lg" href="">
        Edit 
        </a>
        </li>
        <li>
         <a data-toggle="modal" data-target=".bs-delete{{$reservation->id}}-modal-lg" href="">
          Delete
        </a>
        </li>
       </ul>
    </div>
                </td>
            </tr>
          @endforeach
      </tbody>
  </table>
  </div>
</div>

               <!-- create reservation modal -->
                    <div class="modal fade bs-show-reservation-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog">
                        <div class="modal-content" style="min-width: 850px;  margin-left: -80px;">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Edit Compay</h4>
                          </div>
                          <div class="modal-body">
                                {!! Form::model($reservation = new \App\Reservation,  ['class' => 'form-horizontal',  'url' => 'reservations'] )!!}
                                {!! csrf_field() !!}


                                 <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-12 ">
                                <label class="control-label text-left">
                                {!! Form::label('name', 'Amenity Name:') !!}
                                </label>
                                </div>

                                <div class="col-md-12">
                                {!! Form::text('name', null, ['class' => 'form-control'] ) !!}
                                @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                </div>
                                </div>

                                <div class="row {{ $errors->has('charges') ? ' has-error' : '' }}">
                                <div class="col-md-12 ">
                                <label class="control-label text-left">
                                {!! Form::label('charges', 'Amenity charge:') !!}
                                </label>
                                </div>

                                <div class="col-md-12">
                                {!! Form::text('charges', null, ['class' => 'form-control'] ) !!}
                                @if ($errors->has('charges'))
                                <span class="help-block">
                                <strong>{{ $errors->first('charges') }}</strong>
                                </span>
                                @endif
                                </div>
                                </div>

                        
                          
                          </div><!-- modal body -->
                          <div class="modal-footer">
                          
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" >Submit</button>

                            {!! Form::close() !!}
                          </div>
                          
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->    

@foreach($reservations as $reservation)


                    <!-- Delete a company modal -->
                      <div class="modal fade bs-delete{{$reservation->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Delete a Reservation Amenity</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                              <div class="col-md-12">
                              <div class="panel-body text-center"> 
                          
                              <h4>  
                                  Are you sure you want to delete this Amenity ?
                              </h4>
                              <em>
                              <small>This may affect documents that selects under this name</small>
                              </em>
                                          
                            {!! Form::open(['method' => 'DELETE', 'route' => ['reservations.destroy', $reservation->id]]) !!}
                            {!! csrf_field() !!}
                                                              
                          </div>
                              </div>
                          </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-primary">Confirm</button>
                                
                                 
                            </div>
                            {!! Form::close() !!}
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->      
                      <!-- end delete -->



                       <!-- Edit a company modal -->
                      <div class="modal fade bs-edit{{$reservation->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Update a Reservation Amenity</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                              <div class="col-md-12">
                              <div class="panel-body"> 
                          
                                
                                {!! Form::model($reservation, ['method' => 'PATCH','route' => ['reservations.update', $reservation->id]]) !!}


                                <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-12 ">
                                <label class="control-label">
                                {!! Form::label('name', 'Amenity Name:') !!}
                                </label>
                                </div>

                                <div class="col-md-12">
                                {!! Form::text('name', null, ['class' => 'form-control'] ) !!}
                                @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                </div>
                                </div>

                                <div class="row {{ $errors->has('charges') ? ' has-error' : '' }}">
                                <div class="col-md-12 ">
                                <label class="control-label">
                                {!! Form::label('charges', 'Amenity charge:') !!}
                                </label>
                                </div>

                                <div class="col-md-12">
                                {!! Form::text('charges', null, ['class' => 'form-control'] ) !!}
                                @if ($errors->has('charges'))
                                <span class="help-block">
                                <strong>{{ $errors->first('charges') }}</strong>
                                </span>
                                @endif
                                </div>
                                </div>




                                                              
                          </div>
                              </div>
                          </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-primary">Update</button>
                                
                                 
                            </div>
                            {!! Form::close() !!}
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->      
                      <!-- end delete -->
  



@endforeach
@endsection