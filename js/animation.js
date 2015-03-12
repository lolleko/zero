jQuery(document).ready(function ($) {

	$container = $('#page-cntnr');

    $container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.post, .page',
            "gutter": 40
        });

        $(".post").fadeIn(0, function(){
            $(".post").fadeTo('fast', 1);
            $container.masonry();
        });
    });

    $(window).load(function () {
        $container.masonry();
    });

	$(window).resize(function () {
        $container.imagesLoaded(function(){
            $container.masonry();
        });
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

    var toggle = false;
    $('#header-menu').on('click', function(event){
        event.stopPropagation();
        event.preventDefault();
        $('#sidebar-cntnr').animate({width: 'toggle'},200);
        if(!toggle){
            $('#header-menu').addClass('header-menu-active');
            $('body, #page-wrap').css('overflow', 'hidden');
            $('#page-wrap').stop(true,true).fadeTo(200, 0.6);
            $('#page-cntnr, #header-image-cntnr').css('pointer-events', 'none');
            toggle = true;
        }else{
            $('#header-menu').removeClass('header-menu-active');
            $('body, #page-wrap').css('overflow', 'auto');
            $('#page-wrap').stop(true,true).fadeTo(200, 1);
            $('#page-cntnr, #header-image-cntnr').css('pointer-events', 'auto');
            toggle = false;
        }
    });

    $('#page-wrap').on('touchstart click', function(){
        event.stopPropagation();
        $('#sidebar-cntnr').hide();
        $('#header-menu').removeClass('header-menu-active');
        $('body, #page-wrap').css('overflow', 'auto');
        $('#page-wrap').stop(true,true).fadeTo(200, 1);
        $('#page-cntnr, #header-image-cntnr').css('pointer-events', 'auto');
        toggle = false;
    });

});

