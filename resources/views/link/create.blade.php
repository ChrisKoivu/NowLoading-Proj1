@extends('layouts.app')

@section('content')


@auth
       
<div class="container-fluid">
    <div class="row"> 
       <!-- include sidenav -->
        @include('layouts.partials.admin-sidenav')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (\Session::has('success'))
              <div class="alert alert-success">
                 <p>{{ \Session::get('success') }}</p>
              </div><br />
            @endif
            @if (\Session::has('duplicate'))
              <div class="alert alert-danger" role="alert">
                <p>{{ \Session::get('duplicate') }}</p>
              </div><br />
            @endif            
            <form method="POST" enctype="multipart/form-data" action="{{url('/links')}}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                   <label for="title">Title:</label>
                   <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                   @if ($errors->has('title'))
                      <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                      </span>
                   @endif
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" required>
                    @if ($errors->has('description'))
                      <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif
                </div>           
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                        <label for="url">Url:</label>
                        <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" required>
                        @if ($errors->has('url'))
                          <span class="help-block">
                            <strong>{{ $errors->first('url') }}</strong>
                          </span>
                        @endif
                </div>
                <div class="form-group">
                    <label for="category">Select category:</label>
                    <select class="form-control" id="category" name="category">
                      <option>Business</option>
                      <option>Community</option>
                      <option>Education</option>
                      <option>Entertainment</option>
                      <option>Government</option>
                      <option>Medical</option>
                      <option>Travel</option>
                    </select>
                  </div>
                  
                  <div>
                      <label for="photo">Select thumbnail image: 
                          <input type="file" name="photo" id="photo">
                      </label>
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

</div>
</div>
</main>

@endauth

@endsection
