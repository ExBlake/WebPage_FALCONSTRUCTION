document.addEventListener('DOMContentLoaded', function() {
    // Variables
    const navToggle = document.getElementById('navToggle');
    const closeMenu = document.getElementById('closeMenu');
    const fullscreenMenu = document.getElementById('fullscreenMenu');
    const menuItems = document.querySelectorAll('.menu-item-header');
    const menuImage = document.querySelector('.menu-image-header');
    const languageToggles = document.querySelectorAll('.language-toggle-header span');

    // Abrir menú
    navToggle.addEventListener('click', () => {
        fullscreenMenu.classList.add('active');
    });

    // Cerrar menú
    closeMenu.addEventListener('click', () => {
        fullscreenMenu.classList.remove('active');
    });

    // Hover efecto en los items del menú
    menuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const imageUrl = item.getAttribute('data-image');
            menuImage.style.backgroundImage = `url(${imageUrl})`;
            menuImage.style.opacity = '0.2';
        });

        item.addEventListener('mouseleave', () => {
            menuImage.style.opacity = '0';
        });
    });

    // Toggle de idioma
    languageToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            // Remover clase active de todos
            languageToggles.forEach(t => t.classList.remove('active'));
            // Añadir clase active al seleccionado
            toggle.classList.add('active');
        });
    });
});