@extends('layouts.app')

@section('content')

   <div class="row">
<h1>Add Owner</h1>
<hr/>
   <div class="col-md-12">
                    
       {!! Form::model($room, ['method' => 'PATCH', 'action' => ['RoomsController@update', $room->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
    {!! csrf_field() !!}
                    
                    
    @include('rooms.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}
                    
           
        </div>
    </div>

@endsection