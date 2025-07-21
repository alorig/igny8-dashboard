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

  // Only Settings is collapsible
  var settingsToggle = document.querySelector('.settings-toggle');
  var settingsMenu = document.querySelector('.settings-menu .submenu');
  if (settingsToggle && settingsMenu) {
    settingsMenu.style.display = 'none';
    settingsToggle.addEventListener('click', function(e) {
      e.preventDefault();
      if (settingsMenu.style.display === 'block') {
        settingsMenu.style.display = 'none';
      } else {
        settingsMenu.style.display = 'block';
      }
    });
    // Auto-open if a settings link is active
    if (settingsMenu.querySelector('a.active')) {
      settingsMenu.style.display = 'block';
    }
  }

  // Sidebar collapse/expand
  var sidebar = document.getElementById('sidebar');
  var sidebarToggle = document.getElementById('sidebar-toggle');
  if (sidebar && sidebarToggle) {
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('collapsed');
      var icon = sidebarToggle.querySelector('.dashicons');
      if (sidebar.classList.contains('collapsed')) {
        icon.classList.remove('dashicons-arrow-left-alt2');
        icon.classList.add('dashicons-arrow-right-alt2');
      } else {
        icon.classList.remove('dashicons-arrow-right-alt2');
        icon.classList.add('dashicons-arrow-left-alt2');
      }
    });
  }
}); 