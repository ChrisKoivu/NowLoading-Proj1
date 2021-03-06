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
   
       td{
         padding:10px;
       }
        table{
          margin-left:50px;
        }
    
 
     </style>

     <!-- include the navbar -->
     @include('layouts.partials.nav-offcanvas')

</head>

<body style="overflow:hidden">
        <table style="width:100%">
          <tr>
            <td>
              <button class="btn btn-link" type="button" data-toggle="collapse" 
                data-target="#link" aria-expanded="true" 
                aria-controls="link">
                  Hide/Show Links
              </button>
              <hr>
            </td>
          </tr>
        </table>
            <?php if(!empty($links)){ ?>
              <table style="width:100%">
                @foreach($links as $link)     
                  <tr>
                    @if($link['thumbnail'])
                    <td id="link">
                      <a href="{{$link['url']}}" 
                        onclick="trackLink({{Auth::user()->id}}, {{$link['id']}} )"
                        target="myFrame">
                        <img src="{{asset('/images/'. $link['thumbnail'])}}" alt="{{ $link['thumbnail']}}" 
                          height="42" width="42">
                      </a>
                      </td>
                    @endif
                    <td id="link">
                      <a href="{{$link['url']}}" onclick="trackLink({{Auth::user()->id}}, {{$link['id']}} )"
                        target="myFrame">
                        {{$link['title']}}
                      </a>
                    </td>
                  </tr>
                @endforeach
              </table>     
            <?php }?>
        <table style="width: 100%">
          <tr>
            <td>
              <button class="btn btn-link" type="button" data-toggle="collapse" 
                data-target="" aria-expanded="true" 
                aria-controls="">
                  Hide/Show PDF's
              </button>
              <hr>
            </td>
          </tr>
        </table>
        <table style="width:100%">
          <tr>
            <td>
                <button class="btn btn-link" type="button" data-toggle="collapse" 
                data-target="" aria-expanded="true" 
                aria-controls="">
                  Hide/Show Videos
              </button>
              <hr>
            </td>
          </tr>
        </table>
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