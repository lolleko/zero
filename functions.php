<?php
defined('ABSPATH') or die("No script kiddies please!");

function zero_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'header_color' , array(
            'default'     => '#D74E3E',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_setting( 'main_color' , array(
            'default'     => '#D74E3E',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_setting( 'background_color' , array(
            'default'     => '#c4b37b',
            'transport'   => 'refresh',
    ) );
    $wp_customize->add_section( 'color' , array(
            'title'      => __( 'Color', 'mytheme' ),
            'priority'   => 30,
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'logo_color', array(
            'label'        => __( 'Logo Color', 'mytheme' ),
            'section'    => 'color',
            'settings'   => 'header_color',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
            'label'        => __( 'Main Color', 'mytheme' ),
            'section'    => 'color',
            'settings'   => 'main_color',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
            'label'        => __( 'Background Color', 'mytheme' ),
            'section'    => 'color',
            'settings'   => 'background_color',
    ) ) );
}
add_action( 'customize_register', 'zero_customize_register' );

function zero_customize_css()
{
    ?>
         <style type="text/css">
            body,html{
                background-color: #<?php echo get_theme_mod('background_color'); ?>;
            }
            .header-title-inner
            {
                color: #fff;
                background-color: <?php echo get_theme_mod('header_color'); ?>;
                padding: 2px;
            }
            .post-information{
                background-color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .tag a{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .sidebar-title{
                color: <?php echo get_theme_mod('main_color'); ?>;
            }
            .sidebar-widget{
                border-left: <?php echo get_theme_mod('main_color'); ?> solid 5px;
            }
            #calendar_wrap a{
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
        array('jquery')
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