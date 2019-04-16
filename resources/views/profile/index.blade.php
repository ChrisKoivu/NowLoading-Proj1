<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
<div class="col-lg-12 text-center">
   <div class="container">
      @auth
         <h2>{{$user->name}}'s Profile</h2><br>
         <a href="" type="button" class="btn btn-info">
            Edit
         </a>
         <br/><br/>
         <div>
            <table class="table">
               <tr>    
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-user text-primary"></span>    
                        Name                                                
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->name}} 
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-cloud text-primary"></span>  
                        Address                                              
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->street_num}} {{' '. $user->street}}
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                        City                                             
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->city}}
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                        State                                             
                     </strong>
                  </td>
                  <td class="text-primary">
                        {{$user->state}}
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-envelope text-primary"></span> 
                        ZipCode                                             
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->zip}}
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                        Country                                             
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->country}}
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                        Phone Number                                              
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->phone}}
                  </td>
               </tr>
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                        Email                                            
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->email}}
                  </td>
               </tr>  
               <tr>        
                  <td>
                     <strong>
                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                        Profession                                          
                     </strong>
                  </td>
                  <td class="text-primary">
                     {{$user->profession}}
                  </td>
               </tr> 
               <tr>
               </tr>    
            </div>                                           
         </table>
      </div>
      @endauth
   </div>
</div>
<footer class="footer">
</footer>
</html>
@endsection

  