<!-- overlay mobil -->
<div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>
<!-- navegacion mobil -->
<nav id="mobile-menu">
  <button class="close-mobile-menu" id="close-mobile-menu">&times;</button>
  <!-- top bar -->
  <div class="top-bar-mobile">
    <div class="phone-lang-mobile">
      <div class="lang-mobile">
        <button class="active text-red">ESP</button>
        <span>/</span>
        <button>ENG</button>
      </div>
      <div class="phone-mobile ">
        <a href="tel:+3326765010" class="bg-green-light">33 2676 5010</a>
        <a href="tel:+3326765010" class="bg-green-light">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/whatsapp_pw.webp') ?>" width="20"
            height="20" alt="whatsapp">
        </a>
      </div>
    </div>
    <div class="secondary-menu mt-6">
      <?php
      wp_nav_menu([
        'theme_location' => 'top_bar',
        'container' => false,
        'menu_class' => 'secondary-menu uppercase',
        'fallback_cb' => false
      ]);
       if (!has_nav_menu('top_bar')): ?>
        <a class="uppercase" href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a>
        <a class="uppercase" href="<?php echo get_permalink(get_page_by_path('contacto')); ?>">Contacto</a>
      <?php endif; ?>
    </div>

    
  </div>
  <!-- menu principal -->
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container' => false,
    'menu_class' => 'primary-menu uppercase',
    'fallback_cb' => false
  ]);
  ?>
  <!-- Fallback si no hay menu -->
  <?php if (!has_nav_menu('primary')): ?>
    <ul class="primary-menu">
      <li class="menu-item has-dropdown">
        <button class="menu-toggle mobile-dropdown-toggle" aria-expanded="false">
          Servicios
        </button>
        <ul class="dropdown">
          <li><a href="#">Diagnostico de pozos</a></li>
          <li><a href="#">Automatizacion de sistemas</a></li>
          <li><a href="#">Equipamiento de pozos</a></li>
          <li><a href="#">Mantenimiento</a></li>
          <li><a href="#">Servicios especiales</a></li>
          <li><a href="#">Electrificacion</a></li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#nosotros">Nosotros</a>
      </li>
    </ul>
  <?php endif; ?>
</nav>