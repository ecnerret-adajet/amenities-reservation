@extends('layouts.app')
@section('content')
<div class="row">
<h1>Add Owner</h1>
<hr/>
   <div class="col-md-12">
                   	

      <center>
      	<img class="img-responsive img-circle" style="margin-bottom:20px; width:150px; height:150px;" src="{{asset('/img/owners/avatar.png')}}">
      </center> 



    {!! Form::model($owner = new \App\Owner,  ['class' => 'form-horizontal',  'url' => 'owners',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
        
                    
                    
                    
                    
    @include('owners.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}




        </div>
        </div><!-- end row -->
@endsection