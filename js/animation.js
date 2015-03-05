jQuery(document).ready(function ($) {

	$container = $('#page-cntnr');

    $container.imagesLoaded(function(){
        $container.masonry({
            itemSelector: '.post',
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

