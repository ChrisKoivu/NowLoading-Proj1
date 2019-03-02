<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        
        
        @auth

        <h3>User Profile</h3>
        <hr>

      
      <table>
        <tr> 
           <td>User Name: </td><td>{{$user->name}}</td>
        </tr>
        <tr> 
            <td>Address: </td><td>{{$user->street_num}} {{' '. $user->street}}</td>
        </tr>
        <tr> 
            <td>City: </td><td>{{$user->city}}</td>
         </tr>
         <tr> 
            <td>State: </td><td>{{$user->state}}</td>
         </tr>
         <tr> 
            <td>Zip: </td><td>{{$user->zip}}</td>
         </tr>
         <tr> 
            <td>Phone: </td><td>{{$user->phone}}</td>
         </tr>
         <tr> 
            <td>Country: </td><td>{{$user->country}}</td>
         </tr>
         <tr> 
            <td>Profession: </td><td>{{$user->profession}}</td>
         </tr>
      </table>
        
        @endauth

    </div>
@endsection

  