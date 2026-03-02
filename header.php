<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header bg-primary text-white">
    <div class="top-bar hidden md:block">
      <div class="container md:max-w-[1620px] mx-auto px-4 border-white border-b">
        <div id="top-bar-container" class="flex flex-wrap items-center justify-center ">

          <div class="flex items-center ">
            <?php
            wp_nav_menu([
              'theme_location' => 'secondary',
              'container' => false,
              'menu_class' => 'flex space-x-6 items-center uppercase',
              'fallback_cb' => false
            ]);
            ?>

            <!-- Fallback si no hay menú -->
            <?php if (!has_nav_menu('secondary')): ?>
              <ul id="menu-top-bar" class="flex space-x-6 items-center uppercase">
                <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24"><a
                    href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a></li>
                <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25"><a
                    href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Contacto</a></li>
              </ul>

            <?php endif; ?>
          </div>

          <!-- Right side: Phone and Language Switcher -->
          <div id="phone-lang" class="flex items-center ">
            <!-- Phone -->
            <div id="phone-container" class="flex ">
              <a href="tel:+3326765010" id="phone" class="bg-green-light text-white ">
                33 2676 5010
              </a>
              <!-- whatsapp -->
              <a href="tel:+3326765010" id="whatsapp" class="bg-green-light text-white ">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/whatsapp_pw.webp') ?>"
                  width="26.36" height="26.48" alt="pw whatsapp" class="object-contain">
              </a>
            </div>

            <!-- Language Switcher -->
            <div class="language-switcher flex items-center ">
              <button class=" text-red font-extrabold">ESP</button>
              <span class="text-white">/</span>
              <button class=" transition hover:text-red font-extrabold">ENG</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Navigation -->
    <nav class="main-nav">
      <div class="container md:max-w-[1620px] md:px-[50px] mx-auto ">
        <div class="flex flex-wrap items-center justify-between">
          <!-- Logo -->
          <div class="logo">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if ($logo):
              ?>
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto" width="250" height="59" />
              </a>
              <!-- logo fallback -->
            <?php else: ?>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp"
                  alt="<?php bloginfo('name'); ?>" class="h-10 w-auto" width="250" height="59">
              </a>
            <?php endif; ?>
          </div>

          <!-- Main Menu -->
          <div class="main-menu hidden md:block">
            <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'primary-menu',
              'fallback_cb' => false
            ]);
            ?>

            <!-- Fallback si no hay menú -->
            <?php if (!has_nav_menu('primary')): ?>
              <ul id="menu-main-nav" class="primary-menu">
                <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22"><a
                    href="#services">Servicios</a></li>
                <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a
                    href="#nosotros">Nosotros</a></li>
              </ul>
            <?php endif; ?>
          </div>

          <!-- Mobile Menu Button -->
          <button class="mobile-menu-button md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </nav>

  </header>