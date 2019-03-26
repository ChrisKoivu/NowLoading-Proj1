<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">   
        @auth      
            <table>

                <?php $username="";
                  print_r($survey);
                ?>  
                @foreach($responses as $response)
                    <?php 
                    if($username !== $response->name){            
                        $username = $response->name;
                        echo '<tr><td><h3 style="padding-top:50px;"> 
                            Survey for ' . 
                            $username . '</h3></td></tr>';
                    }   
                    ?>
                    
                    <tr><td>{{$response->survey_question . ' '}} {{$response->survey_question_response}}</td>                 
                    </tr>        
                @endforeach
                
            </table>
            
        @endauth
    </div>
@endsection

  