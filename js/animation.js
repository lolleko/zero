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
    $('#header-menu').click( function(event){
        event.stopPropagation();
        $('#sidebar-cntnr').animate({width: 'toggle'},200);
        if(!toggle){
            $('#header-menu').addClass('header-menu-active');
            $(document.body).css('overflow', 'hidden');
            $('#page-wrap').stop(true,true).fadeTo(200, 0.6);
            $('#page-wrap').css('pointer-events', 'none');
            toggle = true;
        }else{
            $('#header-menu').removeClass('header-menu-active');
            $(document.body).css('overflow', 'scroll');
            $('#page-wrap').stop(true,true).fadeTo(200, 1);
            $('#page-wrap').css('pointer-events', 'auto');
            toggle = false;
        }
    });

    $(document).on('click touch', function(){
        $('#sidebar-cntnr').hide();
        $('#header-menu').removeClass('header-menu-active');
        $(document.body).css('overflow', 'scroll');
        $('#page-wrap').stop(true,true).fadeTo(200, 1);
        $('#page-wrap').css('pointer-events', 'auto');
        toggle = false;
    });

});

