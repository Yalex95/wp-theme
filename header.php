<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Preconnect si usas Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <a class="skip-link screen-reader-text" href="#main">
    Skip to content
  </a>

  <header class="site-header">

    <div class="container">

      <!-- Logo -->
      <div class="site-branding">
        <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
        <?php else : ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-title">
          <?php bloginfo('name'); ?>
        </a>
        <?php endif; ?>
      </div>

      <!-- Navigation -->
      <nav class="main-navigation" aria-label="Primary Menu">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'menu',
          'fallback_cb'    => false
        ]);
      ?>
      </nav>

    </div>

  </header>