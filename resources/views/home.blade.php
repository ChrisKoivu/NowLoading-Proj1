<!DOCTYPE html>
@extends('layouts.app')
@section('content')

<html lang="en-US" xml:lang="en-US">
<header class="header">
    <div class="col-lg-12 text-center">
        <a href="https://makingstridesforautism.org/index.html" tabindex="-1" target="_blank"><img src="{{url('images/ms4a-sta-logo.png')}}" class="resize center"  alt="MS4A Logo"></a>
        <a href="#resourceDir" class="skip amplify">Skip Navigation</a>
    </div>
</header>
<body id="page-top">
    <section id="services" class="parallax bgimg-1" alt="">
        <div class="container">
            <div class="col-lg-12 text-center"><br/>
                <h1 class="text-uppercase section-heading" style="color:white">MS4A Resource Directory</h1>
                <h3 class="section-subheading" style="color:white">
                    This is the resource directory homepage. From here you can navigate to the links below to view specific resources
                </h3>
            </div>
        </div>
    </section>
    <section id="resourceDir" class="bgimg-3" alt="">
        <div id="resourceTopics" class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><br/>
                    <h2 class="text-uppercase section-heading" style="color:black">Resources</h2><br>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-4 portfolio-item">
                <!--********************************************************************************-->
                <div class="text-center"><h4><a id="link1" href="#popup1" class="highlight disabled" style="color:black">Education</a></h4></div>
                    <div class="box">
                        <a href="#popup1" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Education Resources"></a>
                        <div id="popup1" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2 style="text-align: center">Education</h2>
                                    <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Education. Hello my name is mason eastman and i am from unf
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        <br/>
                                        dsadsad
                                    </p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--********************************************************************************-->
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup2" class="highlight disabled" style="color:black">Business</a></h4></div>
                    <div class="box">
                        <a href="#popup2" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Business Resources"></a>
                        <div id="popup2" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Business</h2>
                                    <img src="{{url('images/ds3.jpg')}}" >
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Business. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Business')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup3" class="highlight disabled" style="color:black">Medical</a></h4></div>
                    <div class="box">
                        <a href="#popup3" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100" alt="Medical Resources"></a>
                        <div id="popup3" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Medical</h2>
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                 <div class="popup-body">
                                   <p>This is the description for Medical. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                     <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Medical')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup4" class="highlight disabled" style="color:black">Family</a></h4></div>
                    <div class="box">
                        <a href="#popup4" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Family Resources"></a>
                        <div id="popup4" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Family</h2>
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Family. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Family')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item"></div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup5" class="highlight disabled" style="color:black">Community</a></h4></div>
                    <div class="box">
                        <a href="#popup5" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Community Resources"></a>
                        <div id="popup5" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Community</h2>
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Community. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Community')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup6" class="highlight disabled" style="color:black">Entertainment</a></h4></div>
                    <div class="box">
                        <a href="#popup6" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Entertainment Resources"></a>
                        <div id="popup6" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Entertainment</h2>
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Entertainment. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Entertainment')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup7" class="highlight disabled" style="color:black">Government</a></h4></div>
                    <div class="box">
                        <a href="#popup7" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Government Resouces"></a>
                        <div id="popup7" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Government</h2>
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Government. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Government')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 portfolio-item">
                    <div class="text-center"><h4><a href="#popup8" class="highlight disabled" style="color:black">Travel</a></h4></div>
                    <div class="box">
                        <a href="#popup8" class="btn" tabindex="-1"><img class="image" src="{{url('images/autismedu.jpg')}}" style="width:100%" alt="Travel Resources"></a>
                        <div id="popup8" class="overlay">
                            <div class="popup">
                                <div class="popup-header">
                                    <h2>Travel</h2>
                                    <a class="close" href="#resourceDir">&times;</a>
                                </div>
                                <hr>
                                <div class="popup-body">
                                    <p>This is the description for Travel. Hello my name is mason eastman and i am from unf</p>
                                </div>
                                <div class="popup-footer">
                                    <a href="#resourceDir" class="btn btn-info">Close</a>
                                    <a href="{{url('/links/Travel')}}" class="btn btn-info">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
    </section>
    <section id="" class="parallax bgimg-2" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><br/>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #1978d4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-left">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="https://twitter.com/makingstridesnf" class="highlight amplify custom-link custom-hover" target="_blank"><i class="fa fa-twitter" alt="Twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/makingstridesforautism/" class="highlight amplify custom-link custom-hover" target="_blank"><i class="fa fa-facebook" alt="Facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="{{url('home')}}" class="highlight amplify custom-link custom-hover">Home</a></li>
                        <li class="list-inline-item"><a href="https://makingstridesforautism.org/about.html" class="highlight amplify custom-link custom-hover" target="_blank">About</a></li>
                        <li class="list-inline-item"><a href="#" class="highlight amplify custom-link custom-hover">Terms of Use</a></li>
                        <li class="list-inline-item"><a href="#resourceTopics" class="highlight amplify custom-link custom-hover">Resources</a></li>
                        <li class="list-inline-item"><a href="https://makingstridesforautism.org/about.html" class="highlight amplify custom-link custom-hover">Main Site</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr class="custom-line">
</body>
<footer class="footer">
</footer>
</html>
@endsection
