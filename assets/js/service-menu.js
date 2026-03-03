  document.addEventListener("DOMContentLoaded", () => {
  const dropdownItem = document.querySelector(".has-dropdown");
   if (!dropdownItem) return;
  const toggle = dropdownItem.querySelector(".menu-toggle");
  const menu = dropdownItem.querySelector(".dropdown");
 if (!toggle || !menu) return;
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