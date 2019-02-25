<!-- index.blade.php -->
@extends('link.link2')
@section('content') 
    <div class="container">
        <?php 
            if(empty($links)){
                echo '
                <div class="alert alert-danger">
                      <p>No Links have been created yet.</p>
                </div><br />
                ';
            }
        ?>
        <div class="links">
           @foreach($links as $link)        
             <p>               
               <a href="{{$link['url']}}" target="myFrame">
                {{$link['title']}}
               </a>
             </p>
             <hr>
           @endforeach
        </div>
        <div id="content"></div>
 </div>
@endsection