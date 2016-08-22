@extends('layouts.app')
@section('content')
<div class="container">

   <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Room Information</div>
                <div class="panel-body">
                    
 

                        <div class="col-md-12 text-center hidden-xs hidden-sm">
                    
                           {!! QrCode::size(250)->generate('http://10.96.16.40/assetinventory4/public/'.Request::path()) !!}
                           
                           {!! QrCode::format('png')->size(250)->generate('http://10.96.16.40/assetinventory4/public/'.Request::path(),'../public/qr-img/'.$room->name.'.png') !!}
                           
                           
                           
                       </div>


                        









                </div>
            </div>
        </div>





</div>
@endsection