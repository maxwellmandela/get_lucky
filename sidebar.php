<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package get_lucky
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-sm-3 col-sm-offset-1 grid" style="border-left:solid #999 1px;
 direction: rtl;">

			<div id="sidebar"><ul><?php  // Widgetized sidebar, if you have the plugin installed
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?> 
			<?php endif; ?></ul>
			</div><!--close sidebar--->
