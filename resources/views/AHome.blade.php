@extends('layouts.app')

@section('content')
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
                    <li><a href="#" class="clickhome">Home</a></li>
                    <li><a href="#info" class="clickmember" >Thành viên</a></li>
                    <li><a href="#contact" class="clickdevice">Thiết bị</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                  
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
@endsection
