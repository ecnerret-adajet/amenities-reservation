@extends('layouts.app')
@section('content')

<div class="row">
<h1>Add Room</h1>
<hr/>
   <div class="col-md-12">
           
                    
    {!! Form::model($room = new \App\Room,  ['class' => 'form-horizontal',  'url' => 'rooms',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
        
                    
                    
                    
                    
    @include('rooms.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}




        </div>
        </div><!-- end row -->






@endsection