@extends('layouts.app')
@section('content')

<html lang="en-US" xml:lang="en-US">
<body id="page-top" alt="City Background" class="bg">
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
                    <a href="#resourceDir" class="skip amplify">Skip Navigation</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">{{-- <span class="fa-stack fa-4x"></span> --}}
                </div> 
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-child fa-stack-1x fa-inverse"></i></a></span>
                    <h4 class="section-heading">MS4A Main Site</h4>
                    <p class="text-muted"><a href="https://makingstridesforautism.org/index.html" class="highlight amplify" target="_blank">Visit us on our main site here!</a>
                </div>
                <div class="col-md-4">{{-- <span class="fa-stack fa-4x">    </span>       --}}      </div>
            </div>
        </div>
    </section>
    <section id="resourceDir" class="bg-light">
        <div id="resourceTopics" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading ">Resources</h2><br>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-4 portfolio-item">
                <div class="text-center"><h4><a href="{{url('/links/Education')}}" class="highlight disabled">Education</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Education Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Education.
                                </p>
                                <a href="{{url('/links/Education')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Business')}}" class="highlight disabled">Business</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Business Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Business.
                                </p>
                                <a href="{{url('/links/Business')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Medical')}}" class="highlight disabled">Medical</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100" alt="Medical Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                     This is the resources for Medical.
                                </p>
                                <a href="{{url('/links/Medical')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Family')}}" class="highlight disabled">Family</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Family Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Family.
                                </p>
                                <a href="{{url('/links/Family')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"></div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Community')}}" class="highlight disabled">Community</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Community Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Community.
                                </p>
                                <a href="{{url('/links/Community')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Entertainment')}}" class="highlight disabled">Entertainment</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Entertainment Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Entertainment.
                                </p>
                                <a href="{{url('/links/Entertainment')}}" class="btn btn-info" tabindex="-1">View</a> 
                            </div>
                       </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Government')}}" class="highlight disabled">Government</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Government Resouces">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Government.
                                </p>
                                <a href="{{url('/links/Government')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="{{url('/links/Travel')}}" class="highlight disabled">Travel</a></h4></div>
                    <div class="box">
                        <img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Travel Resources">
                        <div class="middle">
                            <div class="text">
                                <p>
                                    This is the resources for Travel.
                                </p> 
                                <a href="{{url('/links/Travel')}}" class="btn btn-info" tabindex="-1">View</a>
                            </div>
                       </div>
                    </div>
                </div>
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
                        <li class="list-inline-item"><a href="https://twitter.com/makingstridesnf" class="highlight amplify" target="_blank"><i class="fa fa-twitter" alt="Twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/makingstridesforautism/" class="highlight amplify" target="_blank"><i class="fa fa-facebook" alt="Facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#" class="highlight amplify">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#" class="highlight amplify">Terms of Use</a></li>
                        <li class="list-inline-item"><a href="#resourceTopics" class="highlight amplify">Resources</a></li>
                    <li class="list-inline-item"><a href="{{url('home')}}" class="highlight amplify">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

@endsection