<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Central Condominium</title>

    <!-- Fonts  -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min')}}" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">




    <!-- Styles   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     -->

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/print.css')}}" rel="stylesheet" media="print">
      <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
     <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- select 2 plugin -->
       <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/select2-bootstrap.min.css') }}" rel="stylesheet" />


      <!-- Datatables styles   -->
    <link href="{{ asset('/css/dataTables.tableTools.css') }}" rel="stylesheet" >
    <link href="{{ asset('/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/buttons.bootstrap.min.css') }}" rel="stylesheet" /> 



    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        html, body {
            font-family: 'Lato';
            background: -moz-linear-gradient(108deg, rgba(192,192,192,1) 0%, rgba(192,192,192,1) 11%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 86%, rgba(0,0,0,1) 97%, rgba(0,0,0,1) 100%); /* ff3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0,0,0,1)), color-stop(3%, rgba(0,0,0,1)), color-stop(14%, rgba(0,0,0,1)), color-stop(20%, rgba(0,0,0,1)), color-stop(89%, rgba(192,192,192,1)), color-stop(100%, rgba(192,192,192,1))); /* safari4+,chrome */
            background: -webkit-linear-gradient(108deg, rgba(192,192,192,1) 0%, rgba(192,192,192,1) 11%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 86%, rgba(0,0,0,1) 97%, rgba(0,0,0,1) 100%); /* safari5.1+,chrome10+ */
            background: -o-linear-gradient(108deg, rgba(192,192,192,1) 0%, rgba(192,192,192,1) 11%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 86%, rgba(0,0,0,1) 97%, rgba(0,0,0,1) 100%); /* opera 11.10+ */
            background: -ms-linear-gradient(108deg, rgba(192,192,192,1) 0%, rgba(192,192,192,1) 11%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 86%, rgba(0,0,0,1) 97%, rgba(0,0,0,1) 100%); /* ie10+ */
            background: linear-gradient(342deg, rgba(192,192,192,1) 0%, rgba(192,192,192,1) 11%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 86%, rgba(0,0,0,1) 97%, rgba(0,0,0,1) 100%); /* w3c */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#c0c0c0',GradientType=0 ); /* ie6-9 */
        }

        .header-title{
          color: #fff ! important;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body>

     @if (Auth::check())
                   
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0 ! important">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand brand-hr" href="{{ url('/home') }}">
                   <img class="img-responsive" style="display: inline-block; width: 30px; height: auto" src="{{asset('img/assets/logo.png')}}"> {{ config('app.name', 'Central Condominium') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

               
  
         

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    

                       <li class="hidden-md hidden-lg"><a  href="{{url('dashboard')}}"> 
                       Dashboard</a>
                       </li>

                        <li class="hidden-md hidden-lg"><a href="{{url('rooms/create')}}"> Rooms</a></li>
                         <li class="hidden-md hidden-lg"><a href="{{url('amenities')}}"> Amenities</a></li>
                        <li class="hidden-md hidden-lg"><a href="{{url('owners')}}"> Owners</a></li>
                        <li class="hidden-md hidden-lg"><a href="{{url('tenants')}}"> Tenants</a></li>
                        <li class="hidden-md hidden-lg"><a href="{{url('users')}}"> Users</a></li>
                         <li class="hidden-md hidden-lg"><a href="{{url('reports')}}"> Report</a></li>
                         <li class="hidden-md hidden-lg"><a href="{{url('grants')}}"> Acess Log</a></li>

                          <li>
                            <a href=""  aria-expanded="false">
                              Welcome {{ Auth::user()->name }}
                            </a>
                          </li>

                             <li >      
                            <a href="{{ url('/logout') }}"  aria-expanded="false">
                             <i class="fa fa-sign-out" aria-hidden="true"></i>   
                            </a>

                        </li>
                   
                </ul>


            </div>
        </div>
    </nav>

    <div class="row text-uppercase" style="background: #000; margin: 0; padding: 20px;">
    <div class="container">

 <ul class="nav nav-pills">
  <li class="active hidden-sm hidden-xs"><a class="nav-style" href="{{url('dashboard')}}"><i class="ion-speedometer"></i> Dashboard</a></li>

  @role('Administrator')
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('rooms/create')}}"><i class="ion-key"></i> Rooms</a></li>
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('amenities')}}"><i class="ion-ios-basketball-outline"></i> Amenities</a></li>
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('owners')}}"><i class="ion-unlocked"></i> Owners</a></li>
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('tenants')}}"><i class="ion-unlocked"></i> Tenants</a></li>
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('users')}}"><i class="ion-android-contact"></i> Users</a></li>
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('reports')}}"><i class="ion-android-options"></i> Report</a></li>
  <li class="hidden-sm hidden-xs"><a class="nav-style" href="{{url('grants')}}"><i class="ion-key"></i> Acess Log</a></li>
  @endrole




</ul>


    </div>
    </div>

<div class="container">
<div class="row">


 @endif
<div class="col-md-12">



    @yield('content')



</div><!-- end col-md-9 -->




</div>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

        <!-- datatables   -->  
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.columnFilter.js') }}"></script>
    <script src="{{ asset('js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jszip.min.js') }}"></script>
    <script src="{{ asset('js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>

    <!-- flash message -->
    @include('flashy::message')

    <!-- filesystem -->
     <script src="{{asset('/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
       <script>
       $(":file").filestyle({size: "sm", buttonName: "btn-primary", buttonBefore: true});
     </script>



    <script>    
    $(document).ready(function() {
    $('#room').DataTable();
      });
    </script>

        <script>
     $(document).ready(function() {
    $('#report').DataTable( {
        dom: "<'row table-style-custom'<'col-sm-6'><'col-sm-6 text-right'B>>"+"<'row'<'col-sm-6'l><'col-sm-6'f>>R" +
    "<'row'<'col-sm-12'tr>>" +
    "<'row'<'col-sm-5'i><'col-sm-7'p>>", 
        buttons: [
          
            { extend: 'excelHtml5', className: 'btn-sm btn-success text-uppercase' },
            { extend: 'csvHtml5', className: 'btn-sm btn-success text-uppercase' },
            { extend: 'pdfHtml5', className: 'btn-sm btn-success text-uppercase' }
        ]
    } );

} );
    </script>

    <!-- select 2 plugin -->
    <script src="{{ asset('/js/select2.min.js') }}"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

     <!-- InputMask -->
    <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}" type="text/javascript"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

      <!-- select2 plugin -->
    <script>
      $(".select2").select2({
       placeholder: "Select an number",
       allowClear: true
        });
    </script>

        <script>
function myFunction() {
    window.print();
}
</script>

  <script type="text/javascript">
      $(function () {
 
        $("[data-mask]").inputmask();

       
      });
    </script>


</body>

</html>
