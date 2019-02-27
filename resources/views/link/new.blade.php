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
    <style>
        iframe, html, body{
          height: 100%;
          width: 100%;          
          border:none;
        }

        body{
            margin-top:60px;
        }
   
        p{
            margin-left:25px;
        }
      
    
 
     </style>

     <!-- include the navbar -->
     @include('layouts.partials.nav-offcanvas')

</head>
<body style="overflow:hidden">
          <button class="btn btn-link" type="button" data-toggle="collapse" 
         data-target="#link" aria-expanded="true" 
         aria-controls="link">
                Hide/Show Links
              </button>
         
                  <?php if(!empty($links)){ ?>
                        @foreach($links as $link)       
                            <p id="link">               
                              <a href="{{$link['url']}}" 
                              onclick="trackLink({{Auth::user()->id}}, {{$link['id']}} )"
                               target="myFrame">
                               {{$link['title']}}
                              </a>
                            </p>
                          @endforeach
                    <?php } ?>
    <iframe  src="" name="myFrame" ></iframe>




     <!-- App Scripts -->
     <script src="{{ asset('js/app.js') }}"></script> 
     <!-- use axios -->
     <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <!-- use the tracker -->
     <script src="{{ asset('js/tracker/track.js') }}"></script>
     <!-- JQuery -->
     <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script> 
     <!-- Tooltips -->
     <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script> 
     <!-- Bootstrap core JavaScript -->
     <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>    


</body>
</html>