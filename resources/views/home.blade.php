@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    {{-- <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=a6e8458c49a434578dc7e20f303fe358"> --}}
    <link rel="stylesheet" href= "{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href= "{{asset('css/homePage.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="/assets/js/script.min.js?h=b93a31692d1f551a409e7049c97bc91d"></script>
</head>

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
                <div class="col-md-4"><span class="fa-stack fa-4x">{{-- <i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span> --}}
                   {{--  <h4 class="section-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>--}}
                </div> 
                <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-child fa-stack-1x fa-inverse"></i></a></span>
                    <h4 class="section-heading">MS4A Main Site</h4>
                    <p class="text-muted"><a href="https://makingstridesforautism.org/index.html" class="brightness" target="_blank">Visit us on our main site here!</a>
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x">{{-- <i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span>
                    <h4 class="section-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> --}}
                </div>
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
                                <a href="{{route('EducationPage')}}" class="btn btn-info" style="color:white">View</a>
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
                                <a href="{{route('BusinessPage')}}" class="btn btn-info" style="color:white">View</a>
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
                                <a href="{{route('MedicalPage')}}" class="btn btn-info" style="color:white">View</a>
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
                                <a href="{{route('FamilyPage')}}" class="btn btn-info" style="color:white">View</a>
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
                                <a href="{{route('GovernmentPage')}}" class="btn btn-info" style="color:white">View</a>
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
                                <a href="{{route('CommunityPage')}}" class="btn btn-info" style="color:white">View</a>
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
                                <a href="{{route('TravelPage')}}" class="btn btn-info" style="color:white">View</a>
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
           {{--  <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/1.jpg?h=d6348b0ac62136468dbff141c95c313b"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/2.jpg?h=a0bc1f1302cca7e34fe4a8a6ede823be"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/3.jpg?h=90e7913e72276cee000a30cb05a62998"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/4.jpg?h=dd75735e722d131b77b4cf11c203f0fa"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Brand 2018</span></div> --}}
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