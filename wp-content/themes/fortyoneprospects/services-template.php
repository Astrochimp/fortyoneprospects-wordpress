<?php
/*
 * Template Name: Services Template
 *
 * @package landscape
*/

get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $more; $more = 0; ?>

			<section class="featuresection" >

				<?php the_content('<a href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>.'); ?>
				
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'landscape' ), 'after' => '</div>' ) ); ?>

			</section>

	<?php endwhile; ?>

<?php get_footer(); ?>