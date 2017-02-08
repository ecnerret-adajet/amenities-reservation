@extends('layouts.app')
@section('content')

<h1> Buildings </h1>

<ul class="breadcrumb">
  <li><a href="#">Buildings</a></li>
  <li class="active" ><a href="{{url('buildings')}}">All Buildings </a></li>
</ul>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Building 
      <a data-toggle="modal" class="btn btn-info" data-target=".bs-show-building-modal-lg" href="">
         <i class="fa fa-plus" aria-hidden="true"></i> Add New Building
      </a>
    </h3>
  </div>
  <div class="panel-body">


  <table class="table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th class="text-right">Option</th>
          </tr>
      </thead>
      <tbody>
          @foreach($buildings as $building)
            <tr>
                <td>{{$building->id}}</td>
                <td>{{$building->name}}</td>
                <td class="pull-right">
                  <div class="btn-group">
      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        Dropdown
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
        <a data-toggle="modal" data-target=".bs-edit{{$building->id}}-modal-lg" href="">
        Edit 
        </a>
        </li>
        <li>
         <a data-toggle="modal" data-target=".bs-delete{{$building->id}}-modal-lg" href="">
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

               <!-- create building modal -->
                    <div class="modal fade bs-show-building-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                      <div class="modal-dialog">
                        <div class="modal-content" style="min-width: 850px;  margin-left: -80px;">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Building</h4>
                          </div>
                          <div class="modal-body">
                                {!! Form::model($building = new \App\Building,  ['class' => 'form-horizontal',  'url' => 'buildings'] )!!}
                                {!! csrf_field() !!}


                                 <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-12 ">
                                <label class="control-label text-left">
                                {!! Form::label('name', 'Building Name:') !!}
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
                        
                          
                          </div><!-- modal body -->
                          <div class="modal-footer">
                          
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" >Submit</button>

                            {!! Form::close() !!}
                          </div>
                          
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->    

@foreach($buildings as $building)


                    <!-- Delete a company modal -->
                      <div class="modal fade bs-delete{{$building->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Delete a Building</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                              <div class="col-md-12">
                              <div class="panel-body text-center"> 
                          
                              <h4>  
                                  Are you sure you want to delete this Building ?
                              </h4>
                              <em>
                              <small>This may affect documents that selects under this name</small>
                              </em>
                                          
                            {!! Form::open(['method' => 'DELETE', 'route' => ['buildings.destroy', $building->id]]) !!}
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
                      <div class="modal fade bs-edit{{$building->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Update a Building</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                              <div class="col-md-12">
                              <div class="panel-body"> 
                          
                                
                                {!! Form::model($building, ['method' => 'PATCH','route' => ['buildings.update', $building->id]]) !!}


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