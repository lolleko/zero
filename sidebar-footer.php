<?php

if (!is_active_sidebar('footer_widget_area1')
     && !is_active_sidebar('footer_widget_area2')
     && !is_active_sidebar('footer_widget_area3')
    )

    return;

?>

<div id="footer-sidebar">
<?php
if (is_active_sidebar('footer_widget_area1')) :
?>
    <div id="footer-widget-area1">
        <?php dynamic_sidebar('footer_widget_area1'); ?>
    </div>
<?php
endif;
?>
<?php
if (is_active_sidebar('footer_widget_area2')) :
?>
    <div id="footer-widget-area2">
        <?php dynamic_sidebar('footer_widget_area2'); ?>
    </div>
<?php
endif;
?>
<?php
if (is_active_sidebar('footer_widget_area3')) :
?>
    <div id="footer-widget-area3">
        <?php dynamic_sidebar('footer_widget_area3'); ?>
    </div>
<?php
endif;
?>
</div>
<?php
