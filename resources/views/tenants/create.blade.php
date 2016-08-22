@extends('layouts.app')
@section('content')
<div class="row">
<h1>Add Tenant</h1>
<hr/>
   <div class="col-md-12">

     <center>
      	<img class="img-responsive img-circle" style="margin-bottom:20px; width:150px; height:150px;" src="{{asset('/img/owners/avatar.png')}}">
      </center> 
                    
    {!! Form::model($tenant = new \App\Tenant,  ['class' => 'form-horizontal',  'url' => 'tenants',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
                    
    @include('tenants.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}




                </div>
            </div>

@endsection