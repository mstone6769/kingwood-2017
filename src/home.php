<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kingwood-2017
 */

get_header(); ?>


	<div class="hero">
		<div class="hero-content">
			<h1 class="headline">Welcome Home</h1>
			<p class="text">Service Times: Sundays &bull; 9:00am &bull; 10:30am</p>

		</div>
	</div>
	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<div class="media-block current-series clear">
				<div class="media-content">
					<h2>Current Series</h2>
					<p>Blurb</p>
				</div>

				<img class="media-image" src="http://www.kingwoodchurch.com/wp-content/uploads/2017/02/I-AM-Web-Banner.jpg">
			</div>
			
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
