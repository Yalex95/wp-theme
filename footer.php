<footer class="bg-primary text-white">
  <div id="footer-container" class="max-w-[1620px] mx-auto ">

    <!-- Top Grid -->
    <div class=" gap-8 md:gap-0 md:max-w-[1520px] mx-auto grid grid-cols-1 md:grid-cols-[330px_970px_250px] ">

      <!-- Logo + Dirección -->
      <section class="md:mr-[80px]">
        <div class="mb-[20px] md:mb-[50px]">
          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          if ($logo):
            ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="md:h-[58px] md:w-[250px] mx-auto md:ms-auto" width="250"
                height="59" />
            </a>
            <!-- logo fallback -->
          <?php else: ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" >
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp"
                alt="<?php bloginfo('name'); ?>" width="250" height="59" class="md:h-[58px] md:w-[250px] mx-auto md:ms-auto">
            </a>
          <?php endif; ?>
        </div>

        <address class="not-italic leading-relaxed md:text-[15px]">
          <strong>Dirección:</strong><br>
          C. Nueva Orleans 1127, La Aurora,<br>
          44460 Guadalajara, Jal.
        </address>
      </section>

      <section class="md:mr-[20px]">
        <!-- Nosotros -->
        <nav aria-label="Nosotros">
          <h3 class="capitalize tracking-wider mb-[10px] md:mb-[20px]">Nosotros</h3>
        </nav>

        <!-- Servicios -->
        <nav aria-labelledby="footer-servicios-title">
          <h3 id="footer-servicios-title" class="capitalize tracking-wider mb-4">Servicios</h3>
          <?php
          wp_nav_menu([
            'theme_location' => 'footer-servicios',
            'container' => false,
            'menu_class' => 'space-y-2 opacity-80',
            'fallback_cb' => false
          ]);
          ?>
          <!-- fallback si no hay menu -->
          <?php if (!has_nav_menu('footer-servicios')): ?>
            <ul id="services" class="list-disc marker:text-xs grid grid-cols-3 md:grid-cols-4 md:text-[15px]">
              <li>
                <a href="#perforacion-pozos-profundos" class="hover:text-white  transition">
                  Perforación de Pozos Profundos
                </a>
              </li>
              <li>
                <a href="#diagnostico-pozo-profundo" class="hover:text-white  transition">
                  Diagnóstico de Pozo Profundo
                </a>
              </li>
              <li>
                <a href="#automatizacion-sistemas-bombeo" class="hover:text-white  transition">
                  Automatización y Sistemas de Bombeo
                </a>
              </li>
              <li>
                <a href="#equipamiento-pozo-agua" class="hover:text-white  transition">
                  Equipamiento de Pozo de Agua
                </a>
              </li>
              <li>
                <a href="#mantenimiento-pozos-agua-equipos-bombeo" class="hover:text-white  transition">
                  Mantenimiento a Pozos de Agua y Equipos de Bombeo
                </a>
              </li>
              <li>
                <a href="#servicios-especiales" class="hover:text-white  transition">
                  Servicios Especiales
                </a>
              </li>
              <li>
                <a href="#electrificacion-pozos" class="hover:text-white  transition">
                  Electrificación de Pozos
                </a>
              </li>


            </ul>
          <?php endif; ?>
        </nav>
      </section>

      <!-- ESR + Social -->
      <section class="flex flex-col items-center md:items-start justify-between gap-8 md:gap-0 mt-[30px]">

        <img
          src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/empresa_socialmente_responsable.webp'); ?>"
          alt="Empresa Socialmente Responsable" width="200" height="79" />

        <div class="flex gap-4">
          <a href="#" class="hover:text-green-light transition">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/icons/Facebook.webp'); ?>" width="40"
              height="40" alt="facebook" class="md:w-[200px] md:h-[79px]">
          </a>
          <a href="#" class="hover:text-green-light transition">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/icons/Instagram.webp'); ?>"
              width="40" height="40" alt="instagram">
          </a>
        </div>

      </section>

    </div>

    <!-- Divider -->
    <div class="my-[20px] border-t border-white"></div>


    <!-- Bottom -->
    <div class="flex gap-[20px]  flex-col justify-center items-center ">

      <a href="#" class="w-full text-center font-bold md:text-[18px]">
        Aviso de Privacidad
      </a>

      <div class="grid grid-cols-1 md:grid-cols-3 w-full text-center md:text-start gap-4 md:gap-0 md:text-[15px]">
        <p class="text-[#505050]">Envíanos tu cotización al correo:
          <br/>
          <a class="text-white " href="mailto:Contacto@powerandwells.com">Contacto@powerandwells.com</a>
        </p>
        <p class="text-center">

          <?php bloginfo('name'); ?>® <br/>
          Todos los derechos reservados © <?php echo date('Y'); ?>
        </p>
      </div>

    </div>

  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>