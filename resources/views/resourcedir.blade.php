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
                    <main role="main">
                        <section class="jumbotron text-center">
                            <div class="container">
                                <h1 class="jumbotron-heading">Resource Directory</h1>
                                <p class="lead text-muted">This is the resource directory</p>
                                <p>
                                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                                </p>
                            </div>
                        </section>
                  
                        <div class="album py-5 bg-light">
                            <div class="container">
                  
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="{{url('images/autismedu.jpg')}}" width="400" height="300" alt="Card image cap">
                                            <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="{{url('images/autismemp.jpg')}}" width="400" height="300" alt="Card image cap">
                                            <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="{{url('images/timingofauti.jpg')}}" width="400" height="300" alt="Card image cap">
                                            <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="{{url('images/autismedu.jpg')}}" width="400" height="300" alt="Card image cap">
                                            <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="{{url('images/autismemp.jpg')}}" width="400" height="300" alt="Card image cap">
                                            <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                        <img class="card-img-top" src="{{url('images/timingofauti.jpg')}}" width="400" height="300" alt="Card image cap">
                                            <div class="card-body">
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 