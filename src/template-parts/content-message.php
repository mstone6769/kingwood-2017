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

  <div class="audio-image background-image shade" <?php if ( has_post_thumbnail() ) : ?>style="background-image: url('<?php the_post_thumbnail_url(); ?>')"<?php endif; ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>"/>
    <?php endif; ?>
  </div>
  <header class="entry-header">
    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
    <?php echo get_taxonony_toDisplay($post->ID, 'wpfc_sermon_series' ); ?>
  </header>
  <span class="entry-play">
    <svg  name="entry-play" viewBox="0 0 1000 1000">
      <use class="play-button-circle" xlink:href="#play-button-circle"></use>
      <use class="play-button-triangle" xlink:href="#play-button-triangle"></use>
    </svg>
  </span>
</a>
