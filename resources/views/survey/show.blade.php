<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        
        
        @auth

        
          
        <table>

         @foreach($responses as $response)
         <tr><td>{{$response->survey_question . ' '}} {{$response->survey_question_response}}</td>
         
         </tr>        
@endforeach
        </table>
        @endauth

    </div>
@endsection

  