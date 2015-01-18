jQuery(document).ready(function ($) {
	$container = $('#page-cntnr');

	$container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.post'
        });

        $(".post").fadeIn();
	});

	$(window).resize(function () {
		$container.masonry();
	});

	$(window).scroll(function(){
  		
     	scroll = $(window).scrollTop();

     	var headerTitle = $('.header-title-cntnr');
		if (scroll >= 88) headerTitle.addClass('header-title-fixed');
  		else headerTitle.removeClass('header-title-fixed');
	});
});

