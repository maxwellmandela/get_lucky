<?php
<<<<<<< HEAD

/**
* Check if user is logged in
* Else wp_redirect(wp_login_url());
* I sort of like this instead of plugins
*/
if(is_user_logged_in()){


=======
>>>>>>> eb679e95e2d8a5b678291b11a1d17ae6c84006df
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

<<<<<<< HEAD
	<?php if ( have_posts() ) :
	/* Start the Loop */
    $count = 1;
    $col_count = 3;
    $num_of_posts = $wp_query->post_count;
    $post_per_column = ceil($num_of_posts / $col_count); ?>
    <div class="col-sm-4">
    <?php while (have_posts()) : the_post(); ?>
    
        <div class="post" id="post-<?php the_ID(); ?>">
        <h1><a  class="titlePost" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <div class="descr"><?php the_time('l, F jS Y '); ?></div>
        <div class="entry">
          <?php if(has_post_thumbnail()){
              ?> <img class="img-responsive" scr="<?php the_post_thumbnail();?> <?php
            }
          the_excerpt(); ?>
        </div>
      </div>
    
      <?php if($count == $post_per_column) { echo '</div><div class="col-sm-4">'; }
      if($count == 2*$post_per_column) { echo '</div><div class="col-sm-4">'; }
      $count++;
      endwhile;
    ?>
    </div><!--end #col sm 4 -->

		<?php get_lucky_paging_nav(); ?>
=======
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
    			<?php $count = 1;
                    $col_count = 3;
                    $num_of_posts = $wp_query->post_count;
                    $post_per_column = ceil($num_of_posts / $col_count); ?>
                    <div class="col-sm-4">
                    <?php while (have_posts()) : the_post(); ?>
                    
                        <div class="post" id="post-<?php the_ID(); ?>">
                        <h1><a  class="titlePost" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                        <div class="descr"><?php the_time('l, F jS Y '); ?></div>
                        <div class="entry">
                            <?php if(has_post_thumbnail()){
                                ?> <img class="img-responsive" scr="<?php the_post_thumbnail();?> <?php
                            } ?>
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                    
                      <?php if($count == $post_per_column) { echo '</div><div class="col-sm-4">'; }
                      if($count == 2*$post_per_column) { echo '</div><div class="col-sm-4">'; }
                      $count++;
                      endwhile;
                    ?>
                </div><!--end #col sm 4 -->

			<?php get_lucky_paging_nav(); ?>
>>>>>>> eb679e95e2d8a5b678291b11a1d17ae6c84006df

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</div><!-- #primary -->
	
	
		<?php get_sidebar('primary');?>
		 <?php get_footer(); ?>
			
<div class="container-fluid footerContent" style="margin-top: 30px;" id="about">
    <div class="col-sm-4"><?php get_sidebar('footer1')?></div>
    <div class="col-sm-4"><?php get_sidebar('footer2')?></div>
    <div class="col-sm-4"><?php get_sidebar('footer3')?></div>
<<<<<<< HEAD

<?php
/**
* If user not logged in
* Redirect to wp_login_url()
*/
  }else{
    wp_redirect(wp_login_url());
  }
=======
    
>>>>>>> eb679e95e2d8a5b678291b11a1d17ae6c84006df
