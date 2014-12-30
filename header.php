<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body class="custom-background">
		<div id ="header-cntnr">
			<div id="header-inner">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
			</div>
		</div>
		<div class="header-title-cntnr">
			<span class="header-title-inner">
				<a class="header-title-cntnt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</span>
		</div>
		<div id="header-image-cntnr">
        <?php if ( get_header_image() ):?>
			<a class="header-image-cntnt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img id="header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</a>
        <?php endif; ?>
		</div>
<?php get_sidebar(); ?>
		<div id="page-wrap">
			<div id="page-cntnr">
