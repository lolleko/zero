jQuery(document).ready(function($) {

	var headerInner = $('#header-inner');
	headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);
	$('#sidebar-cntnr').css('height', $('#page-cntnr').height()-210);

	$(window).scroll(function(){
  		
     	scroll = $(window).scrollTop();

     	var headerTitle = $('.header-title-cntnr');
		if (scroll >= 90) headerTitle.addClass('header-title-fixed');
  		else headerTitle.removeClass('header-title-fixed');
	});

	$(window).on('resize', function(){
		var headerInner = $('#header-inner');
		headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);
		$('#sidebar-cntnr').css('height', $('#page-cntnr').height()-210);
	});
});

