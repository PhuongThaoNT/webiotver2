//phan trang trong home
$(function(){
	$('.mainhome').show();
	$('.member').hide();
	$('.device').hide();
	$('.clickmember').click(function(){
		$('.mainhome').hide();
		$('.device').hide();
		$('.member').show();
	});
	$('.clickdevice').click(function(){
		$('.mainhome').hide();
		$('.member').hide();
		$('.device').show();
	});
	$('.clickhome').click(function(){
		$('.member').hide();
		$('.device').hide();
		$('.mainhome').show();
	});
});
//hien thi cai dat tai khoan?
$(function(){
	$('.setting').hide;
	$('.use').click(function(){
		$('.setting').show();
	});
});
//change avata
$( function() {
  $( "#show-option" ).tooltip({
      show: {
        effect: "slideDown",
        delay: 250
      }
    });
 });
//cai dat tai khoan
$(function(){
	$('.changename').hide();
	$('.changeemail').hide();
	$(".changepassword").hide();
	$('#clickchangename').click(function(){
		$('.userinfo').hide();
		$('.changepassword').hide();
		$('.changeemail').hide();
		$('.changename').show();
	});
	$('#clickchangeemail').click(function(){
		$('.userinfo').hide();
		$('.changename').hide();
		$('.changepassword').hide();
		$('.changeemail').show();
	});
	$('#clickchangepassword').click(function(){
		$('.userinfo').hide();
		$('.changename').hide();
		$('.changeemail').hide();
		$('.changepassword').show();
	});
});