@extends('layouts.app')
@section('content')
<div class="row">
<h1>All Owners</h1>
<hr/>
   <div class="col-md-12">





   <table  id="room"  class="dt-responsive nowrap display table-responsive table-hover table" width="100%">
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
    		<td>{{$owner->age}}</td>
    		<td>{{$owner->birthday}}</td>
    		<td>{{$owner->phone_num}}</td>
    		<td>{{$owner->telephone_num}}</td>
    		<td>
    		<a href="{{ url('/owners/'.$owner->id) }}">
    			<i class="icon ion-eye" style="margin-right: 20px;"></i>
        </a>
    			<i class="icon ion-compose"></i>

    		</td>

    </tr>
       @endforeach
  </tbody>
</table> 

       
       

                    






           
        </div>
</div>
@endsection