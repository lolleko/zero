jQuery(document).ready(function ($) {
	$container = $('#page-cntnr');

	$container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.post'
        });

        $(".post").fadeIn();
	});

    mobileOpt();

    $(window).load(function () {
        $container.masonry();
    });

	$(window).resize(function () {
        mobileOpt();
	});

    $( document.body ).on( 'post-load', function () {
        $container.masonry( 'reloadItems' );

        $container.imagesLoaded(function(){
            $container.masonry({
                itemSelector: '.post'
            });

            $(".post").fadeIn();
        });

        $container.masonry( 'reloadItems' );
    } );

	$(window).scroll(function(){
  		
     	scroll = $(window).scrollTop();

     	var headerTitle = $('.header-title-cntnr');
		if (scroll >= 88) headerTitle.addClass('header-title-fixed');
  		else headerTitle.removeClass('header-title-fixed');

	});

    function mobileOpt() {
        docWidth = $(window).width();
        if($('#sidebar-cntnr').length) {
            if (docWidth <= 1120) {
                $('#sidebar-cntnr').css('display', 'none');
                $('#page-wrap').css('margin-right', '0px');
            } else {
                $('#sidebar-cntnr').css('display', 'block');
                $('#page-wrap').css('margin-right', '290px');
            }
        }
        if (docWidth <= 770) {
            $('.post').css('margin','0');
            $('#header-image-cntnr').css({ 'margin-left' : '0', 'margin-right' : '0' });
        }else{
            $('.post').css('margin','');
            $('#header-image-cntnr').css({ 'margin-left' : '', 'margin-right' : '' });
        }
    }
});

