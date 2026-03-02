document.addEventListener("DOMContentLoaded", function () {

  const swiper = new Swiper(".swiper.services", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    // autoplay: {
    //   delay: 4000,
    // },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

});