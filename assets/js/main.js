document.addEventListener("DOMContentLoaded", function () {

  const swiper = new Swiper(".swiper.services", {
    loop: true,
    slidesPerView: 1.3,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      768: {
        slidesPerView: 1.5,
        spaceBetween: 10,
        
      },
      1024: {
        slidesPerView: "auto",
        spaceBetween: 30,
        loop: true,
      },
    },
  });

});

