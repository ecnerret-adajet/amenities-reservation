@extends('layouts.app')
@section('content')
<h1>Grant Access</h1>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight: 500;"> Grant Access Log </h3>
  </div>
  <div class="panel-body">


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