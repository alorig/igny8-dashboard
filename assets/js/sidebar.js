document.addEventListener('DOMContentLoaded', function () {
  // Toggle submenu on section click
  document.querySelectorAll('.menu-section').forEach(function(section) {
    section.addEventListener('click', function() {
      const submenu = section.nextElementSibling;
      if (submenu && submenu.classList.contains('submenu')) {
        submenu.classList.toggle('open');
      }
    });
  });

  // Auto-open the section containing the active link
  const activeLink = document.querySelector('.submenu a.active');
  if (activeLink) {
    const submenu = activeLink.closest('.submenu');
    if (submenu) submenu.classList.add('open');
  }
}); 