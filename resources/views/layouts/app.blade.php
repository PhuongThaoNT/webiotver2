<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IOT WEBSITE</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!--JavaScripts-->
    <script src="{{ asset('javascript/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('javascript/bootstrap.min.js')}}"></script> 
    <style>
        body {
            font-family: 'Lato';
            background-color: #F2F2F1;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    @yield('menu')
    <div class="mainbody">
       <div class="col-md-3">
            <strong>THÔNG BÁO</strong>
            
            <div class="panel panel-default">
            <div class="panel-body">
            <ul class="list-group">
            <?php 
            error_reporting(E_ALL ^ E_DEPRECATED);
            mysql_connect("localhost","root","") or die ("no connect");
            mysql_select_db("webiot");
            mysql_set_charset('utf8');
            $result = mysql_query("SELECT * FROM post");
            while($row = mysql_fetch_assoc($result)){
                echo 
                    "<b>".
                    $row['text'].
                    "</b>".
                    "<h6>".
                    $row['time'].
                    "</h6>".
                    "<hr style=\"margin-top: 1%\">";
                
            }
            mysql_free_result($result);
            mysql_close();
            ?>
            </ul>
            </div>
            </div>
            <div class="tincn">
            <strong>TIN CÔNG NGHỆ</strong>
            <hr style="margin-top: 1%">
                <?php 
                include_once('simple_html_dom.php');
                $url = 'https://iotvietnam.com/tro-ly-ao-nha-thong-minh-len-ngoi/';
                $html = file_get_html($url);
                $title = $html->find('.entry-title',0);
                $img = $html->find('.aligncenter',0);
                ?>
                <div class="col-md-4">
                <?php
                     echo "<img style=\"width: 100%; height:100%\" src=\"".$img->src."\" />";
                ?>
                </div>
                <div class="col-md-8">
                    <h5><a href="https://iotvietnam.com/tro-ly-ao-nha-thong-minh-len-ngoi/" style="color: black"><?=$title->innertext?></a></h5>
                </div>
                
            </div>
        </div>
        <!--slide-->
            <div class="col-md-6">
             @yield('body')
            
            </div>
            
        <!--facebook plugin-->
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item"><div class="fb-page" data-href="https://www.facebook.com/fimouet/?ref=ts&fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></li>
            </ul>
            
        </div>

    </div>


<script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
