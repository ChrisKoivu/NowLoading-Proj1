<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 

<style>
  table {
      margin-top: 10px;
      margin-bottom:60px;
  }

  td, th{
      padding:0px 10px;
  }
</style>
    <section class="parallax bgimg-1">
        <div class="col-lg-12 text-center">
        </div>
    </section>
    <section>
        <div class="container">
        @auth      
            
                <?php 
                 
               foreach($users as $user){ 
                   
                echo '<h4>Responses for ' . $user->name . '</h4>'; ?>
                   <table>
                      <tr><th>Question</th><th>Response</th></tr>
                       <?php    
                     foreach($user_surveys[$user->name]['survey'] as $question=>$value){ 
                       
                        echo '<tr><td>' . $value->survey_question . '</td><td>' . $value->survey_question_response
                        . '</td></tr>';
                        
                     
                     }  
                     ?>
                    </table>

                <?php } ?>
             
                   
             
                  


            

          
        @endauth
        </div>
    </section>
    <br/>
    <footer class="footer">
    </footer>
@endsection

  