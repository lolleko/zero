<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body>
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