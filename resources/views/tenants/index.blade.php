@extends('layouts.app')
@section('content')

<h1> Amenities </h1>

<ul class="breadcrumb">
  <li><a href="#">Dashboard</a></li>
  <li class="active" ><a href="{{url('amenities')}}">Amenities</a></li>
</ul>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Amenities <a href="{{url('tenants/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Tenants</a></h3>
  </div>
  <div class="panel-body">
  <table  id="room"  class="dt-responsive nowrap display table-responsive table-bordered table-hover table" width="100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>phone_num</th>
      <th>Assigned owner</th>
      <th>Action</th>
    </tr>
  </thead>

    <tfoot>
    
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>phone_num</th>
        <th>Assigned owner</th>
        <th>Action</th>
      </tr>
  </tfoot> 


  <tbody>
  @foreach($tenants as $tenant)
    <tr>


    <td>
    {{$tenant->full_name}}
    </td>

    <td>
    {{$tenant->age}}
    </td>    


    <td>
    {{$tenant->phone_num}}
    </td>


      <td>
        @forelse($tenant->owners as $owner)
          {{$owner->full_name}}
        @empty
          No assigned owner
        @endforelse
      </td>

      <td>
          <div class="btn-group">
            <a href="#" class="btn btn-primary">Option</a>
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{url('tenants/'.$tenant->id)}}">Details</a></li>
              <li>
              <a data-toggle="modal" data-target=".bs-disable{{$tenant->id}}-modal-lg" href="">
              Disable Tenant
              </a>
              </li>
              <li><a href="" data-toggle="modal" data-target=".bs-delete{{$tenant->id}}-modal-lg">Delete</a></li>
            </ul>
          </div>          
      </td>

    </tr>
     @endforeach
  </tbody>
</table> 

  </div>
</div>


@foreach($tenants as $tenant)

<!-- delete modal tenant information  -->
<div class="modal fade bs-delete{{$tenant->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">Delete a tenant</span>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
                <div class="panel-body"> 

                   <h4>  
            Are you sure you want to delete this tenant ?
        </h4>
        <em>
        <small>This will affect other data that belongs to this tenant</small>
        </em>

                    
                </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
    {{ Form::open(['method' => 'DELETE', 'route' => ['tenants.destroy', $tenant->id]]) }}
    {!! csrf_field() !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        {!! Form::close() !!}
      </div>
    </div><!-- /.modal-content -->  
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


           <!-- archive a company modal -->
        <div class="modal fade bs-disable{{$tenant->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Disable a Tenant</h4>
              </div>
              <div class="modal-body">
                      <div class="row">
                <div class="col-md-12">
                <div class="panel-body text-center"> 
            
                <h4>  
                    Are you sure you want to disable this Tenant?
                </h4>
    
                        
             <form method="POST" action="{{ url('/tenants/disable/'.$tenant->id) }}">
              {!! csrf_field() !!}
                                                
            </div>
                </div>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
                  
                   
              </div>
              </form> 
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->    




@endforeach




@endsection