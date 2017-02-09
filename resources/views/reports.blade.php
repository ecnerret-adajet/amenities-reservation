@extends('layouts.app')
@section('content')


<h1>Report Content</h1>

<div class="panel panel-primary print">
  <div class="panel-heading">
    <h3 class="panel-title">Content 



    </h3>



  </div>
  <div class="panel-body">

  <div class="row" style="margin-bottom: 10px;">
{{ Form::open(array('url' => '/report', 'method' => 'get')) }}
              
               <div class="col-md-4">
    <div class="input-group">
   <div class='input-group date' id='datetimepicker2'>
       <span class="input-group-addon">
              Start date          <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}  
                
                </div>
  </div>
    

     

      </div>

           
<div class="col-md-4">
            
                <div class="input-group">
     <div class='input-group date' id='datetimepicker2'>
        <span class="input-group-addon">
                End date   <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                     {!! Form::input('date', 'end_date', null, ['class' => 'form-control']) !!} 
                 
                </div>
  </div>


             </div>
         

                 

               <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block pull-right">
                                    <i class="fa fa-btn fa-cog"></i> generate
                                </button>
                                </div>
               
          {!! Form::close() !!}
  </div>


   <table  id="report"  class="dt-responsive table-bordered nowrap display table-responsive table-hover table" width="100%">
                <thead>
                      <tr>
                          <th>Date apply</th>
                          <th>Tower No</th>    
                          <th>Unit no</th>    
                          <th>Name occupants</th>    
                          <th>Name guest</th>    
                          <th>Conformet</th>    
                          <th>Date Approved</th>    
                     </tr>       
                </thead> 
            <tfoot>
                 <tr>
  						<th>Date apply</th>
                          <th>Tower No</th>    
                          <th>Unit no</th>    
                          <th>Name occupants</th>    
                          <th>Name guest</th>    
                          <th>Conformet</th>    
                          <th>Date Approved</th>              
                   </tr>
        </tfoot>   
        	<tbody>
        		@foreach($amenities as $amenity)
        			<tr>
	        			<td>
	        			{{    date('F d, Y h:i:s A', strtotime( $amenity->date_apply))  }}
	        			</td>

	        			<td>
	        			{{$amenity->tower_no}}
	        			</td>


	        			<td>
	        			{{$amenity->unit_no}}
	        			</td>

	        			<td>
	        			{{$amenity->name_occupants}}
	        			</td>

	        			<td>
	        			{{$amenity->name_guest}}
	        			</td>

	        			<td>
	        			{{$amenity->conforme}}
	        			</td>

	        			<td>
	        			{{    date('F d, Y h:i:s A', strtotime( $amenity->date_approved))  }}
	        			</td>


        			</tr>
        		@endforeach
        	</tbody>                    
                </table>


  </div>
  </div>


@endsection