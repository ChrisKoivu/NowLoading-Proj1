 <!-- begin admin table -->
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

       @foreach($users as $user)
       <tr>
         <td>{{$user['name']}}</td>
         <td>{{$user['email']}}</td>
         <td>{{$user['role']}}</td>
         <td>dolor</td>
         <td>sit</td>
       </tr>
       @endforeach
     </tbody>
   </table>
 </div> 
 <!-- end admin table -->