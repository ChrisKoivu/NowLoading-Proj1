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
    <div class="container">
        <div class="col-lg-12 text-center"><br/>
            <h1 class="text-uppercase section-heading" style="color:white">MS4A Resource Directory</h1>
            <h3 class="section-subheading" style="color:black">
                This is the resource directory homepage. From here you can navigate to the icons below to view specific resources
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><br/>
            <h2 class="text-uppercase section-heading" style="color:black">Resources</h2><br>
        </div>
    </div>
    
    <div id="resourceTopics" class="container bgimg">

        <div class="box1">
            <h4><a id="link1" href="#popup1" class="highlight disabled ol">Education</a></h4>
            <a href="#popup1" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Education</button></a>
            <div id="popup1" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Education</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Education.
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box2">
            <h4><a id="link2" href="#popup2" class="highlight disabled ol">Business</a></h4>
            <a href="#popup2" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Business</button></a>
            <div id="popup2" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Business</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Business. 
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box3">
            <h4><a id="link3" href="#popup3" class="highlight disabled ol">Medical</a></h4>
            <a href="#popup3" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Medical</button></a>
            <div id="popup3" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Medical</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Medical. 
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box4">
            <h4><a id="link4" href="#popup4" class="highlight disabled ol">Family</a></h4>
            <a href="#popup4" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Family</button></a>
            <div id="popup4" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Family</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Family. 
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box5">
            <h4><a id="link5" href="#popup5" class="highlight disabled ol">Community</a></h4>
            <a href="#popup5" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Community</button></a>
            <div id="popup5" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Community</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Community. 
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box6">
            <h4><a id="link6" href="#popup6" class="highlight disabled ol">Entertainment</a></h4>
            <a href="#popup6" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Entertainment</button></a>
            <div id="popup6" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Entertainment</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Entertainment. 
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box7">
            <h4><a id="link7" href="#popup7" class="highlight disabled ol">Government</a></h4>
            <a href="#popup7" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Government</button></a>
            <div id="popup7" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Government</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Government. 
                        </p>
                    </div>
                    <div class="popup-footer">
                        <a href="#resourceDir" class="btn btn-info">Close</a>
                        <a href="{{url('/links/Education')}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box8">
            <h4><a id="link8" href="#popup8" class="highlight disabled ol">Travel</a></h4>
            <a href="#popup8" class="invisiblebox" tabindex="-1"><button class="invisiblebox" tabindex="-1">Travel</button></a>
            <div id="popup8" class="overlay">
                <div class="popup">
                    <div class="popup-header">
                        <h2 style="text-align: center">Travel</h2>
                        <img src="{{url('images/community.jpg')}}" style="padding-left:30%" >
                        <a class="close" href="#resourceDir">&times;</a>
                    </div>
                    <hr>
                    <div class="popup-body">
                        <p>This is the description for Travel. 
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
    <br/><br/>
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
