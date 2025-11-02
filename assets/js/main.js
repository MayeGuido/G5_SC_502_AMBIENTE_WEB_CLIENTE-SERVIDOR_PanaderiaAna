const menuIcon = document.querySelector('.menu-icon');
const menuToast = document.getElementById('menu-toast');

if (menuIcon && menuToast) {
  menuIcon.addEventListener('click', () => {
    menuToast.classList.toggle('active');
  });

  // Cerrar al hacer clic fuera del contenido
  menuToast.addEventListener('click', (e) => {
    if (e.target === menuToast) {
      menuToast.classList.remove('active');
    }
  });
}