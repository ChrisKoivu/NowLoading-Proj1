<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Making Strides for Autism') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>


    
    <div id="app">
        @include('layouts.partials.nav-offcanvas')
        @yield('content')
    </div><!-- end of app div -->

    <!-- App Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    
    <!-- Theme javascript files -->
    <script type="text/javascript" src="{{ asset('js/offcanvas.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/feather.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/theme.js')}}"></script>
    
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.10.1/full-all/ckeditor.js"></script>

    <!-- js for this site -->
    <script type="text/javascript" src="{{ asset('js/style.js')}}"></script>

     
</body>
</html>
