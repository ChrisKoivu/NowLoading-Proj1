<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <section class="parallax bgimg-1">
        <div class="col-lg-12 text-center">
        </div>
    </section>
    <section>
        <div class="container">
        @auth      
            <table>
                <?php $username="";?>  
                @foreach($responses as $response)
                    <?php 
                    if($username !== $response->name){            
                        $username = $response->name;
                        echo '  <h3 class="text-uppercase section-heading"> 
                                    Survey for ' . $username . '
                                </h3>
                                <hr>
                                <br/>   ';
                    }   
                    ?>
                    <label class="form-check-label">
                        <tr>
                            <td>
                                <p>
                                    {{$response->survey_question}}&nbsp;<i class="fa fa-arrow-right"></i>&nbsp;
                                    {{$response->survey_question_response}}  
                                </p>   
                            </td>                 
                        </tr>  
                    </label>      
                @endforeach
            </table>
        @endauth
        </div>
    </section>
    <br/>
@endsection

  