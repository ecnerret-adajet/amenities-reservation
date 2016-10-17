@extends('layouts.app')
@section('content')




<h1>Add a Room to Owner</h1>
 

        <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Add room </h3>
  </div>
  <div class="panel-body">

  
{!! Form::model($room = new \App\Room,  ['class' => 'form-horizontal',  'url' => 'rooms',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
        
                    
    @include('rooms.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}


  </div>
</div>






@endsection