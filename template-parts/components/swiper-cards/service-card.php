<?php
$title = $args['title'] ?? '';
$image = $args['image'] ?? '';
$img_small = $args['img_small'] ?? '';
$link = $args['link'] ?? '#';
$alt = $args['alt'] ?? $title;
$class = $args['class'] ?? '';
?>

<article class="<?php echo esc_attr($class); ?> service-card group bg-white   md:max-w-[350px] w-full ">
  <a href="<?php echo esc_url($link); ?>" class="block relative w-full aspect-square overflow-hidden">

    <img 
    src="<?php echo esc_url($img_small); ?>" 
    srcset="<?php echo esc_url($img_small).' 280w,'.esc_url($image) . ' 350w,';?>"
    sizes="(max-width: 640px) 280px, 280px"
    alt="<?php echo esc_attr($alt); ?>" 
    width="350" height="350"
    loading="lazy" 
    class="w-full h-full object-cover" />
  </a>
  <div class="mt-6">
    <a id="button-link" href="<?php echo esc_url($link); ?>"
      class="inline-flex items-center justify-between w-full bg-red text-white font-semibold uppercase gap-[20px]">

      <span><?php echo esc_html($title); ?></span>

      <span aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow.webp') ?>" alt="arrow icon">
      </span>
    </a>
  </div>
</article>