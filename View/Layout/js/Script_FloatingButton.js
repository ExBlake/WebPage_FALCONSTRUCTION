document.addEventListener("DOMContentLoaded", () => {
    const mainButton = document.getElementById("main-button");
    const socialIcons = document.querySelectorAll(".social-icons-floating .social-icon");
    let isOpen = false;

    mainButton.addEventListener("click", () => {
        isOpen = !isOpen;
        mainButton.classList.toggle("open-flotante");

        // Actualizar el icono y el aria-label según el estado
        if (isOpen) {
            // Cuando se abre el menú, se muestra la "X"
            mainButton.innerHTML = `<i class="fa-solid fa-plus" style="color: #74C0FC;"></i>`;
            mainButton.setAttribute("aria-label", "Cerrar menú de redes sociales");
        } else {
            // Cuando se cierra el menú, se muestra el icono de plus
            mainButton.innerHTML = `<i class="fa-solid fa-plus" style="color: #74C0FC;"></i>`;
            mainButton.setAttribute("aria-label", "Abrir menú de redes sociales");
        }

        socialIcons.forEach((icon, index) => {
            setTimeout(() => {
                icon.classList.toggle("show-flotante");
            }, isOpen ? index * 100 : (socialIcons.length - index - 1) * 100);
        });
    });
});
