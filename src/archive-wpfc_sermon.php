<?php get_header(); ?>

<?php include 'partials/wrapper-start.php'; ?>
<header class="entry-header entry-post">
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
</header><!-- .page-header -->
<?php if (have_posts()) : ?>
<div class="container posts-container">
<?php
	while ( have_posts() ) : the_post();
	  get_template_part( 'template-parts/content-message', get_post_format() );
	endwhile;
?>
</div>

<nav class="navigation posts-navigation" role="navigation">
  <h2 class="screen-reader-text">Posts navigation</h2>
  <div class="nav-links">
    <div class="nav-previous"><?php next_posts_link('Older') ?></div>
    <div class="nav-next"><?php previous_posts_link('Newer') ?></div>
  </div>
</nav>

<?php
else :
	get_template_part( 'template-parts/content', 'none' );
endif;
?>

<?php include 'partials/wrapper-end.php'; ?>

<?php get_footer();
