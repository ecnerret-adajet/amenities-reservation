@extends('layouts.app')
@section('content')
<h1 class="header-title"> All Owners</h1>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Owners <a href="{{url('owners/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Owner</a></h3>
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

      <div class="btn-group">
      <a href="#" class="btn btn-primary dropdown-toggle btn-block" data-toggle="dropdown" aria-expanded="false">
        Dropdown
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
        <a  href="{{ url('/owners/'.$owner->id) }}">
          Details
        </a>
        </li>
        <li>
        <a data-toggle="modal" data-target=".bs-disable{{$owner->id}}-modal-lg" href="">
        Disable User
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


@foreach($owners as $owner)

           <!-- archive a company modal -->
        <div class="modal fade bs-disable{{$owner->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Disable a owner</h4>
              </div>
              <div class="modal-body">
                      <div class="row">
                <div class="col-md-12">
                <div class="panel-body text-center"> 
            
                <h4>  
                    Are you sure you want to disable this owner?
                </h4>
    
                        
             <form method="POST" action="{{ url('/owners/disable/'.$owner->id) }}">
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