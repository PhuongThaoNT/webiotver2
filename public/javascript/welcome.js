
$(function () {
	$('.slidehome').show();
	$('.info').hide();
	$('.contact').hide();
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