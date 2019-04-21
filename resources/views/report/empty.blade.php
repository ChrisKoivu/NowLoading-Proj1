
<style>
  td, th {
    padding:10px;
  }
  #form-wrapper,.form-control{
    margin:20px 0px;
    width:400px;
  }

  #form-wrapper{
    margin-bottom: 150px;
  }

  
</style>


@extends('layouts.app')
@section('content')
@auth      
<div class="container-fluid">
    <div class="row"> 
       <!-- include sidenav -->
        @include('layouts.partials.admin-sidenav')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <h3>Reports</h3>
          <div id="form-wrapper"> 
            <?php echo $message; ?>
          </div>
        </main>
    </div>
</div>
@endauth
@endsection
