@extends('layouts.app')
@section('content')

<link rel="stylesheet" href= "{{asset('css/homePage.css')}}">
<body id="page-top">
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Homepage</h2>
                    <h3 class="text-muted section-subheading">
                        <p>
                            This is the resource directory homepage. From here you can navigate to the links below to view specific resources
                        <p>
                    </h3>
                    <a href="#resourceDir" class="skip">Skip Navigation</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">{{-- <span class="fa-stack fa-4x"></span> --}}
                  
                </div> 
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-child fa-stack-1x fa-inverse"></i></a></span>
                    <h4 class="section-heading">MS4A Main Site</h4>
                    <p class="text-muted"><a href="https://makingstridesforautism.org/index.html" class="brightness" target="_blank">Visit us on our main site here!</a>
                </div>
                <div class="col-md-4">{{-- <span class="fa-stack fa-4x">    </span>       --}}      </div>
            </div>
        </div>
    </section>
    <section id="resourceDir" class="bg-light">
        <div id="resourceTopics" class="container" tabindex="-1">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading ">Resources</h2><br>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-4 portfolio-item">
                <div class="text-center"><h4>Education</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    Description
                                </p>
                                <a href="{{url('/links/Education')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4>Business</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    Description
                                </p>
                                <a href="{{url('/links/Business')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4>Medical</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100">
                        <div class="middle">
                            <div class="text">
                                <p>
                                     Description
                                </p>
                                <a href="{{url('/links/Medical')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4>Family</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    Description
                                </p>
                                <a href="{{url('/links/Family')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4>Government</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    Description
                                </p>
                                <a href="{{url('/links/Government')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4>Community</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    Description
                                </p>
                                <a href="{{url('/links/Community')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item"></div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4>Travel</h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    Description
                                </p>
                                <a href="{{url('/links/Travel')}}" class="btn btn-info" style="color:white">View</a>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"></div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
           
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="https://twitter.com/makingstridesnf" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/makingstridesforautism/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                        <li class="list-inline-item"><a href="#resourceTopics">Resources</a></li>
                    <li class="list-inline-item"><a href="{{url('home')}}">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

@endsection