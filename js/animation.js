jQuery(document).ready(function ($) {

	/*
    var headerInner = $('#header-inner');
	headerInner.css('margin-left', $(document).width() / 2 - headerInner.width() / 2);
    */

	var container = document.querySelector('#page-cntnr');

	imagesLoaded( container, function() {
		var msnry = new Masonry( container, {
  			itemSelector: '.post'
		});

		$(".post").fadeIn();
	});

	$(window).scroll(function(){
  		
     	scroll = $(window).scrollTop();

     	var headerTitle = $('.header-title-cntnr');
		if (scroll >= 78) headerTitle.addClass('header-title-fixed');
  		else headerTitle.removeClass('header-title-fixed');
	});
    /*
	$(window).on('resize', function(){
		var headerInner = $('#header-inner');
		headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);
	});
    */

});

