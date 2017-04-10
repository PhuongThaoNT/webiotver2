@extends('welcome')

@section('welhome')
<div class="mainbody">
       <div class="col-md-3">

        </div>
        <!--slide-->
        
        <div class="col-md-6">
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
                            <div class="row">
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide_style_left">
                                    <h1 data-animation="animated flipInX">MSNs</h1>
                                    <h2 style="color: white">Multi wireless Sensor Networks</h2>
                                    <p data-animation="animated fadeInRight">Apply the SWE standard to built a MSN system.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="image/android.png" alt="Bootstrap Touch Slider"  class="slide-image" />
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_right">
                            <h1 data-animation="animated flipInX">Android App</h1>
                            <p data-animation="animated lightSpeedIn">Android Application on PM 2.5</p>
                            
                        </div>
                    </div>
                    <div class="item">

                        <!-- Slide Background -->
                        <img src="image/mcu1.png" alt="Bootstrap Touch Slider"  class="slide-image" />
                        <div class="bs-slider-overlay"></div>
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_right">
                            <h1 data-animation="animated zoomInLeft">MSNs – Box</h1>
                            <p data-animation="animated fadeInRight">Design and development of sensor boxes</p>
                            
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