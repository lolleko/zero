<?php if ( is_active_sidebar( 'primary_widget_area' ) ) : ?>
<div id="sidebar-cntnr">
    <div id="sidebar-inner">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary_widget_area') ) :
        endif; ?>
    </div>
</div>
<?php endif; ?>
