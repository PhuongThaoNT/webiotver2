<div class="mainbody">
    <div class="col-md-3">

    </div>

    <div class="col-md-6">
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
    </div>
        
    <!--facebook plugin-->
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><div class="fb-page" data-href="https://www.facebook.com/fimouet/?ref=ts&fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></li>
        </ul>
            
    </div>

</div>