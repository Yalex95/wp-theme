<?php
$servicios = [

  [
    'title' => 'Diagnóstico de Pozos',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_diagnostico.webp',
  ],
  [
    'title' => 'Automatizacion de sistemas',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_automatizacion.webp',
    'class' => 'button-padding'
  ],
  [
    'title' => 'Equipamiento de pozos de agua',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_equipamiento.webp',
    'class' => 'button-padding'
  ],
  [
    'title' => 'Mantenimiento a pozos de agua y equipos de bombeo',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_mantenimiento.webp',
    'class' => 'button-padding'
  ],
  [
    'title' => 'Servicios especiales',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_automatizacion.webp',
  ],
  [
    'title' => 'Electrificacion de pozos',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_equipamiento.webp',
  ],
];


?>

<section id="servicios-especializados" class=" w-full  flex flex-col md:gap-y-[60px] gap-[30px] "
  aria-labelledby="servicios-title">
  <h2 class="capitalize max-w-[320px]  md:max-w-[1620px]  w-full mx-auto">Servicios <span>Especializados</span></h2>


  <div class=" md:max-w-[1720px]  xl:max-w-[1720px] 2xl:max-w-[1720px]  w-full ms-auto">
    <div class="flex flex-col items-center md:items-start  justify-center md:flex-row gap-[39px] md:gap-[30px]">

      <?php
      get_template_part(
        'template-parts/components/swiper-cards/service-card',
        null,
        [
          'title' => 'Perforación de Pozos',
          'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_perforacion.webp',
          'class' => 'static-slide service max-w-[280px]'
        ],
      )
        ?>
      <div class="swiper services ">
        <div class="flex flex-row gap-[30px] absolute top-0 w-fit">
          <button class="servicios-prev bg-red  swiper-button-prev ">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow_prev.webp') ?>" alt=""
              aria-hidden="true">
          </button>

          <button class="servicios-next bg-red  swiper-button-next ">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow.webp') ?>" alt=""
              aria-hidden="true">
          </button>
        </div>
        <div class="swiper-wrapper ">
          <?php
          $counter = 0;
          foreach ($servicios as $servicio) { ?>
            <!-- !w-[230px] md:!w-[350px] -->
            <div class="swiper-slide md:!w-[350px]  ">
              <?php
              get_template_part(
                'template-parts/components/swiper-cards/service-card',
                null,
                $servicio
              ); ?>
            </div>
          <?php } ?>
        </div>

      </div>
    </div>

  </div>

  <div
    class="max-w-[280px]  md:max-w-[1620px]  w-full mx-auto mt-[10px] flex flex-col gap-[37px] md:gap-[30px] items-center md:items-start">
    <p class="text-[16px] md:text-[20px] w-full max-w-[280px] md:max-w-[606px]">Soluciones integrales para el Óptimo
      funcionamiento de su pozo de Agua.</p>
    <button id="catalog"
      class="bg-green-dark text-white uppercase inline-flex gap-[8px] items-center justify-center w-full md:w-fit">
      descargar catalogo
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/download_icon.webp') ?>"
        alt="download icon" class="max-h-[22px]" width="22" height="22">
    </button>
  </div>
  <div class="flex flex-col justify-center items-center max-w-[280px] md:max-w-[1200px] mx-auto gap-[30px]">
    <h3 class="text-center"><span class="font-bold text-[16px] md:text-[22px]">Cada proyecto que asumimos es un
        compromiso hacia la excelencia operativa.
      </span><span class="text-[16px] md:text-[20px]">Nuestro equipo de ingenieros y
        técnicos certificados escucha tu necesidad, analiza tu entorno y propone una solución hecha a la medida.</span>

    </h3>
    <p class="text-center font-bold text-[22px] md:text-[26px]"><span class="text-green-dark">Así, no solo óperas hoy —
        óperas con certeza para el
        mañana.</span></p>
  </div>
  <a href="#" class="button-link-contact uppercase bg-red text-white mx-[10px] text-center md:mx-auto md:w-fit cursor-pointer"> Recibir Atención Personalizada</a>
</section>