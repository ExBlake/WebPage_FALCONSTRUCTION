document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('navToggle');
    const fullscreenMenu = document.getElementById('fullscreenMenu');
    const menuItems = document.querySelectorAll('.menu-item');
    const menuImage = document.querySelector('.menu-image');

    navToggle.addEventListener('click', () => {
        fullscreenMenu.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    });

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const imageSrc = item.getAttribute('data-image');
            menuImage.style.backgroundImage = `url(${imageSrc})`;
            menuImage.style.opacity = '0.2';
        });

        item.addEventListener('mouseleave', () => {
            menuImage.style.opacity = '0';
        });
    });
});

const menuItems = document.querySelectorAll('.menu-item');
const menuImage = document.querySelector('.menu-image');

menuItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        const imageSrc = item.getAttribute('data-image');
        menuImage.style.backgroundImage = `url(${imageSrc})`;
        menuImage.style.opacity = '0.3'; // Reducida para mejor contraste con el texto
    });

    item.addEventListener('mouseleave', () => {
        menuImage.style.opacity = '0';
    });
});