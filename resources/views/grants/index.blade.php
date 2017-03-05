@extends('layouts.app')
@section('content')
<h1>Grant Access</h1>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Grant Access Log </h3>
  </div>
  <div class="panel-body">

     {{ Form::open(array('url' => '/logs', 'method' => 'get')) }}
               <div class="form-group col-md-4">
                 <div class="form-group">

                         <div class="input-group">
    <span class="input-group-addon" style="background-color: #bdc3c7; color: #fff;">Start Date</span>
   <div class='input-group date' id='datetimepicker2'>
                    {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}  
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
  </div>


                
            </div>

     

            </div>

             <div class="form-group col-md-4">

                  <div class="form-group">

                <div class="input-group">
    <span class="input-group-addon" style="background-color: #bdc3c7; color: #fff;">End Date</span>
     <div class='input-group date' id='datetimepicker2'>
                     {!! Form::input('date', 'end_date', null, ['class' => 'form-control']) !!} 
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
  </div>


             
            </div>

                   
                </div><!-- /.form group -->

                 <label class="col-md-2"> 
                        <button type="submit" class="btn btn-primary btn-block pull-right">
                                    <i class="fa fa-btn fa-cog"></i> generate
                                </button>
                 </label>
          {!! Form::close() !!}
               


  <table class="table table-bordered">
  		<thead>
  		<tr>
  			<th>
  				Personel
  			</th>
  			<th>
  			Logs
  			</th>
  		</tr>
  		</thead>

  		<tbody>
  		@foreach($grants as $grant)
  			<tr>
  				<td>
  					{{$grant->confirm_date}}
  				</td>
  				<td>
  				<strong>{{$grant->user->name}}</strong> grant access to owner  <strong>{{$grant->owner->first_name}}</strong>
  				</td>
  			</tr>
  		@endforeach
  		</tbody>

  </table>
 



  </div>
</div>
@endsection