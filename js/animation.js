jQuery(document).ready(function($) {

	var headerInner = $('#header-inner');
	headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);

	var container = document.querySelector('#content-cntnr');
	var msnry = new Masonry( container, {
	  	// options...
	  	itemSelector: '.post-default'
	});

	/*$('.post-default').each(function( index ) {
		var postH = $( this ).height();
		console.log(index + ': ' + postH);
		$('.post-information').each(function( indexi ) {
			if (postH <= 300) {
				console.log(indexi + " :" + $(this).height())
				$('.post-information').eq(index).css('display','none');
				$('.post').eq(index).css('width','728px');
				$('.post').eq(index).css('margin-left','1px');
				$('.post').eq(index).css('border-left','4px #d74e3e solid');

			}
		});
	});*/

	$(window).scroll(function(){
  		
     	scroll = $(window).scrollTop();

     	var headerTitle = $('.header-title-cntnr');
		if (scroll >= 90) headerTitle.addClass('header-title-fixed');
  		else headerTitle.removeClass('header-title-fixed');
	});

	$(window).on('resize', function(){
		var headerInner = $('#header-inner');
		headerInner.css('margin-left', $( document ).width()/2 - headerInner.width()/2);
	});
});

