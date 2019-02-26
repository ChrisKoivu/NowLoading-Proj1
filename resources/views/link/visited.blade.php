<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Making Strides for Autism') }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <!-- include the navbar -->
     @include('layouts.partials.nav-offcanvas')

</head>
<body>
         <!-- display table listing the visited links -->
                  <?php if(!empty($links)){ ?>
                    <table>
                      <tr><th>User</th><th>Url</th><th>Time Visited</th></tr>
                        @foreach($links as $link)       
                           <tr>
                             <td>{{$link->name}}</td>
                             <td>{{$link->url}}</td>
                             <td>{{$link->created_at}}</td>
                           </tr>
                        @endforeach
                    <table>
                    <?php } ?>




     <!-- App Scripts -->
     <script src="{{ asset('js/app.js') }}"></script> 
     <!-- JQuery -->
     <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script> 
     <!-- Tooltips -->
     <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script> 
     <!-- Bootstrap core JavaScript -->
     <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>    


</body>
</html>