jQuery(document).ready(function($) {

	var headerInner = $('#header-inner');
	headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);
	$('#sidebar-cntnr').css('height', $('#content-cntnr').height()-210);

	var container = document.querySelector('#content-cntnr');
	var msnry = new Masonry( container, {
	  	// options...
	  	itemSelector: '.post-default'
	});

	$(window).scroll(function(){
  		
     	scroll = $(window).scrollTop();

     	var headerTitle = $('.header-title-cntnr');
		if (scroll >= 90) headerTitle.addClass('header-title-fixed');
  		else headerTitle.removeClass('header-title-fixed');
	});

	$(window).on('resize', function(){
		var headerInner = $('#header-inner');
		headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);
		$('#sidebar-cntnr').css('height', $('#content-cntnr').height()-210);
	});
});

