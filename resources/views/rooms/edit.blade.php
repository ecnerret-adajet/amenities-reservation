@extends('layouts.app')

@section('content')

   <div class="row">
<h1>Edit Room</h1>



<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Room</h3>
  </div>
  <div class="panel-body">
       {!! Form::model($room, ['method' => 'PATCH', 'action' => ['RoomsController@update', $room->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
    {!! csrf_field() !!}
                    
                    
    @include('rooms.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}
  </div>
</div>


    </div>

@endsection