    @include('welcome.blade.php')
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

