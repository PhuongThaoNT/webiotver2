$(function(){
	$('.tgv').hide();
	$('.khoahoc').hide();
	$(function(){
		$('.clicktgv').click(function(){
			$('.tgv').show();
			$('.khoahoc').hide();
		});
		$('.clicktkh').click(function(){
			$('.khoahoc').show();
			$('.tgv').hide();
		});
		$(".clickloadgv").click(function(){
			$('.')
		});
	});
});
$(function(){
  $('#form-upload').ajaxForm({
    complete: function(xhr) {
      // Add response text to div #result
      $('#result').html(xhr.responseText);
    }
  });
});