<?php
/*
 * Template Name: Homepage Template
 *
 * @package landscape
*/

get_header(); ?>


<section class="featuresection" id="intro">
        <h1>Welcome to 41 Prospects</h1>
        <p>
        Focused on bringing our clients into the 21st century, we specialize in understanding where your company has been and working with you to define where it needs to go.

        </p>
        <p>
            <button type="button" class="btn-lg page-scroll" href="#seeourwork">
                <span class="glyphicon glyphicon-arrow-right"></span>
               	See Our Work
            </button>

             <button type="button" class="btn-lg page-scroll" href="#getintouch">
                <span class="glyphicon glyphicon-arrow-down"></span>
                Get in Touch
            </button>
        </p>

</section>





		<div id="homepage-primary" class="content-area">
			<div id="intro" class="home-site-content" role="main">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); global $more;
$more = 0; ?>

						<div class="home-entry-content">
							<?php the_content('<a href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>.'); ?>
							
							<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'landscape' ), 'after' => '</div>' ) ); ?>

						</div><!-- .entry-content -->

				<?php endwhile; ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>