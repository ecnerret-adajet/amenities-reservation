@extends('layouts.app')
@section('content')
<div class="row">
<h1>Use Amenities</h1>

<ul class="breadcrumb">
  <li><a href="{{url('dashboard')}}">Dashboard</a></li>
  <li><a href="{{url('amenities')}}">Amenities</a></li>
  <li class="active">Use Amenities</li>
</ul>

   <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Use Amenities</h3>
  </div>
  <div class="panel-body">
    {!! Form::model($amenity = new \App\Amenity,  ['class' => 'form-horizontal',  'url' => 'amenities',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'amenitiesform'])!!}
    {!! csrf_field() !!}
                    
        
                    
               
                    
                    
    @include('amenities.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}
  </div>
</div>



</div>
@endsection