<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body>
<div id="sidebar-cntnr">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary_sidebar') ) :
	endif; ?>
</div>

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

<div class="header-description">
	<?php echo get_bloginfo( 'description', 'display' ); ?>
</div>

<div id="page-cntnr">
	<div id="content-cntnr">
		<!-- Start the Loop. -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post-default">
				<div class="post-information">
					<div class="post-author-cntnr">
						<div class="post-avatar-cntnr">
							<?php echo get_avatar( get_the_author_meta('ID'), 64); ?>
						</div>
						<div class="post-ainfo-cntnr">
							<?php the_author_posts_link(); ?>
						</div>
					</div>
					<div class="post-tags-cntnr">
						<?php the_tags('<div class="tag">','</div><div class="tag">','</div>'); ?>
					</div>
					<div class="post-dinfo-cntnr">
						<?php the_date(); ?>
					</div>
				</div>
			 	<?php if ( in_category( '3' ) ) : ?>
			 	<div class="post-cat-three">
			 	<?php else : ?>
			 	<div class="post">
			 	<?php endif; ?>

				 	<h2 style="color: #D74E3E; background-color: white;"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				 	<div class="entry">
				 		<?php the_content(); ?>
				 	</div>
			 	</div>
			</div>
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>	
<div id="footer-cntnr">
		
</div>
</body>
</html>