<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kingwood-2017
 */

?>
<a href="<?=esc_url( get_permalink() ) ?>" rel="bookmark" id="post-<?php the_ID(); ?>" <?php post_class(); ?> title="<?php the_title_attribute(); ?>">

  <div class="audio-image background-image" <?php if ( has_post_thumbnail() ) : ?>style="background-image: url('<?php the_post_thumbnail_url(); ?>')"<?php endif; ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>"/>
    <?php endif; ?>
  </div>
  <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
</a>
