<?php
defined('ABSPATH') or die("No script kiddies please!");

function zero_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'main_color' , array(
            'default'     => '#e14d43',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
            'label'        => __( 'Main Color', 'zero' ),
            'section'    => 'colors',
            'settings'   => 'main_color',
    ) ) );

    $wp_customize->add_setting( 'header_tagline_color' , array(
            'default'     => '#ffffff',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_tagline_color', array(
            'label'        => __( 'Header Tagline Color', 'zero' ),
            'section'    => 'colors',
            'settings'   => 'header_tagline_color',
    ) ) );

    $wp_customize->add_setting( 'header_bg_color' , array(
            'default'     => '#363b3f',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
            'label'        => __( 'Header Background Color', 'zero' ),
            'section'    => 'colors',
            'settings'   => 'header_bg_color',
    ) ) );

    $wp_customize->add_setting( 'post_format_color' , array(
            'default'     => 'color',
            'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'post_format_color',
        array(
            'label'          => __( 'Color of post formats.', 'zero' ),
            'section'        => 'colors',
            'settings'       => 'post_format_color',
            'type'           => 'radio',
            'choices'        => array(
                'color'  => __( 'Colored background white text' ),
                'white'   => __( 'White background colored text' )
            )
        )
    )
    );

    $wp_customize->add_setting( 'menu_position' , array(
            'default'     => 'right',
            'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(
	'menu_position',
	array(
		'label'    => __( 'Menu position', 'zero' ),
		'section'  => 'colors',
		'settings' => 'menu_position',
		'type'     => 'radio',
		'choices'  => array(
			'left'  => __( 'Left' ),
			'right' => __( 'Right' ),
		),
	)
    );

    $wp_customize->add_setting( 'menu_screen_size' , array(
            'default'     => 'false',
            'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(
	'menu_screen_size',
	array(
		'label'    => __( 'Display menu if screen large enough?', 'zero' ),
		'section'  => 'colors',
		'settings' => 'menu_screen_size',
		'type'     => 'radio',
		'choices'  => array(
			'true'  => __( 'Yes' ),
			'false' => __( 'No' ),
		),
	)
    );

}
add_action( 'customize_register', 'zero_customize_register' );

function zero_customize_css()
{
    ?>
         <style type="text/css">
            .comment-reply-link,
            .header-menu-active,
            .entry-title
            {
                color: <?php echo get_theme_mod('main_color'); ?>!important;
            }
            <?php if ( get_theme_mod('post_format_color') == 'white' ) : ?>
            .entry-title-link{
                background-color: #fff;
                color: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .entry-title-link a:hover{
                background-color: <?php echo get_theme_mod('main_color'); ?>;
                color: #fff;
            }
            .format-quote .post-edit-link, .format-audio .post-edit-link, .format-link .post-edit-link{
                color: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .entry-footer-white,
            .format-quote .entry-content{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .entry-content blockquote{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .wp-playlist-caption, .wp-playlist-item-length{
                color: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .wp-playlist-playing{
                background: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .wp-playlist-playing .wp-playlist-caption,
            .wp-playlist-playing .wp-playlist-item-length{
                color: #fff !important;
                background: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .format-quote .mejs-controls .mejs-time-rail .mejs-time-current{
                background: #fff;
            }
            .format-audio .mejs-container, .format-audio .mejs-controls{
                background: <?php echo get_theme_mod('main_color'); ?> !important;
            }

            <?php else : ?>
            .entry-title-link a:hover{
                background-color: #fff;
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .entry-title-link{
                background-color: <?php echo get_theme_mod('main_color'); ?> !important;
                color: #fff !important;
            }
            .entry-header-quote .entry-title,
            .entry-header-audio .entry-title,
            .format-quote .post-edit-link, .format-audio .post-edit-link, .format-link .post-edit-link{
                color: #fff !important;
            }
            .entry-footer-white,
            .format-quote .entry-content,
            .format-audio .entry-content{
                color: #fff;
            }
            .format-quote .entry-content blockquote{
                color: #fff !important;
            }
            .entry-content blockquote{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .format-quote,
            .format-audio,
            .format-link,
            .format-quote{
                background: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .wp-playlist{
                background: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .wp-playlist-caption, .wp-playlist-item-length{
                color: #fff !important;
            }
            .wp-playlist-playing .wp-playlist-caption,
            .wp-playlist-playing .wp-playlist-item-length{
                color: <?php echo get_theme_mod('main_color'); ?> !important;
                background: #fff !important;
            }
            .format-audio .mejs-container, .format-audio .mejs-controls{
                background: none !important;
            }
            <?php endif;?>
            <?php if ( get_theme_mod('menu_position') == 'left' ) : ?>
            #header-menu{
                float:left;
                color: <?php echo get_theme_mod('header_tagline_color'); ?>;
            }
            #sidebar-cntnr{
                left: 0;
            }
            #header-title-cntnr{
                margin-left: 8px;
            }
            <?php else : ?>
            #header-menu{
                float:right;
                color: <?php echo get_theme_mod('header_tagline_color'); ?>;
            }
            #sidebar-cntnr{
                right: 0;
            }
            #header-title-cntnr{
                margin-left: 5%;
            }
            <?php endif;?>

            /*Menu stays open*/
            <?php if ( get_theme_mod('menu_screen_size') == 'true' ) : ?>
            @media screen and (min-width: 1080px) {
            <?php if ( get_theme_mod('menu_position') == 'left' ) : ?>
                #page-wrap{
                    margin-left: 300px;
                }
            <?php else : ?>
                #page-wrap{
                    margin-right: 300px;
                }
            <?php endif;?>
                #sidebar-cntnr{
                    display: block !important;
                }
                #header-menu{
                    display: none;
                }
            }
            @media screen and (min-width: 1920px) {
                #page-cntnr{
                    width: 1580px;
                }
                #header-image-cntnr{
                    width: 1580px;
                }
                #footer-cntnr{
                    width: 1580px;
                }
            }
            <?php else : ?>
            @media screen and (min-width: 1600px) {
                #page-cntnr{
                    width: 1580px;
                }
                #header-image-cntnr{
                    width: 1580px;
                }
                #footer-cntnr{
                    width: 1580px;
                }
            }
            <?php endif;?>
            #header-cntnr{
                background-color: <?php echo get_theme_mod('header_bg_color'); ?>;
            }
            #header-inner{
                color: <?php echo get_theme_mod('header_tagline_color'); ?>;
            }
            .post, .type-page{
                background-color: white;
            }
            #header-title-inner
            {
                color: #fff;
                background-color: <?php echo '#' . get_header_textcolor(); ?>;
            }
            .search-form{
                border-color: <?php echo get_theme_mod('main_color'); ?>;
            }
            /*font color */
            .menu-item:hover,
            .menu-item:active,
            .menu-item:focus,
            .current-menu-item,
            .sidebar-widget a,
            .format-standard .entry-content a,
            .format-gallery .entry-content a,
            .format-aside .entry-content a,
            .format-video .entry-content a,
            .more-link,
            .comment-reply-link,
            #header-menu:active
            {
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .comment-form-author, .comment-form-email, .comment-form-url{
                border-bottom: 2px <?php echo get_theme_mod('main_color'); ?> solid;
            }

            #comment-form-respond-container textarea{
                border: 2px <?php echo get_theme_mod('main_color'); ?> solid;
            }
            /*background color*/
            .tag a,
            .tagcloud a,
            #wp-calendar tbody td a,
            #comment-form-respond-container input[type=submit]
            {
                background: <?php echo get_theme_mod('main_color'); ?>;
            }
            /*bgcolor important*/
         </style>
    <?php
}
add_action( 'wp_head', 'zero_customize_css');

function zero_enqueue_scripts() {
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'));
    wp_enqueue_script('masonry');
    wp_enqueue_script(
        'animation',
        get_template_directory_uri() . '/js/animation.js',
        array('jquery','masonry')
    );
}

add_action( 'wp_enqueue_scripts', 'zero_enqueue_scripts' );

function zero_widgets_init() {
    //primary 
    register_sidebar( array(
        'name' => 'Primary Widget Area',
        'id' => 'primary_widget_area',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="sidebar-title">',
        'after_title' => '</div>',
    ) );
    //footer
    register_sidebar( array(
        'name' => 'Footer Widget Area',
        'id' => 'footer_widget_area',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="sidebar-title">',
        'after_title' => '</div>',
    ) );
}
add_action( 'widgets_init', 'zero_widgets_init' );

function zero_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'zero_register_menu' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

$headerArgs = array(
    'width'         => 1440,
    'height'        => 400,
);
add_theme_support( 'custom-header', $headerArgs );

$backgroundArgs = array(
    'default-color' => '000000',
);
add_theme_support( 'custom-background', $backgroundArgs );

add_theme_support( 'post-formats', array( 'image', 'gallery', 'quote', 'link', 'video', 'aside', 'audio' ) );

add_theme_support( 'post-thumbnails', array( 'post' ) );

add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

add_filter( 'use_default_gallery_style', '__return_false' );

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

function first_image($type = 'anchor') {
    global $post, $posts;
    $url = '';
    ob_start();
    ob_end_clean();
    if($type === 'image'){
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $url = $matches[0][0];
    } else{
        $output = preg_match_all('/<a.+href=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $url = $matches[0][0];
    }

    if(empty($url)) {
        $url = "/path/to/default.png";
    }
    return $url;
}
