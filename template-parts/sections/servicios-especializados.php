<?php
$servicios = [

  [
    'title' => 'Diagnóstico de Pozos',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_diagnostico.webp',
  ],
  [
    'title' => 'Automatizacion de sistemas',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_automatizacion.webp',
  ],
  [
    'title' => 'Equipamiento de pozos de agua',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_equipamiento.webp',
  ],
  [
    'title' => 'Mantenimiento a pozos de agua y equipos de bombeo',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_mantenimiento.webp',
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

<section id="servicios-especializados" class="max-w-[1720px]  w-full ms-auto flex md:flex-col gap-y-[135px]" aria-labelledby="servicios-title">
  <h2 class="capitalize">Servicios <span>Especializados</span></h2>


<div>
    <div class="flex gap-[30px]">
    <?php
      get_template_part(
        'template-parts/components/swiper-cards/service-card',
        null,
        [
          'title' => 'Perforación de Pozos',
          'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_perforacion.webp',
        ],
      )
        ?>
      <div class="swiper services ">
        <div class="flex gap-[30px] absolute top-0 left-0 z-10">
          <button class="servicios-prev bg-red p-3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow_prev.webp') ?>" alt=""
              aria-hidden="true">
          </button>
    
          <button class="servicios-next bg-red p-3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow.webp') ?>" alt=""
              aria-hidden="true">
          </button>
        </div>
        <div class="swiper-wrapper">
          <?php foreach ($servicios as $servicio) { ?>
            <div class="swiper-slide !w-[350px]">
              <?php get_template_part(
                'template-parts/components/swiper-cards/service-card',
                null,
                $servicio
              ); ?>
            </div>
          <?php } ?>
        </div>
    
      </div>
    </div>
    <p>Soluciones integrales para el Óptimo funcionamiento de su pozo de Agua.</p>
    <button id="catalog" class="bg-green-dark text-white uppercase inline-flex gap-[8px] items-center justify-center">
      descargar catalogo
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/download_icon.webp' )?>" alt="download icon" class="max-h-[22px]" width="22" height="22">
    </button>
</div>
</section>