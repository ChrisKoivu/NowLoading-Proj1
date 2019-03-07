<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        
        
        @auth

        <h3>Survey</h3>
        <hr>

        @foreach($questions as $question)           
           <?php /*set first response as checked */ $checked="checked";?>
           <p>{{$question->survey_question }}</p>
            @foreach ($question->responses as $response)
             <div class="form-check">
                <input class="form-check-input" type="radio" name="question_{{$question->id}}" 
                id="responseRadio" value="option_{{$response->id}}" {{$checked}}>
                <?php /* clear checked flag */ $checked = ""; ?>
                <label class="form-check-label" for="responseRadio">
                    {{ $response->survey_question_response }}
                </label>
              </div>
            @endforeach
           <hr> 
         @endforeach

        @endauth

    </div>
@endsection

  