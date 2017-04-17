@extends('layouts.app')

@section('menu')
<link rel="stylesheet" href="{{ asset('css/csshomemember.css') }}">
<script src="{{ asset('javascript/home.js') }}"></script>
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

    <!--member-->
        <div class="member">
          <h4>1. Member:</h4>
            <div class="container-a2">
                <ul class="caption-style-2">
                    <div class="col-md-4">
                        <li>
                        <?php
                      /*    error_reporting(E_ALL ^ E_DEPRECATED);
                          mysql_connect("localhost","root","") or die ("no connect");
                          mysql_select_db("webiot");
                          mysql_set_charset('utf8');
                          $result = mysql_query("SELECT * FROM member");
                          while($row = mysql_fetch_assoc($result)){
                            echo "<img style=\"width:100%; height:100%\"src=\"" .$row['img']."\" alt=\"\">";
                            echo "<div class=\"caption\">".
                            "<div class=\"blur\"></div>".
                            "<div class=\"caption-text\">".
                            "<h4>Hoang Thanh Hang</h4>".
                            "<p>Web</p>".
                            "</div>".
                            "</div> ";          
                            }
                          mysql_free_result($result);
                          mysql_close();*/
                        ?>
                          <!-- <img src="image/Chinh1.jpg" alt="">
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h4>Pham Van Chinh</h4>
                                    <p>Web</p>
                                </div>
                            </div> -->
                        </li>
                    </div>
                    <div class="col-md-4">
                        <li>
                            <img src="image/duong1-1.png" alt="">
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h4>Ngo Tung Duong</h4>
                                    <p>WNS</p>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class="col-md-4">
                        <li>
                            <img src="image/chi.jpg" alt="">
                            <div class="caption">
                                <div class="blur"></div>
                                <div class="caption-text">
                                    <h4>Nguyen Ba Huu Chi</h4>
                                    <p>Server</p>
                                </div>
                            </div>
                        </li>
                    </div>
                   
                </ul>
             </div>
        </div>
    <!--device-->
        <div class="device">
            <h4>Danh sách thiết bị:</h4>
            <table class="table table-bordered">
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Mô tả</th>
                    <th>Ngày nhập kho</th>
                </tr>
                <?php
                error_reporting(E_ALL ^ E_DEPRECATED);
                mysql_connect("localhost","root","") or die ("no connect");
                mysql_select_db("webiot");
                mysql_set_charset('utf8');
              //  if (!function_exists('info')) {
               //   function info(){
                    $result = mysql_query("SELECT * FROM device");
                    while($row = mysql_fetch_assoc($result)){
                          echo "<tr>\n";
                          echo "<td>" . $row['id']."</td>\n";
                          echo "<td>". $row['name']."</td>\n";
                          echo "<td>". $row['describe']. "</td>\n";
                          echo  "<td>" . $row['date']. "</td>\n";
                          echo "</tr>\n";
                      }
                    mysql_free_result($result);
                    //return $result;
                 // }
            //  }
                ?>

            </table>

        </div>
    <!--account-->
  
    <div id="test" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLable" aria-hidden="true" style="margin-top: 10%">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading" >
                        <h4 style="text-align: center;">Setting your account</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-md-5">
                            <div class="list-group">
                                <br>
                              <button type="button" class="list-group-item" id="clickchangename">Change name</button>
                              <button type="button" class="list-group-item" id="clickchangedob">change DoB</button>
                              <button type="button" class="list-group-item" id="clickchangeemail">Change Email</button>
                              <button type="button" class="list-group-item" id="clickchangepassword">Change Password</button>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="userinfo">
                                <a href="#"><img src="https://fimo.hipchat.com/img/sign_in/grey_avatar.svg" id="show-option" title="Change your avatar" style="margin-left: 10%"></a>
                              <?php 
                                error_reporting(E_ALL ^ E_DEPRECATED);
                                mysql_connect("localhost","root","") or die ("no connect");
                                mysql_select_db("webiot");
                                mysql_set_charset('utf8');
                                $result = mysql_query("SELECT * FROM member");
                                $use = Auth::user()->name;
                                    while($row = mysql_fetch_assoc($result)){
                                        if($row['name']==$use){
                                            echo "<br>"."<b>Name:</b> " .$row['name']."<br>";
                                            echo "<b>DoB:</b> ". "<br>";
                                            echo "<b>Email:</b> ". $row['email']. "<br>";
                                            echo "<b>Research Field:</b> ". $row['Research_field']. "<br>";
                                            echo "<b>Date Participation:</b> ". $row['date_participation']. "<br>";
                                        }
                                    }
                                    mysql_free_result($result);
                                mysql_close();
                               ?>
                           </div>
                           <div class="changename">
                               <div class="form-group">
                                   <label>Your name: </label>
                                   <input type="" class="form-control" id="cname">
                                   <br>
                                   <button type="submit" class="btn btn-primary">Save</button>
                               </div>
                           </div>
                           <div class="changeemail">
                               <div class="form-group">
                                   <label>Your Email: </label>
                                   <input type="email" class="form-control" id="cemail">
                                   <br>
                                   <button type="submit" class="btn btn-primary">Save</button>
                               </div>
                           </div>
                           <div class="changepassword">
                               <div class="form-group">
                                   <label>Your password: </label>
                                   <input type="password" class="form-control" id="cpass">
                                   <br>
                                   <label>Confim your password: </label>
                                   <input type="password" class="form-control" id="cpass">
                                   <br>
                                   <button type="submit" class="btn btn-primary">Save</button>
                               </div>
                           </div>
                        </div>
                        
                        </div>
                    </div>
              </div>
          </div>
        </div>
    </div>
@endsection
