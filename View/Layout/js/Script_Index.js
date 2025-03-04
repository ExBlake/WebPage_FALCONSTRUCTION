/***************************************/
/*Script para la seccion de Tertimonial*/
/***************************************/
document.addEventListener("mousemove", (e) => {
    const shape = document.querySelector(".shape-bg");
    const image = document.querySelector(".testimonial-image");

    if (window.innerWidth > 968) {
        const mouseX = e.clientX / window.innerWidth - 0.5;
        const mouseY = e.clientY / window.innerHeight - 0.5;

        shape.style.transform = `translateY(-50%) translate(${mouseX * 20}px, ${mouseY * 20}px)`;
        image.style.transform = `translate(${mouseX * -30}px, ${mouseY * -30}px)`;
    } else {
        shape.style.transform = "none";
        image.style.transform = "none";
    }
});

const testimonials = [
    {
        text: "Vel accumsan eget elementum neque est, aenean scelerisque nunc mollis nec lacus, lorem facilisis nullam ultricies orci tortor curabitur sit tincidunt aenean sem ultrices.",
        author: "Ethan D. Saw",
        image: "View/img/Review/Users/fotofelipe.png"
    },
    {
        text: "Exceptional service and outstanding results. The team went above and beyond my expectations.",
        author: "Sarah Johnson",
        image: "View/img/Review/Users/fotofelipe.png"
    },
    {
        text: "Professional, creative, and highly skilled. I couldn’t be happier with the outcome.",
        author: "Michael Chen",
        image: "View/img/Review/Users/fotofelipe.png"
    }
];

let currentTestimonial = 0;
const testimonialContainer = document.querySelector(".testimonial-container");
let autoSlideInterval;

function createTestimonialHTML(testimonial) {
    return `
<div class="text-content testimonial-content" style="opacity: 0;">
    <span class="client-say">What Our Client Say</span>
    <div class="quote-container">
        <span class="quote-marks">"</span>
        <p class="quote-text">${testimonial.text}</p>
    </div>
    <h3 class="author">${testimonial.author}</h3>
    <a href="#" class="view-button">
        View all testimonial
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
<div class="image-content">
    <img src="${testimonial.image}" alt="Testimonial" class="testimonial-image" style="opacity: 0;" />
</div>
`;
}

function updateTestimonial() {
    const testimonial = testimonials[currentTestimonial];
    testimonialContainer.innerHTML = createTestimonialHTML(testimonial);

    const content = testimonialContainer.querySelector(".testimonial-content");
    const image = testimonialContainer.querySelector(".testimonial-image");
    setTimeout(() => {
        content.style.opacity = "1";
        image.style.opacity = "1";
    }, 100);
}

function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        fadeOutAndUpdate();
    }, 5000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

function fadeOutAndUpdate() {
    const content = testimonialContainer.querySelector(".testimonial-content");
    const image = testimonialContainer.querySelector(".testimonial-image");
    if (content && image) {
        content.style.opacity = "0";
        image.style.opacity = "0";
        setTimeout(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            updateTestimonial();
        }, 500);
    }
}

function changeTestimonial(direction) {
    stopAutoSlide(); // Detener el temporizador
    const content = testimonialContainer.querySelector(".testimonial-content");
    const image = testimonialContainer.querySelector(".testimonial-image");
    if (content && image) {
        content.style.opacity = "0";
        image.style.opacity = "0";
        setTimeout(() => {
            if (direction === "next") {
                currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            } else if (direction === "prev") {
                currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            }
            updateTestimonial();
            startAutoSlide(); // Reiniciar el temporizador
        }, 500);
    }
}

// Iniciar el carrusel
updateTestimonial();
startAutoSlide();

    // Agregar eventos a los botones
document.getElementById("next-btn").addEventListener("click", () => {
    changeTestimonial("next");
});

document.getElementById("prev-btn").addEventListener("click", () => {
    changeTestimonial("prev");
});

/*******************************************/
/*End Script para la seccion de Tertimonial*/
/*******************************************/

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

/******************************************/
/* End Script para el carrusel responsive */
/******************************************/

/**************************/
/* Script para la Room 3D */
/**************************/

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

/******************************/
/* End Script para la Room 3D */
/******************************/
/*****************************************/
/* Script para la segunda sección Inicio */
/*****************************************/
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
/*********************************************/
/* End Script para la segunda sección Inicio */
/*********************************************/

/****************************/
/* Script para la sección 5 */
/****************************/

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
/********************************/
/* End Script para la sección 5 */
/********************************/