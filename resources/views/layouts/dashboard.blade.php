<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SBS-MYANMAR | @yield('title')</title>

    <!-- Styles -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('jquery-datatable//css/style.css')}}" rel="stylesheet">
    <link href="{{asset('fontAwesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/app/app.css')}}" rel="stylesheet">
    <link href="{{asset('jquery-datatable/css/style.css')}}" rel="stylesheet">
</head>
<body>
        @include('partial.navBar')
            @include('partial.sideBar')

            @if(Session::has('flash_message'))
            <div class="col-md-9">
                <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                </div>
            </div>
            @endif

            @if(Session::has('flash_error_message'))
            <div class="col-md-9">
                <div class="alert alert-danger"><em> {!! session('flash_error_message') !!}</em>
                </div>
            </div>
            @endif

            @yield('content')


<!--link to script files-->
<script src="{{asset('bootstrap/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('jquery-datatable/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $(".jTable").dataTable();
            });
        </script>
</body>
</html>
