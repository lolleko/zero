jQuery(document).ready(function ($) {

	$container = $('#page-cntnr');
        $container.imagesLoaded(function(){
            $container.masonry({
                itemSelector: '.post',
                "gutter": 40
            });

            $(".post").fadeIn(0, function(){
                $(".post").fadeTo('fast', 1);
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
            $('.post').css('width','100%');
            $('#header-image-cntnr').css('width','100%');
            $('#header-image-cntnr').css({ 'margin-left' : '0', 'margin-right' : '30px' });
            $('#header-image-cntnr').css('margin-top', '40px');
            $('#header-cntnr').css('margin-top', '-40px');
            $('#page-wrap').css('margin-bottom', '0');
            $('.depth-1').css('margin-top','0');
        }else{
            $('.post').css('margin-top','');
            $('.post').css('width','770');
            $('#header-image-cntnr').css({ 'margin-left' : '', 'margin-right' : '' });
            $('#header-image-cntnr').css('margin-top', '');
            $('#header-image-cntnr').css('width','770');
            $('#header-cntnr').css('margin-top', '');
            $('#page-wrap').css('margin-bottom', '');
            $('.depth-1').css('margin-top','');
        }
        if (docWidth <= 570) {
            $('#sidebar-inner').css('width','100%');
        }else{
            $('#sidebar-inner').css('width','570');
        }
        $container.masonry();
    }

    $('#header-menu').toggle(function(){
        $('#sidebar-cntnr').css('display', 'block');
        $('#header-menu').addClass('header-menu-active');
        $(document.body).css('overflow', 'hidden');
    },function(){
        $('#sidebar-cntnr').css('display', 'none');
        $('#header-menu').removeClass('header-menu-active');
        $(document.body).css('overflow', 'scroll');
    });

});

