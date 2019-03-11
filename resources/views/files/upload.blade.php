@extends('layouts.app')
@section('content')
<style>
  div {
      margin-bottom:50px;
  }

</style>

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
                </div>
        </div>
</div> 

    <div id="photo-upload">
        <h3> Select image to upload </h3>
        <form action="/files/store" enctype="multipart/form-data" method="POST">
            <p>
                <label for="photo">
                    <input type="file" name="photo" id="photo">
                </label>
            </p>
            <button>Upload</button>
            {{ csrf_field() }}
        </form>
    </div>

    <div id="document-upload">
        <h3> Select document to upload </h3>
        <form action="/files/store" enctype="multipart/form-data" method="POST">
            <p>
                <label for="document">
                    <input type="file" name="document" id="document">
                </label>
            </p>
            <button>Upload</button>
            {{ csrf_field() }}
        </form>
    </div>


</div>
</div>
</main>

@endauth
@endsection
