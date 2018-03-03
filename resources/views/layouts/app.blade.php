<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('back/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('back/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    @stack('css')
</head>
<body>
    <div id="app">
        <div class="wrapper">
            @if(Request::is('admin*'))
                @include('layouts.include.sidebar')
            @endif
            <div class="main-panel">
                @if(Request::is('admin*'))
                    @include('layouts.include.topbar')
                @endif
                    @yield('content')
                @if(Request::is('admin*'))
                    @include('layouts.include.footer')
                @endif
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src="{{ asset('back/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/material.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('back/js/chartist.min.js') }}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{ asset('back/js/arrive.min.js') }}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{ asset('back/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('back/js/bootstrap-notify.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('back/js/material-dashboard.js?v=1.2.0') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('back/js/demo.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>

    @stack('scripts')
    </body>
</html>
