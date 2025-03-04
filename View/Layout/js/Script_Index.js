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


/**************************************/
/* Script para el carrusel responsive */
/**************************************/

document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelector('.items');
    let isDragging = false;
    let startX;
    let scrollLeft;

    // Opcional: definir cursor para mejorar la experiencia
    items.style.cursor = 'grab';

    // Evento cuando se inicia la acción (mouse, touch, stylus)
    items.addEventListener('pointerdown', (e) => {
        isDragging = true;
        // Registrar la posición inicial (relativa al contenedor)
        startX = e.pageX - items.offsetLeft;
        scrollLeft = items.scrollLeft;
        items.style.cursor = 'grabbing';
        // Capturar el pointer para recibir todos los eventos relacionados
        items.setPointerCapture(e.pointerId);
    });

    // Evento cuando se termina la acción
    items.addEventListener('pointerup', (e) => {
        isDragging = false;
        items.style.cursor = 'grab';
        items.releasePointerCapture(e.pointerId);
    });

    // Si el pointer sale del área del contenedor
    items.addEventListener('pointerleave', (e) => {
        isDragging = false;
        items.style.cursor = 'grab';
    });

    // Evento de movimiento
    items.addEventListener('pointermove', (e) => {
        if (!isDragging) return;
        // Prevenir comportamientos por defecto
        e.preventDefault();
        // Calcular la nueva posición y la distancia recorrida
        const x = e.pageX - items.offsetLeft;
        const walk = (x - startX) * 2; // Puedes ajustar el multiplicador para mayor o menor velocidad
        items.scrollLeft = scrollLeft - walk;
    });
});

// Script para mostrar/ocultar botones según el tamaño de la ventana
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll(".container-4 > .ver-mas-btn");

    function updateButtonVisibility() {
        if (window.innerWidth <= 1024) {
            buttons[0].style.display = "block"; // Muestra el botón de arriba
            buttons[1].style.display = "none";  // Oculta el botón de abajo
        } else {
            buttons[0].style.display = "none";  // Oculta el botón de arriba
            buttons[1].style.display = "block"; // Muestra el botón de abajo
        }
    }

    // Ejecutar la función al cargar la página y al redimensionar la ventana
    updateButtonVisibility();
    window.addEventListener("resize", updateButtonVisibility);
});

/**************************************/
/* Script para el carrusel responsive */
/**************************************/

/* Script para la Room 3D */
const h = document.querySelector("#h");
const b = document.body;

let base = (e) => {
    var x = e.pageX / window.innerWidth - 0.5;
    var y = e.pageY / window.innerHeight - 0.5;
    h.style.transform = `
perspective(1250px)
rotateX(${y * 4 + 75}deg)
rotateZ(${-x * 12 + 45}deg)
translateZ(-9vw)
`;
}

b.addEventListener("pointermove", base);
/* Script para la Room 3D */

/* Script para la segunda sección Inicio */
const images = document.querySelectorAll('.image');
let activeImage = null;

images.forEach(img => {
    img.addEventListener('mouseenter', function () {
        if (activeImage && activeImage !== this) {
            activeImage.style.transform = 'translate(-50%, -50%)';
            activeImage.style.zIndex = activeImage.classList.contains('back') ? '1' :
                activeImage.classList.contains('middle') ? '2' : '3';
        }
        this.style.zIndex = '4';
        this.style.transform = 'translate(-50%, -50%) scale(1.05)';
        activeImage = this;
    });

    img.addEventListener('mouseleave', function () {
        if (!this.matches(':hover')) {
            this.style.transform = 'translate(-50%, -50%)';
            this.style.zIndex = this.classList.contains('back') ? '1' :
                this.classList.contains('middle') ? '2' : '3';
            activeImage = null;
        }
    });
});

document.querySelector('.image-container').addEventListener('mouseleave', function () {
    if (activeImage) {
        activeImage.style.transform = 'translate(-50%, -50%)';
        activeImage.style.zIndex = activeImage.classList.contains('back') ? '1' :
            activeImage.classList.contains('middle') ? '2' : '3';
        activeImage = null;
    }
});

document.querySelector('.read-more').addEventListener('click', function () {
    console.log('Read More clicked!');
});
/* Script para la segunda sección Inicio */

/* Script para la sección 5 */
// Crear efecto de partículas
document.addEventListener('DOMContentLoaded', function () {
    const particlesContainer = document.getElementById('particles');
    const particleCount = 20;

    // Crear partículas
    for (let i = 0; i < particleCount; i++) {
        createParticle();
    }

    function createParticle() {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        // Posición aleatoria
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;

        // Tamaño aleatorio
        const size = Math.random() * 5 + 1;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;

        // Opacidad aleatoria
        particle.style.opacity = Math.random() * 0.5 + 0.1;

        // Añadir al contenedor
        particlesContainer.appendChild(particle);

        // Animar partícula
        animateParticle(particle);
    }

    function animateParticle(particle) {
        // Duración aleatoria
        const duration = Math.random() * 30 + 15;

        // Aplicar animación de movimiento
        particle.style.animation = `float ${duration}s infinite`;

        // Crear keyframes únicos para esta partícula
        const keyframes = `
  @keyframes float {
    0% {
      transform: translate(0, 0);
    }
    50% {
      transform: translate(${Math.random() * 100 - 50}px, ${Math.random() * 100 - 50}px);
    }
    100% {
      transform: translate(0, 0);
    }
  }
`;

        // Añadir keyframes al documento
        const style = document.createElement('style');
        style.innerHTML = keyframes;
        document.head.appendChild(style);
    }

    // Animación al hacer scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    // Observar las tarjetas
    document.querySelectorAll('.service-card').forEach(card => {
        card.style.opacity = 0;
        card.style.transform = 'translateY(50px)';
        card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(card);

        // Efecto parallax en las tarjetas
        document.addEventListener('mousemove', (e) => {
            const {
                clientX,
                clientY
            } = e;
            const {
                left,
                top,
                width,
                height
            } = card.getBoundingClientRect();

            // Ajustar los valores para una rotación más sutil
            const x = (clientX - left - width / 2) / 100;
            const y = (clientY - top - height / 2) / 100;

            card.style.transform = `perspective(1000px) rotateY(${x}deg) rotateX(${-y}deg)`;
        });

        // Aumentar rotación al pasar el mouse
        card.addEventListener('mouseenter', () => {
            card.style.transition = 'transform 0.3s ease'; // Suavizar transición al entrar
            card.style.transform =
                'perspective(1000px) rotateY(10deg) rotateX(-10deg)'; // Rotación más evidente
        });

        // Restablecer al salir
        card.addEventListener('mouseleave', () => {
            card.style.transition = 'transform 0.3s ease'; // Suavizar transición al salir
            card.style.transform = 'perspective(1000px) rotateY(0) rotateX(0)';
        });
    });
});
/* Script para la sección 5 */

/*************************/
/*************************/
/*************************/
