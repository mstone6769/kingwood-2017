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

	<?php


  if (get_field('show_sibling_menu') && shortcode_exists( 'sibling-pages' )) {
  	echo '<div class="entry-menu sibling-menu entry-menu-top">';
		echo do_shortcode( '[sibling-pages depth="1" sort_column="menu_order"]' );
		echo '</div>';
	}

  if (get_field('show_child_menu') && shortcode_exists( 'child-pages' )) {
  	echo '<div class="entry-menu child-menu entry-menu-top">';
		echo do_shortcode( '[child-pages depth="1" sort_column="menu_order"]' );
		echo '</div>';
	}
?>

	<div class="entry-content">
		<?php
			the_content(); ?>


		<?php	wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kingwood-2017' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

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

<?php
	  if (get_field('show_sibling_menu') && shortcode_exists( 'sibling-pages' )) {
	  	echo '<div class="entry-menu sibling-menu  entry-menu-bottom">';
			echo do_shortcode( '[sibling-pages depth="1" sort_column="menu_order"]' );
			echo '</div>';
		}
	?>

