document.addEventListener("DOMContentLoaded", function () {

  const swiper = new Swiper(".swiper.services", {
    loop: true,
    slidesPerView: 1.3,
    spaceBetween: 10,
    // centeredSlides: true,
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
        // centeredSlides: false,
      },
    },
  });

});

  // toogle para menu de servicios
  document.addEventListener("DOMContentLoaded", () => {
  const dropdownItem = document.querySelector(".has-dropdown");
  const toggle = dropdownItem.querySelector(".menu-toggle");
  const menu = dropdownItem.querySelector(".dropdown");

  const openMenu = () => {
    menu.classList.remove("opacity-0", "invisible", "translate-y-2");
    menu.classList.add("opacity-100", "visible", "translate-y-0");
    toggle.setAttribute("aria-expanded", "true");
    
  };

  const closeMenu = () => {
    menu.classList.add("opacity-0", "invisible", "translate-y-2");
    menu.classList.remove("opacity-100", "visible", "translate-y-0");
    toggle.setAttribute("aria-expanded", "false");
 
  };

  toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    const isOpen = toggle.getAttribute("aria-expanded") === "true";
    isOpen ? closeMenu() : openMenu();
  });

  document.addEventListener("click", (e) => {
    if (!dropdownItem.contains(e.target)) {
      closeMenu();
    }
  });
});