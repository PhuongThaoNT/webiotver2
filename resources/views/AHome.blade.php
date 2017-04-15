@extends('layouts.app')

@section('menu')
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
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
                    <li><a href="#addbaiviet" data-toggle="modal" data-target="#dangbai">Viết bài</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                  
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
<!--viet bai-->
    <div id="dangbai" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đăng bài</h4>
              </div>
              <div class="modal-body">

              <?php 
                error_reporting(E_ALL ^ E_DEPRECATED);
                mysql_connect("localhost","root","") or die ("no connect");
                mysql_select_db("webiot");
                mysql_set_charset('utf8');
                $vietbai = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(isset($_POST["ten"])) { $vietbai = $_POST['ten']; }
                    $sql = "INSERT INTO post (text) VALUES ('$vietbai')";
                }
                mysql_close();
                ?>

                <form action="" method="post">
                  <textarea name="ten" id="ten"></textarea>
                  <script>CKEDITOR.replace('ten');</script>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Đăng bài</button>
              </div>
            </div>

        </div>
    </div>
@endsection
