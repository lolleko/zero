<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, maximum-scale=1">
	</head>
	<body class="custom-background">
		<header id="header-cntnr">
            <div id="header-inner">
            <?php if ( get_theme_mod('menu_position') == 'left' ) : ?>
                <button id="header-menu"></button>
			 <?php endif;?>
                <div id="header-title-cntnr">
                    <span id="header-title-inner">
                        <a id="header-title-cntnt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </span>
                    <span id="header-title-description"><?php bloginfo( 'description'); ?></span>
                </div>
			<?php if ( get_theme_mod('menu_position') == 'right' ) : ?>
                <button id="header-menu"></button>
            <?php endif;?>
            </div>
		</header>
            <?php get_sidebar(); ?>
		<div id="page-wrap">
            <div id="header-image-cntnr">
            <?php if ( get_header_image() ):?>
                <a id="header-image-cntnt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img id="header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                </a>
            <?php endif; ?>
            </div>
			<div id="page-cntnr">
