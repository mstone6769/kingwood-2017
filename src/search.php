<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kingwood-2017
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main post-lists" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="entry-header entry-post">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'kingwood-2017' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="container posts-container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile; ?>
			</div>
			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
