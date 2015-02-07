<?php
defined('ABSPATH') or die("No script kiddies please!");

function zero_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'main_color' , array(
            'default'     => '#D74E3E',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
            'label'        => __( 'Main Color', 'zero' ),
            'section'    => 'colors',
            'settings'   => 'main_color',
    ) ) );

}
add_action( 'customize_register', 'zero_customize_register' );

function zero_customize_css()
{
    ?>
         <style type="text/css">
            #header-cntnr{
                background-color: rgba(34,34,34,0.97);
            }
            #header-inner{
                color:white;
            }
            #footer-cntnr{
                color: white;
                background-color: #222;
            }
            .post{
                background-color: white;
            }
            .entry-footer{
                color:  #777;
            }
            #header-title-inner
            {
                color: #fff;
                background-color: <?php echo '#' . get_header_textcolor(); ?>;
            }
            #searchform div{
                border-color: <?php echo get_theme_mod('main_color'); ?>;
            }
            /*font color */
            .menu-item:hover,
            .menu-item:active,
            .menu-item:focus,
            .current-menu-item,
            .sidebar-title,
            .entry-content a,
            .more-link
            {
                color: <?php echo get_theme_mod('main_color'); ?>;
            }

            .entry-title{
                color: <?php echo get_theme_mod('main_color'); ?>!important;
            }

            .entry-title-link a:hover{
                color: <?php echo get_theme_mod('main_color'); ?>!important;
            }

            /*background color*/
            .format-quote,
            .format-link,
            .tag a,
            .entry-content blockquote,
            #wp-calendar tbody td a
            {
                background-color: <?php echo get_theme_mod('main_color'); ?>;
            }
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
    //footer1
    register_sidebar( array(
        'name' => 'First Footer Widget Area',
        'id' => 'footer_widget_area1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="footer-title">',
        'after_title' => '</div>',
    ) );
    //footer2
    register_sidebar( array(
        'name' => 'Second Footer Widget Area',
        'id' => 'footer_widget_area2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="footer-title">',
        'after_title' => '</div>',
    ) );
    //footer3
    register_sidebar( array(
        'name' => 'Third Footer Widget Area',
        'id' => 'footer_widget_area3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="footer-title">',
        'after_title' => '</div>',
    ) );
}
add_action( 'widgets_init', 'zero_widgets_init' );

function zero_register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'zero_register_menu' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"> ...</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

$headerArgs = array(
    'width'         => 770,
    'height'        => 200,
);
add_theme_support( 'custom-header', $headerArgs );

$backgroundArgs = array(
    'default-color' => '000000',
);
add_theme_support( 'custom-background', $backgroundArgs );

add_theme_support( 'post-formats', array( 'image', 'gallery', 'quote', 'link', 'video' ) );

add_theme_support( 'post-thumbnails', array( 'post' ) );

add_theme_support( 'infinite-scroll', array(
    'container' => 'page-cntnr',
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
