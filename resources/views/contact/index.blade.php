@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (\Session::has('success'))
              <div class="alert alert-success">
                 <p>{{ \Session::get('success') }}</p>
              </div><br />
            @endif
            <form method="POST" action="{{url('/contact/store')}}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="name">Name:</label>
                   <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                   @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                   @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                </div>           
                <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                  <label for="comment">Comment:</label>
                  <textarea class="form-control" rows="5" name="comment" id="comment" value="{{ old('comment') }}" required></textarea>
                  @if ($errors->has('comment'))
                    <span class="help-block">
                      <strong>{{ $errors->first('comment') }}</strong>
                    </span>
                   @endif
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </form> <!-- end of form -->
        </div><!-- end of col-md-8 -->
    </div>
</div>
@endsection
