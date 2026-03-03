 document.addEventListener('DOMContentLoaded', function() {
      const mobileMenu = document.getElementById('mobile-menu');
      const openBtn = document.getElementById('open-mobile-menu');
      const closeBtn = document.getElementById('close-mobile-menu');
      const overlay = document.getElementById('mobile-menu-overlay');
      const body = document.body;
      
      // Funcion para abrir menu
      function openMobileMenu() {
        mobileMenu.classList.add('open');
        overlay.classList.add('active');
        body.classList.add('menu-open');
        openBtn.setAttribute('aria-expanded', 'true');
      }
      
      // Function para cerrar menu
      function closeMobileMenu() {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('active');
        body.classList.remove('menu-open');
        openBtn.setAttribute('aria-expanded', 'false');
      }
      
      // abrir menu
      if (openBtn) {
        openBtn.addEventListener('click', function(e) {
          e.preventDefault();
          openMobileMenu();
        });
      }
      
      // cerrar menu con boton x
      if (closeBtn) {
        closeBtn.addEventListener('click', function(e) {
          e.preventDefault();
          closeMobileMenu();
        });
      }
      
      // cerrar menu haciendo click en el overlay
      if (overlay) {
        overlay.addEventListener('click', function() {
          closeMobileMenu();
        });
      }
      
      // Manego toggle del dropdown 
      const dropdownToggles = document.querySelectorAll('#mobile-menu .menu-toggle, #mobile-menu .mobile-dropdown-toggle');
      
      dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          
          // toggle clase active en el boton
          this.classList.toggle('active');
          
          const dropdown = this.nextElementSibling;
          if (dropdown && dropdown.classList.contains('dropdown')) {
            dropdown.classList.toggle('show');
            
            
            const expanded = this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true';
            this.setAttribute('aria-expanded', expanded);
          }
        });
      });
      
      // Cerrar con key esc
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
          closeMobileMenu();
        }
      });
      
      // Evitar que los clics dentro del menu móvil lo cierren
      if (mobileMenu) {
        mobileMenu.addEventListener('click', function(e) {
          e.stopPropagation();
        });
      }
      
      // manejo del rezie 
      window.addEventListener('resize', function() {
        if (window.innerWidth >= 768 && mobileMenu.classList.contains('open')) {
          closeMobileMenu();
        }
      });
    });