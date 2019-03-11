<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        
        
        @auth

        <h3>Survey</h3>
        <hr>
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  @if (\Session::has('success'))
                    <div class="alert alert-success">
                       <p>{{ \Session::get('success') }}</p>
                    </div><br />
                  @endif
                  </div>
                </div>   
              </div>   
        <form method="POST" action="{{url('/survey')}}">
          {{ csrf_field() }}
        @foreach($questions as $question)           
           <?php /*set first response as checked */ $checked="checked";?>
           <p>{{$question->survey_question }}</p>
            @foreach ($question->responses as $response)
             <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$question->id}}" 
                id="responseRadio" value="{{$response->id}}" {{$checked}}>
                <?php /* clear checked flag */ $checked = ""; ?>
                <label class="form-check-label" for="responseRadio">
                    {{ $response->survey_question_response }}
                </label>
              </div>
            @endforeach
           <hr> 
         @endforeach
         <div class="form-group">
          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </div>               
      </form> <!-- end of form -->


        @endauth

    </div>
@endsection

  