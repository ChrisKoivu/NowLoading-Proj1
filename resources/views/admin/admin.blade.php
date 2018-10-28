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

                    <h2>User Maintenance</h2><br  />
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
       
                    <div class="table-responsive">
                      <table class="table table-striped table-sm">
                       <thead>
                          <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            
                          </tr>
                        </thead>
                       <tbody>
                        @foreach ($users as $user)
                        
                          <tr>
                          <td>{{$user['name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td>{{$user['role']}}</td>
                            
                          </tr>
                          
                       <tr><td>
                       <div id ="admin-form-wrap">
                        <form method="post" action="{{action('RolesController@update', $user['id'])}}">                        <div class="admin form-group col-md-6"> 
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">
                             <label for="change-role">Select New Role:</label>
                          <select class="form-control d-inline-block" id="change-role" name="role"
                          style = "width:150px;">
                              <option>default</option>
                              <option>volunteer</option>
                              <option>admin</option>
                          </select>
                        </div>
                        <div class="admin form-group col-md-2">
                              <button type="submit" name="role-submit" class="btn btn-primary">Save</button>
                        </div> 
                        </form>
                        </div>
                      </td>
                    </tr>
                        @endforeach
                      </tbody>
                    </table>
                      
                    </div><!-- end of table responsive -->
                  </main><!-- end of main -->
                </div> <!-- end of row -->           
              </div> <!-- end of container-fluid -->
          
        @endauth

  
@endsection