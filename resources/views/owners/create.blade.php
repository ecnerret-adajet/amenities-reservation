@extends('layouts.app')
@section('content')

<h1>Add Owner</h1>

                   
<ul class="breadcrumb">
  <li><a href="{{url('dashboard')}}">Dashboard</a></li>
  <li><a href="{{url('owners')}}">Owners</a></li>
  <li class="active">Add owners</li>
</ul>

        <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Add Owner </h3>
  </div>
  <div class="panel-body">
 


   {!! Form::model($owner = new \App\Owner,  ['class' => 'form-horizontal',  'url' => 'owners',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
        
                    
                    
                    
                    
    @include('owners.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}

  </div>
</div>
@endsection