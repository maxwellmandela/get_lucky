<?php
/**
 * The template for displaying all single posts.
 *
 * @package get_lucky
 */

get_header(); ?>

	

		<?php  while ( have_posts() ) : the_post(); ?>
                <?php if(has_post_thumbnail()){
                                ?> <img style="margin-top: 10px;" class="img-responsive" scr="<?php the_post_thumbnail();?> <?php
                    } ?>
			<?php get_template_part( 'content', 'single' ); ?>

			<?php get_lucky_post_nav(); ?>

			<?php/*
				If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
         * */
			?>

		<?php endwhile; //end of the loop. ?>
		
</div><!-- #primary -->

		<?php get_sidebar('primary'); ?>
		<?php get_footer(); ?>
		
<div class="container-fluid footerContent" style="margin-top: 30px;" id="about">
    <div class="col-sm-4"><?php get_sidebar('footer1')?></div>
    <div class="col-sm-4"><?php get_sidebar('footer2')?></div>
    <div class="col-sm-4"><?php get_sidebar('footer3')?></div>