<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package get_lucky
 */

if ( ! is_active_sidebar( 'primary' )){
    //active_sidebar( 'sidebar-1' or woocommmerce
	return;
}
?>
<div class="col-sm-3 col-sm-offset-1 grid" style="direction: rtl;">
	<div id="sidebar">
		<?php  // Widgetized sidebar, if you have the plugin installed
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary') ) : ?> 
		<?php endif; ?>
	</div><!--close sidebar--->
