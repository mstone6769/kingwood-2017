<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kingwood-2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a
    class="skip-link screen-reader-text"
    href="#content"><?php esc_html_e( 'Skip to content', 'kingwood-2017' ); ?></a>
  <header id="masthead" class="site-header" role="banner">
    <div class="account-login-wrapper">
      <div class="container">
        <a
          href=""
          class="account-login"><?php esc_html_e( 'Login to My Kingwood', 'kingwood-2017' ); ?></a>
      </div>
    </div>
    

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <div class="container clear">
        <div class="site-branding">

          <?php
          if ( is_front_page() ) : ?>
            <h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kingwood-logo.svg" alt="Kingwood Church"></a></h1>
          <?php else : ?>
            <p class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kingwood-logo.svg" alt="Kingwood Church"></a></p>
          <?php
          endif;
          ?>
        </div><!-- .site-branding -->
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'kingwood-2017' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
