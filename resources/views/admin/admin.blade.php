<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
        <?php print_r($_POST); ?>
        
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
                    <h2>Section title</h2>
                    <div class="table-responsive">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1,001</td>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                        </tbody>
                       </table>

                       <div id ="admin-form-wrap">
                       <form action="" method="post">
                        <div class="admin form-group col-md-4"> 
                          <label for="change-role">Select New Role:</label>
                          <select class="form-control d-inline-block" id="change-role" name="select-role"
                          style = "width:150px;">
                              <option>default</option>
                              <option>volunteer</option>
                              <option>Admin</option>
                          </select>
                        </div>
                        <div class="admin form-group col-md-4">
                      
                              <button type="submit" class="btn btn-primary">Save</button>
                        </div> 
                        </form>
                        </div>

                    </div><!-- end of table responsive -->
                  </main><!-- end of main -->

                </div> <!-- end of row -->
                
              </div> <!-- end of container-fluid -->
          
        @endauth

  
@endsection