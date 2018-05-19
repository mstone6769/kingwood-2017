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

get_header(); 

if (is_front_page()) { ?>
<div class="hero">
		<?php if (shortcode_exists( 'simple-slider' )) : do_shortcode( '[simple-slider]' ); endif; ?>

		<div class="pic-shade"></div>
		<div class="hero-content">
			<h1 class="headline"><?php

					if(get_field('hero_headline'))
					{
						echo get_field('hero_headline');
					}

			?></h1>
			
			<?php

					if(get_field('hero_text'))
					{
						echo get_field('hero_text');
					}

			?>

		</div>
		<a href="#main" class="arrow bounce"><?php esc_html_e( 'Next Section', 'kingwood-2017' ); ?></a>
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="wrapper">
				<div class="container">
					<div class="grid grid-2">

						<div class="column">
							<?php

								// if (shortcode_exists( 'sermons' )) {
							 //  	echo do_shortcode( '[sermons posts_per_page="1" paging="no"]hello[/sermons]' );
							 //  }

							$args = array(
								'posts_per_page'   => 1,
								'offset'           => 0,
								'category'         => '',
								'category_name'    => '',
								'orderby'          => 'meta_value',
								'meta_key'         => 'sermon_date',
								'order'            => 'DESC',
								'include'          => '',
								'exclude'          => '',
								'post_type'        => 'wpfc_sermon',
								'post_mime_type'   => '',
								'post_parent'      => '',
								'author'	   => '',
								'author_name'	   => '',
								'post_status'      => 'publish',
								'suppress_filters' => false 
							);
							$latest_cpt = get_posts($args);

							 ?>
							<a href="<?=esc_url( get_permalink($latest_cpt[0]->ID) ); ?>" rel="bookmark" class="card cream">
								<?=get_the_post_thumbnail($latest_cpt[0]->ID, 'thumbnail'); ?>
								<h2><span>Latest Message:</span> <?=get_the_title($latest_cpt[0]->ID); ?></h2>
							</a>
						</div>

						<div class="column">
						<?php

					if(get_field('service_info_text'))
					{
						echo get_field('service_info_text');
					}

			?>
							
						</div>
						
						
					</div>

					<?php

						// check if the repeater field has rows of data
						if( have_rows('ctas') ):

							echo '<ul class="grid grid-4">';

						 	// loop through the rows of data
						    while ( have_rows('ctas') ) : the_row(); ?>

						   <li>
								  <a href="<?=the_sub_field('link'); ?>" class="card card-with-image">
								  	<img src="<?=the_sub_field('image'); ?>">
								  	<h3><?=the_sub_field('label'); ?></h3>
								  </a>
								</li>


						 <?php   endwhile;

						 echo '</ul>';

						else :

						    // no rows found


						endif;

?>
				</div>
			</section>
			<section class="wrapper cream">
				<div class="container">
					
					<div class="grid grid-2">
						
						<div>
							<h2 class="section-header"><a href="/events/">Upcoming Events</a></h2>
							<ul class="grid grid-2 grid-tight">
								
							<?php


							  if (shortcode_exists( 'events_list' )) {
							  	echo do_shortcode( '[events_list limit="4"]<li><a href="#_EVENTURL" class="card"><h3>#_EVENTNAME</h3><p>#_EVENTDATES<br>#_EVENTTIMES</p></li>[/events_list]' );
							  }
							?>

							</ul>
							<a href="/events/" class="cta-link">See all</a>
						</div>
						<div>
							<?php if(get_field('featured_upcoming_event')) : ?>

								<?php



								   $post_object = get_field('featured_upcoming_event');
								   $post = $post_object;
								   setup_postdata( $post );  ?>

								<a href="<?=esc_url( get_permalink() ); ?>" rel="bookmark" class="card cream">
									<?=get_the_post_thumbnail($post_object->ID, 'thumbnail'); ?>
									<h2><?=get_field('event_dates'); ?></h2>
								</a>
								<?php  wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					</div>
					
				</div>
			</section>
			<section class="wrapper cta-wrapper">
				<h2 class="text-center section-header"><a href="/next-steps">Next Steps</a></h2>
				<p class="text-center section-subheader">If you take the next step that God gives you, you will end up where you are supposed to go</p>

				<?php get_template_part( 'template-parts/content', 'next-steps' ); ?>
			</section>
			
			
			<?php
			// while ( have_posts() ) : the_post();

			// 	get_template_part( 'template-parts/content', 'page' );

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;

			// endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php 
 // if standard page
} else {

?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>

			<?php if (get_field('show_next_steps_menu')): ?>
				<?php get_template_part( 'template-parts/content', 'next-steps' ); ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

	get_sidebar();
}
get_footer();
