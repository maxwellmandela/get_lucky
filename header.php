<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="container">
 *
 * @package get_lucky
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<<<<<<< HEAD
<!--<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../../../../js/bootstrap.min.js"></script>
<script src="js/scroll.js"></script>-->
<script type="text/javascript" src="http://localhost/docs/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/docs/ih_server/style/pure/bootstrap.min.js"></script>

=======
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../../../../js/bootstrap.min.js"></script>
<script src="js/scroll.js"></script>
>>>>>>> eb679e95e2d8a5b678291b11a1d17ae6c84006df

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' );  ?>

<nav class="site-navigation container">		
				<div class="navbar navbar-default">
					<div class="navbar-header">
				    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				    	<span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>
				
				    <!-- Your site title as branding in the menu -->
				    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				    <span class="navbar-brand" style="font-size:0.9em;"><?php bloginfo( 'description' ); ?></span>
				  </div>

			    <!-- The WordPress Menu goes here -->
	        <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker'  => new wp_bootstrap_navwalker()
                )
            ); ?>
        
				
				</div><!-- .navbar -->
</nav><!-- .site-navigation -->
	<div class="container">
		<div class="col-sm-8 grid">