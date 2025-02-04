// Selección de elementos del DOM
const h = document.querySelector("#h"); // Elemento de la habitación 3D
const b = document.body; // Cuerpo del documento
const interactiveCursorDot = document.querySelector('.cursor-dot'); // Punto del cursor interactivo
const animatedRevealElements = document.querySelectorAll('.reveal-animation'); // Elementos con animación de revelado
const skillProgressBars = document.querySelectorAll('.skill-bar-fill'); // Barras de progreso de habilidades
const statisticsElements = document.querySelectorAll('.statistic-number'); // Elementos de estadísticas animadas

// Variables de control para la interacción
let isMoving = false; // Estado de movimiento
let lastTouch = { x: 0, y: 0 }; // Última posición del toque

// Función para calcular la transformación de la habitación 3D
const base = (x, y) => {
    const normalizedX = x / window.innerWidth - 0.5; // Normaliza la posición X
    const normalizedY = y / window.innerHeight - 0.5; // Normaliza la posición Y
    h.style.transform = `
        perspective(90vw)
        rotateX(${normalizedY * 180}deg)
        rotateY(${normalizedX * 360}deg)
        translateZ(-9vw)
    `; // Aplica la transformación 3D
};

// Función para manejar el movimiento del mouse/touch
const handleMove = (e) => {
    if (!isMoving) return; // Si no se está moviendo, salir

    let x, y;
    if (e.touches) { // Si hay toques (en pantallas táctiles)
        x = e.touches[0].clientX; // Obtener la posición X
        y = e.touches[0].clientY; // Obtener la posición Y
    } else { // Para mouse
        x = e.pageX; // Obtener la posición X
        y = e.pageY; // Obtener la posición Y
    }

    base(x, y); // Aplicar la transformación
};

// Eventos de movimiento del mouse/touch
b.addEventListener("pointermove", handleMove); // Manejar el movimiento del puntero
b.addEventListener("mousedown", () => { isMoving = true; }); // Iniciar movimiento con el mouse
b.addEventListener("mouseup", () => { isMoving = false; }); // Detener movimiento con el mouse
b.addEventListener("touchstart", (e) => {
    isMoving = true; // Iniciar movimiento con el toque
    lastTouch.x = e.touches[0].clientX; // Guardar posición del toque
    lastTouch.y = e.touches[0].clientY; // Guardar posición del toque
});
b.addEventListener("touchmove", handleMove); // Manejar el movimiento del toque
b.addEventListener("touchend", () => { isMoving = false; }); // Detener movimiento al levantar el toque

// Cursor Interactive Dot - Mueve el punto del cursor al mover el mouse
document.addEventListener('mousemove', (event) => {
    interactiveCursorDot.style.transform = `translate(${event.clientX}px, ${event.clientY}px) translate(-50%, -50%)`;
});

// Reveal Animations - Animación de revelado al entrar en vista
const observerConfig = {
    threshold: 0.1 // Umbral de visibilidad para el observador
};

const revealAnimationObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active'); // Agregar clase 'active' al elemento visible
        }
    });
}, observerConfig);

animatedRevealElements.forEach(element => {
    revealAnimationObserver.observe(element); // Observar cada elemento para la animación
});

// Parallax Effect - Efecto de paralaje al hacer scroll
window.addEventListener('scroll', () => {
    const parallaxSections = document.querySelectorAll('.parallax-section'); // Secciones con efecto de paralaje
    parallaxSections.forEach(section => {
        const background = section.querySelector('.parallax-bg'); // Fondo de la sección
        const scrollPos = window.pageYOffset; // Posición del scroll
        background.style.transform = `translateY(${scrollPos * 0.5}px)`; // Aplicar transformación de paralaje
    });
});

// Skill Bar Animation - Animación de las barras de habilidad
const skillBarObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const progressBar = entry.target; // Obtener la barra de progreso
            const initialWidth = progressBar.style.width; // Guardar el ancho inicial
            progressBar.style.width = '0'; // Reiniciar el ancho a 0
            setTimeout(() => {
                progressBar.style.width = initialWidth; // Restaurar el ancho inicial
            }, 50);
        }
    });
}, observerConfig);

skillProgressBars.forEach(bar => {
    skillBarObserver.observe(bar); // Observar cada barra de habilidad
});

// Animated Statistics - Contador animado de estadísticas
const statisticsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const statElement = entry.target; // Obtener el elemento de estadística
            const targetValue = parseInt(statElement.getAttribute('data-target')); // Obtener el valor objetivo
            let currentValue = 0; // Valor actual del contador

            const updateStatisticCounter = () => {
                if (currentValue < targetValue) {
                    currentValue++; // Incrementar el valor actual
                    statElement.textContent = currentValue; // Actualizar el contenido del elemento
                    requestAnimationFrame(updateStatisticCounter); // Continuar la animación
                }
            };

            updateStatisticCounter(); // Iniciar el contador
        }
    });
}, observerConfig);

statisticsElements.forEach(element => {
    statisticsObserver.observe(element); // Observar cada elemento de estadística
});
