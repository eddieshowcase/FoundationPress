<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action( 'foundationpress_after_body' ); ?>

  <?php do_action( 'foundationpress_layout_start' ); ?>

  <header id="masthead" class="site-header" role="banner">

    <nav id="site-navigation" class="main-navigation" role="navigation">

      <div class="nav-bar flex-row flex-wrap" role="navigation">

        <div class="flex-column-grow nav-left">
          <div class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </div>
        </div>
        <div class="flex-column-grow nav-right">
          <?php wp_nav_menu( array(
            'container'      => false,
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'          => 3,
            'fallback_cb'    => false,
            'walker'         => new Foundationpress_Top_Bar_Walker(),
          )); ?>
        </div>

      </div>

    </nav>

  </header>

  <section class="container">
    <?php do_action( 'foundationpress_after_header' );
