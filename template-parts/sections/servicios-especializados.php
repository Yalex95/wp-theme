<?php
$servicios = [

  [
    'title' => 'Diagnóstico de Pozos',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_diagnostico.webp',
  ],
  [
    'title' => 'Automatizacion de sistemas',
    'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_automatizacion.webp',
    'class'=> 'button-padding'
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

<section id="servicios-especializados" class=" w-full  flex flex-col md:gap-y-[135px] gap-[30px]" aria-labelledby="servicios-title">
  <h2 class="capitalize max-w-[320px]  md:max-w-[1620px]  w-full mx-auto">Servicios <span>Especializados</span></h2>


<div class=" md:max-w-[1720px]  xl:max-w-[1720px] 2xl:max-w-[1920px]  w-full ms-auto">
    <div class="flex flex-col items-center md:items-start  justify-center md:flex-row md:gap-[30px]">
    <?php
      get_template_part(
        'template-parts/components/swiper-cards/service-card',
        null,
        [
          'title' => 'Perforación de Pozos',
          'image' => get_template_directory_uri() . '/assets/images/servicio_especializado_perforacion.webp',
          'class'=> 'static-slide'
        ],
      )
        ?>
      <div class="swiper services ">
       
        <div class="swiper-wrapper">
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
                );  ?>
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