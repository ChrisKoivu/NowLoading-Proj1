 <!-- begin admin table -->

 <?php (!empty($_POST)) ? print_r($_POST): ''; ?>
 <!--<h2>User Maintenance</h2>
 <div class="table-responsive">
   <table class="table table-striped table-sm">
     <thead>
       <tr>
         <th>Name</th>
         <th>Email</th>
         <th>Role</th>
         <th>Select Role</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>

       @foreach($users as $user)
       <tr>
         <td></td>
         <td></td>
         <td></td>
       </tr>
      </tbody>
    </table>
  </div> -->
 
         <div class ="row">
            <form method="post" action="">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="price">Price:</label>
                      <input type="text" class="form-control" name="price" value="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Update Product</button>
                  </div>
                </div>
              </form>
          </div>
         
      
         
        
       
       @endforeach
   <!-- end admin table -->