<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package get_lucky
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'get_lucky' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'get_lucky' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'get_lucky' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'get_lucky' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'get_lucky' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'get_lucky' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'get_lucky' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'get_lucky' );

						else :
							_e( 'Archives', 'get_lucky' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

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
    </div>

		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
