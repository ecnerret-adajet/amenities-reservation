<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>accesssystem</title>

    <!-- Fonts  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">


    <!-- Styles   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     -->

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
     <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />


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
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>



  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="background-color: #22313F;">
                    <a href="{{url('/dashboard')}}">
                    <i class="ion-lock-combination"></i>    Access System
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard')}}">Dashboard</a>
                </li>
                <li>
                    <a href="{{url('/rooms/create')}}">Rooms Management</a>
                </li>
                <li>
                    <a href="{{url('/amenities')}}">Amenities</a>
                </li>
                <li>
                    <a href="{{url('/owners')}}">Owners</a>
                </li>
                <li>
                    <a href="{{url('/tenants/create')}}">Tenants</a>
                </li>
                <li>
                    <a href="{{url('/reports')}}">Report</a>
                </li>
            
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        

                    @yield('content')


                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- filesystem -->
     <script src="{{asset('/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
       <script>
       $(":file").filestyle({size: "sm", buttonName: "btn-primary", buttonBefore: true});
     </script>

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

    <script>    
    $(document).ready(function() {
    $('#room').DataTable();
      });
    </script>

    <!-- select 2 plugin -->
    <script src="{{ asset('/js/select2.min.js') }}"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

        <script>
function myFunction() {
    window.print();
}
</script>

</body>

</html>
