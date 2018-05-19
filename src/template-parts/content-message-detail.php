<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kingwood-2017
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header <?php
		if (is_single() ) {
			echo 'entry-post';
		}
		?>">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php kingwood_2017_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div class="entry-thumbnail-container">
            <a style="display: block" href="javascript:;" onclick="toggleAudio()" class="entry-thumbnail" id="entry-thumbnail">
                <div>
                    <div class="audio-image background-image" <?php if ( has_post_thumbnail() ) : ?>style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')"<?php endif; ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                        <?php endif; ?>
                    </div>
                    <span class="entry-play">
                        <svg  name="entry-play" viewBox="0 0 1000 1000">
                            <use class="play-button-circle" xlink:href="#play-button-circle"></use>
                            <use class="play-button-triangle" xlink:href="#play-button-triangle"></use>
                        </svg>
                    </span>
                    <span class="entry-pause">
                        <svg name="entry-pause" viewBox="0 0 70 100">
                            <use xlink:href="#pause-icon"></use>
                        </svg>
                    </span>
                </div>
            </a>
            <?php if ( get_field('sermon_audio') ) : ?>
            <div class="entry-audio">
                <audio id="entry-audio-player" controls="" preload="metadata" class="entry-audio">
                    <source src="<?php the_field('sermon_audio'); ?>">
                </audio>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="entry-meta">
            <div><?php echo wpfc_sermon_date('F j, Y'); ?></div>
            <div><?php echo the_terms($post->ID,'wpfc_preacher','',', ',' '); ?></div>
            <div><?php echo the_terms($post->ID,'wpfc_sermon_series','Series: ',', ',''); ?></div>
       </div>

		<?php

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kingwood-2017' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php kingwood_2017_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
