document.addEventListener('DOMContentLoaded', function() {
  // Submenú configuración
  const toggle = document.querySelector('.config-toggle');
  const submenu = document.querySelector('.submenu');
  toggle.addEventListener('click', function(e) {
    e.preventDefault();
    submenu.classList.toggle('show');
  });

  // Sidebar responsivo (hamburguesa)
  const hamburger = document.querySelector('.hamburger');
  const sidebar = document.querySelector('.sidebar');
  hamburger.addEventListener('click', function() {
    sidebar.classList.toggle('expanded');
  });
});