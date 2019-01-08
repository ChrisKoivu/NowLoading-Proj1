<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
        
        
        @auth

        <div class="container-fluid">
            <div class="row"> 
               <!-- include sidenav -->
                @include('layouts.partials.admin-sidenav')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                      <h1 class="h2">Administrator Dashboard</h1>
                     
                    </div>
                    
                   <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                   -->

                    <br  />
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    @if (session('success'))
                      <div class="alert alert-success">
                      <p>{{ session('success') }}</p>
                      </div><br />
                    @endif

                    @if (session('failure'))
                      <div class="alert alert-danger">
                      <p>{{ session('failure') }}</p>
                      </div><br />
                    @endif
                    
                    <div id="admin-panel">

                    </div>
       
                     </main><!-- end of main -->
                </div> <!-- end of row -->           
              </div> <!-- end of container-fluid -->
          
        @endauth

  
@endsection