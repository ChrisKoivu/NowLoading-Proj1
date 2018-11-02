@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Resource Directory</h1>
                    This is the resource directory!<br>
                    <div>
                        <h3>Diagnosis</h3><br>
                        <img>
                        <p>Description</p><br>
                        <a href="">Resource 1</a><br>
                        <a href="">Resource 2</a><br>
                        <a href="">Resource 3</a><br>
                        <a href="">Resource 4</a><br>
                        <a href="">Resource 5</a><br>
                    </div>
                    <div>
                        <h3>Education</h3>
                        <img>
                        <p>Description</p><br>
                        <a href="">Resource 1</a><br>
                        <a href="">Resource 2</a><br>
                        <a href="">Resource 3</a><br>
                        <a href="">Resource 4</a><br>
                        <a href="">Resource 5</a><br>
                    </div>
                    <div>
                        <h3>Employment</h3><br>
                        <img>
                        <p>Description</p><br>
                        <a href="">Resource 1</a><br>
                        <a href="">Resource 2</a><br>
                        <a href="">Resource 3</a><br>
                        <a href="">Resource 4</a><br>
                        <a href="">Resource 5</a><br>
                    </div>
                    <div>
                        <h3>Etc</h3>
                        <img>
                        <p>Description</p><br>
                        <a href="">Resource 1</a><br>
                        <a href="">Resource 2</a><br>
                        <a href="">Resource 3</a><br>
                        <a href="">Resource 4</a><br>
                        <a href="">Resource 5</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
