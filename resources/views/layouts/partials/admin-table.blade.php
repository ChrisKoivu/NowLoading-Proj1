 <!-- begin admin table -->
 <h2>User Maintenance</h2>
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
         <td>{{$user['name']}}</td>
         <td>{{$user['email']}}</td>
         <td>{{$user['role']}}</td>
         <td>
          <select class="form-control" id="roleSelect">
            <option>default</option>
            <option>volunteer</option>
            <option>admin</option>
          </select>
         </td>
         <td>
          <button type="submit" class="btn btn-primary mb-2">Save</button>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div> 
 <!-- end admin table -->