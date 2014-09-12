<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package get_lucky
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
    			<?php $count = 1;
                    $col_count = 3;
                    $num_of_posts = $wp_query->post_count;
                    $post_per_column = ceil($num_of_posts / $col_count); ?>
                    <div class="col-sm-4">
                    <?php while (have_posts()) : the_post(); ?>
                    
                      <div class="post" id="post-<?php the_ID(); ?>">
                        <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                        <div class="descr"><?php the_time('l, F jS Y '); ?></div>
                        <div class="entry">
                          <?php the_content('Read the rest of this entry &raquo;'); ?>
                        </div>
                      </div>
                    
                      <?php if($count == $post_per_column) { echo '</div><div class="col-sm-4">'; }
                      if($count == 2*$post_per_column) { echo '</div><div class="col-sm-4">'; }
                      $count++;
                      endwhile;
                    ?>
                </div><!--end #col sm 4 -->

			<?php get_lucky_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- #primary -->
	
	
		<?php get_sidebar('primary');?>
		
		<?php get_footer(); ?>
