@extends('layouts.app')
@section('content')
<div class="row">
<h1>Use Amenities</h1>
<hr/>
   <div class="col-md-12">
                    
    {!! Form::model($amenity = new \App\Amenity,  ['class' => 'form-horizontal',  'url' => 'amenities',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'amenitiesform'])!!}
    {!! csrf_field() !!}
                    
        
                    
                    
                    
                    
    @include('amenities.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}







               
        </div>





</div>
@endsection