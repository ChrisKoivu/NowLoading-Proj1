<!-- admin.blade.php -->
@extends('layouts.app')
@section('content') 
    <div class="container">
        
        
        @auth

        <h3>Administrator Panel</h3>
        <hr>
        {{ $message }}
        @endauth

    </div>
@endsection