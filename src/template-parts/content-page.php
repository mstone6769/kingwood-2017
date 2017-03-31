<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kingwood-2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header entry-post">
		<div class="pic-shade"></div>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php

			if(get_field('subtitle'))
			{
				echo '<p class="text-center section-subheader">' . get_field('subtitle') . '</p>';
			}

	?>
	</header><!-- .entry-header -->
	<div class="entry-menu">

		<?php


		  if (get_field('show_sibling_menu') && shortcode_exists( 'sibling-pages' )) {
				echo do_shortcode( '[sibling-pages depth="1" sort_column="menu_order"]' );
			}

		  if (get_field('show_child_menu') && shortcode_exists( 'child-pages' )) {
				echo do_shortcode( '[child-pages depth="1" sort_column="menu_order"]' );
			}
		?>
	</div>

	<div class="entry-content">
		<?php
			the_content(); ?>


		<?php	wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kingwood-2017' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php 

			$posts = get_field('subpages');

			if( $posts ): ?>
					<div class="container cta-wrapper">
			    <div class="grid grid-5 collapse">
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>

			        	<a href="<?php the_permalink(); ?>"  class="card card-centered card-icon">
			            <?php the_post_thumbnail(); ?>
			            <?php the_title( '<h3 style="text-transform: uppercase">', '</h3>' ); ?>
			            <?php

												if(get_field('subtitle'))
												{
													echo '<p>' . get_field('subtitle') . '</p>';
												}

										?>
			        	</a>
			    <?php endforeach; ?>
			    </div>
			    </div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'kingwood-2017' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
