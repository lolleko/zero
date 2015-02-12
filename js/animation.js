jQuery(document).ready(function ($) {

	$container = $('#page-cntnr');
        $container.imagesLoaded(function(){
            $container.masonry({
                itemSelector: '.post',
                "gutter": 30
            });

            $(".post").fadeIn(0, function(){
                mobileOpt();
            });
        });

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

    function mobileOpt() {
        docWidth = $(window).width();
        if (docWidth <= 770) {
            $('.post').css('margin-top','0');
            $('#header-image-cntnr').css({ 'margin-left' : '0', 'margin-right' : '30px' });
            $('#header-image-cntnr').css('margin-top', '40px');
            $('#header-cntnr').css('margin-top', '-40px');
            $('#page-wrap').css('margin-bottom', '0');
        }else{
            $('.post').css('margin-top','');
            $('#header-image-cntnr').css({ 'margin-left' : '', 'margin-right' : '' });
            $('#header-image-cntnr').css('margin-top', '');
            $('#header-cntnr').css('margin-top', '');
            $('#page-wrap').css('margin-bottom', '');
        }
        $container.masonry();
    }

    $('#header-menu').toggle(function(){
        $('#sidebar-cntnr').css('display', 'block');
        $('#header-menu').addClass('header-menu-active');
    },function(){
        $('#sidebar-cntnr').css('display', 'none');
        $('#header-menu').removeClass('header-menu-active');
    });

});

