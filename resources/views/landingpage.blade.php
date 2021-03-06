<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html lang="en-US" xml:lang="en-US">
    <header class="header">
        <div class="col-lg-12 text-center">
            <a href="https://makingstridesforautism.org/index.html" tabindex="-1" target="_blank"><img src="{{url('images/ms4a-sta-logo.png')}}" class="resize center"  alt="MS4A Logo"></a>
        </div>
    </header>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-16">
                    <div class="col-md-16 col-md-offset-4">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                        &nbsp;&nbsp;
                        <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <hr class="custom-line">
    </body>
</html>
@endsection