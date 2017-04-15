@extends('layouts.app')

@section('menu')
<link rel="stylesheet" href="{{ asset('css/cssslide.css') }}">
<link rel="stylesheet" href="{{ asset('css/csshomemember.css') }}">

<script src="{{ asset('javascript/slide.js')}}"></script>
<script src="{{ asset('javascript/welcome.js') }}"></script>
 <nav class="navbar navbar-default navbar-static-top" style="background-color: #f6f6f6 ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('image/fimo.PNG') }}" style="width: 100%; height: 100%">
                    
                </a>
                <a class="navbar-brand" href="#">
                   
                    <img src="{{ asset('image/iot.PNG') }}" style="width: 100%; height: 100%">

                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="#home" class="clickhome">Home</a></li>
                    <li><a href="#info" class="clickinfo" >Giới thiệu</a></li>
                    <li><a href="#contact" class="clickcontact">Liên hệ</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                    @else
                        <li>
                            <a href="#setacount" data-toggle="modal" data-target="#test">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li style="margin-top: 10%">|</li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    
@endsection
@section('body')

<div class="slidehome">
                <script src="{{ asset('//code.jquery.com/ui/1.11.4/jquery-ui.js')}}"></script>
                <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                    <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper For Slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- Third Slide -->
                    <div class="item active">
                        <img src="image/all.png" alt="Bootstrap Touch Slider"  class="slide-image" >
                        <div class="bs-slider-overlay"></div>

                        <div class="container">
                            <h4>teext </h4>
                        </div>
                    </div>
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="image/android.png" alt="Bootstrap Touch Slider"  class="slide-image" />
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_right">
                            <h1 style="text-align: b">Android App</h1>
                            <p data-animation="animated lightSpeedIn">Android Application on PM 2.5</p>
                            
                        </div>
                    </div>
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="image/mcu1.png" alt="Bootstrap Touch Slider"  class="slide-image" />
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                        <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h1>MSNs – Box</h1>
                                    <p>Design and development of sensor boxes</p>
                                </div>
                            </div> 
                        
                    </div>
                    <!-- End of Slide -->

                </div>
                <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only" style="margin-top: 50%">Previous</span>
                </a>

                <!-- Right Control -->
                <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div> 
            </div>
            <!--info-->
        <div class="info">
            <?php 
                include('simple_html_dom.php');
                $url = 'http://fimo.edu.vn/research-and-development-teams/iot/';
                $html = file_get_html($url);
                $noidung = $html->find('.content',0);
                echo $noidung;
            ?>
        </div>
        <!--contact-->
        <div class="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8623259784235!2d105.7805595144171!3d21.038193992833225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3548b046a1%3A0x5ceafcf15055d275!2sFIMO!5e0!3m2!1svi!2s!4v1491371972844" width="670" height="419" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        @endsection