@extends('layouts.app')
@section('content')

<h1>Show Owner</h1>

<ul class="breadcrumb">
  <li><a href="{{url('dashboard')}}">Dashboard</a></li>
  <li><a href="{{url('owners')}}">Owners</a></li>
  <li class="active" >Show Owner</li>
</ul>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Owner Information</h3>
  </div>
  <div class="panel-body">
  <div class="row">

<div class="col-md-3">
                  
                  <img class="img-responsive" style="width: 200px; height:auto;" src="{{asset('/img/owners/'.$owner->avatar)}}">          
    
     </div>

                       <div class="col-md-6">
                       <h2>Owner Information</h2>

                          <table class="table table-condensed" style="margin-top: 10px;">
                                     <tbody>
                                          <tr>
                                                <td>Name</td>
                                                <td><strong>{{$owner->first_name}} {{$owner->middle_name}} {{$owner->last_name}}</strong></td>
                                         </tr> 
                                         <tr>
                                                <td>Phone Number</td>
                                                <td><strong>{{$owner->phone_num}}</strong></td>
                                         </tr>
                                           <tr>
                                                <td>Age</td>
                                                <td>
                                                <strong>{{$owner->age}}</strong>    
                                               </td>
                                         </tr>
                                    </tbody>
                               </table>

                       </div>


            <div class="col-md-2 hidden-xs hidden-sm">
                    
                             {!! QrCode::size(150)->generate('http://192.168.1.23/accesssystem/public/'.Request::path()) !!}
                           
                           {!! QrCode::format('png')->size(150)->generate('http://192.168.1.23/accesssystem/public/'.Request::path(),'../public/qr-img/'.$owner->first_name.'.png') !!}
                           
                           
                           <a href="{{url('/qr-img/'.$owner->first_name.'.png')}}" class="btn btn-block btn-primary" download>Download Image</a>


                           @role(['Personnel','Administrator'])
                           {!! Form::model($grant = new \App\Grant,  ['class' => 'form-horizontal',  'url' => 'grants', 'enctype'=>'multipart/form-data'])!!}
                            {!! csrf_field() !!}

                           <button class="btn btn-block btn-primary" type="submit" style="margin-top: 20px;">Grant Access</button>

                           {!! Form::close() !!}


                           @endrole
                           
                           
                       </div>
                       </div>

                       <hr/>

<div class="row">
   <div class="col-md-12">
                 <h3>Owned Room</h3>   







               
        </div>





</div>
  </div>
</div>

@endsection