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

    $wp_customize->add_setting( 'dark_light_theme' , array(
            'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'dark_light_theme',
        array(
            'label'          => __( 'Dark or light?', 'zero' ),
            'section'        => 'colors',
            'settings'       => 'dark_light_theme',
            'type'           => 'radio',
            'choices'        => array(
                'dark'   => __( 'Dark' ),
                'light'  => __( 'Light' )
            )
        )
    )
    );
}
add_action( 'customize_register', 'zero_customize_register' );

function zero_customize_css()
{
    ?>
         <style type="text/css">
            <?php
            if(get_theme_mod('dark_light_theme') == 'dark') {
                ?>
                #header-cntnr{
                    background-color: #222;
                }
                #header-inner{
                    color:white;
                }
                .sidebar-widget{
                    background-color: white;
                }
                #footer-cntnr{
                    color: white;
                    background-color: #222;
                }
                .post-default{
                    background-color: white;
                }
                .post-footer{
                    color: black;
                }
                <?php
            } else {
                ?>
                #header-cntnr{
                    background-color: #fff;
                }
                #header-inner{
                    color:black;
                }
                .sidebar-widget{
                    background-color: rgb(60,60,60);
                    color: #DFDFDF;
                }
                #footer-cntnr{
                    color: black;
                    background-color: #fff;
                }
                .post-default{
                    background-color: rgb(60,60,60);
                    color: #DFDFDF;
                }
                .post-footer{
                    color: #DFDFDF;
                }
                <?php
            }
            ?>
            .more-link{
                color: <?php echo get_theme_mod('main_color'); ?> !important;
            }
            .header-title-inner
            {
                color: #fff;
                background-color: <?php echo '#' . get_header_textcolor(); ?>;
                padding: 2px;
            }
            .post h2{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .content-quote blockquote{
                background-color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .tag a{
                background-color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .sidebar-title{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            #calendar_wrap a{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .menu-item:hover,
            .menu-item:active,
            .hmenu-item:focus{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
         </style>
    <?php
}
add_action( 'wp_head', 'zero_customize_css');

function zero_enqueue_scripts() {
    wp_enqueue_script(
        'animation',
        get_template_directory_uri() . '/js/animation.js',
        array('jquery','masonry')
    );
    wp_enqueue_script('masonry');
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
    return '<a class="more-link" href="' . get_permalink() . '">&#8627;</a>';
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

add_theme_support( 'post-formats', array( 'image', 'gallery', 'quote' ) );

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
