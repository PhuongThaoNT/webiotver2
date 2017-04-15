/*function load_info(){
	var xmlhttp;
        // Nếu trình duyệt là  IE7+, Firefox, Chrome, Opera, Safari
        if (window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }
        // Nếu trình duyệt là IE6, IE5
        else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        // Khởi tạo một hàm gửi ajax
        xmlhttp.onreadystatechange = function(){
	        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
	            document.getElementById("result").innerHTML = xmlhttp.responseText;
	        }
	    };
        xmlhttp.open("GET", "result.php", true);
        xmlhttp.send();
}*/
$(function () {
		$('.info').hide();
	$('.contact').hide();
	$('.slidehome').show();

	$('.clickinfo').click(function(){
		$('.info').show();
		$('.contact').hide();
		$('.slidehome').hide();
	});
	$('.clickcontact').click(function(){
		$('.contact').show();
		$('.info').hide();
		$('.slidehome').hide();
	});
	$('.clickhome').click(function(){
		$('.slidehome').show();
		$('.info').hide();
		$('.contact').hide();
	});
});