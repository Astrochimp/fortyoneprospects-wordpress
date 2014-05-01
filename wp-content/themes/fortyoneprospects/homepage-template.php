<?php
/*
 * Template Name: Homepage Template
 *
 * @package landscape
*/

get_header(); ?>

<div id="page" class="hfeed site">
	<div id="content" class="site-content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $more; $more = 0; ?>

			<section class="featuresection" >

				<?php the_content('<a href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>.'); ?>
				
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'landscape' ), 'after' => '</div>' ) ); ?>

			</section>

	<?php endwhile; ?>
	</div>
</div>

<?php


		$args=array(
		   'post_type'=>'page',
		   'post__not_in' => array(5,14,16,18),
		   'post_status' => 'publish'
		);
		query_posts($args);




?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $more; $more = 0; ?>

			<section class="pagesection" id="page<?php the_ID(); ?>">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>
					
				</article>
			</section>

	<?php endwhile; ?>

<?php get_footer(); ?>