@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <h4> Response totals per <?php echo $profession ?> type </h4>
                <?php 
                    if(is_array($report)){
                        foreach ($report as $key => $value){
                            echo 'Response totals for the question: ' . $key . '<br />';
                            foreach ($value as $response){
                                echo 'response: ' . $response->survey_question_response . ', total: ' . $response->total . '<br />';
                            }
                        }            
                    } else {
                        echo $report;
                    }           
                ?>
            </div>
        </div>
    </div>
</div>
@endsection
