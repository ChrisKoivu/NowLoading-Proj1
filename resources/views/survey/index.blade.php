<!-- admin.blade.php -->
@extends('layouts.app')
@section('content')
    <header class="header">
      <div class="col-lg-12 text-center">
        <a href="https://makingstridesforautism.org/index.html" tabindex="-1" target="_blank"><img src="{{url('images/ms4a-sta-logo.png')}}" class="resize center"  alt="MS4A Logo"></a>
        <a href="#resourceDir" class="skip amplify">Skip Navigation</a>
    </div>
    </header>
    <section class="parallax bgimg-1">
      <div class="container">
        <div class="col-lg-12 text-center"><br/>
          <h3 class="section-subheading" style="color:white">
            You're almost ready. <br/> Please fill out the questionaire below to help us better suit you.
          </h3>
        </div>
      </div>
    </section>
    <section>
    <div class="container">
      @auth
      <h3 class="text-uppercase section-heading">Survey</h3>
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
          <h3>{{$question->survey_question }}</h3>
          @foreach ($question->responses as $response)
            <div class="form-check">
              <input class="form-check-input" type="radio" name="{{$question->id}}" 
                id="responseRadio" value="{{$response->id}}" {{$checked}}>
              <?php /* clear checked flag */ $checked = ""; ?>
              <label class="form-check-label" for="responseRadio">
                <p style="font-size:16px">{{ $response->survey_question_response }}</P>
              </label>
            </div>
          @endforeach
          <hr> 
        @endforeach
        <div class="form-group">
          <button type="submit" class="btn btn-info">
            Submit
          </button>
        </div>               
      </form> <!-- end of form -->


      @endauth
    </div>
    </section>
    <footer class="footer">
    </footer>
@endsection

  