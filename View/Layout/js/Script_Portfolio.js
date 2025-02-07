/************************************/
/* Script para la sección de conteo */
/************************************/

// Función para el conteo rápido
function countUp(element, targetValue, duration) {
    let startValue = 0;
    let range = targetValue - startValue;
    let increment = range / (duration / 50); // Duración del conteo en milisegundos (ajustar según sea necesario)

    let interval = setInterval(() => {
        startValue += increment;
        if (startValue >= targetValue) {
            clearInterval(interval);
            startValue = targetValue;
        }
        element.textContent = Math.floor(startValue);
    }, 50);
}

// Ejecutar el conteo para cada elemento
document.querySelectorAll('.stat-number').forEach((stat) => {
    const targetValue = parseInt(stat.getAttribute('data-value'));
    countUp(stat, targetValue, 2000); // 2000ms (2 segundos) para el conteo completo
});

/*************************************/
/* Script para el scrolling parallax */
/*************************************/

document.addEventListener('DOMContentLoaded', () => {
    const heroSection = document.querySelector('.hero-section');
    const projectsSection = document.querySelector('.projects-section');
    const sections = document.querySelectorAll('.section--Projects--Portfolio-Attachment');

    const handleScroll = () => {
        const scrollPosition = window.pageYOffset;
        const windowHeight = window.innerHeight;

        // Parallax effect for hero section
        heroSection.style.transform = `translateY(${scrollPosition * 0.5}px)`;

        // Show/hide projects section
        if (scrollPosition >= windowHeight) {
            projectsSection.style.transform = 'translateY(0)';
        } else {
            projectsSection.style.transform = `translateY(${windowHeight - scrollPosition}px)`;
        }

        // Handle individual project sections
        sections.forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top + scrollPosition;
            if (scrollPosition + windowHeight > sectionTop) {
                section.classList.add('visible');
            } else {
                section.classList.remove('visible');
            }
        });
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial call to set positions
});

/*************************************/
/* Script para el scrolling parallax */
/*************************************/

/*****************/
/* Script Loader */
/*****************/

document.addEventListener('DOMContentLoaded', () => {
    // Loading animation
    const loading = document.createElement('div');
    loading.classList.add('loading');

    const loadingContainer = document.createElement('div');
    loadingContainer.classList.add('loading-container');

    const image = document.createElement('img');
    image.src = 'View/img/Logo_Phone.png';
    image.classList.add('loading-image');

    loadingContainer.appendChild(image);
    loading.appendChild(loadingContainer);
    document.body.appendChild(loading);

    window.addEventListener('load', () => {
        setTimeout(() => {
            loading.style.opacity = '0';
            setTimeout(() => {
                loading.remove();
            }, 500);
        }, 1000);
    });
});

/*****************/
/* Script Loader */
/*****************/

// Scroll animations
const animatedElements = document.querySelectorAll('.animate-on-scroll');

const isElementInViewport = (el) => {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

const handleScroll = () => {
    animatedElements.forEach((el) => {
        if (isElementInViewport(el)) {
            el.classList.add('is-visible');
            if (el.classList.contains('content-block')) {
                el.classList.add('scale-in');
            } else {
                el.classList.add('fade-in-up');
            }
        }
    });
};

window.addEventListener('scroll', handleScroll);
handleScroll(); // Initial check



//Cursor effect
document.addEventListener("DOMContentLoaded", () => {
    const cursorEffect = document.getElementById("cursor-effect")
    let mouseX = 0
    let mouseY = 0

    document.addEventListener("mousemove", (e) => {
        mouseX = e.clientX
        mouseY = e.clientY
    })

    function updateCursorEffect() {
        const gradientSize = 400
        cursorEffect.style.background = `
              radial-gradient(
                  circle ${gradientSize}px at ${mouseX}px ${mouseY}px,
                  rgba(59, 130, 246, 0.15),
                  transparent 80%
              )
          `
        requestAnimationFrame(updateCursorEffect)
    }

    updateCursorEffect()
})

document.addEventListener('DOMContentLoaded', function () {
    const fadeElements = document.querySelectorAll('.fade-in-up-element');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    fadeElements.forEach(element => {
        observer.observe(element);
    });
});

// Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get all modals and buttons
    const modals = document.querySelectorAll('.modal');
    const btns = document.querySelectorAll('.ver-mas-btn');
    const closeBtns = document.querySelectorAll('.close-modal');

    // Open modal function
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = 'flex';
        setTimeout(() => {
            modal.classList.add('show');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    // Close modal function
    function closeModal(modal) {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    // Add click events to buttons
    btns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            openModal(`modal${index + 1}`);
        });
    });

    // Add click events to close buttons
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.modal');
            closeModal(modal);
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        modals.forEach(modal => {
            if (e.target === modal) {
                closeModal(modal);
            }
        });
    });

    // Close modal with Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            modals.forEach(modal => {
                if (modal.classList.contains('show')) {
                    closeModal(modal);
                }
            });
        }
    });
});

// Galería de imágenes modal
document.addEventListener('DOMContentLoaded', function() {
    const imageModal = document.getElementById('imageModal');
    const modalImage = imageModal.querySelector('.modal-image');
    const closeBtn = imageModal.querySelector('.close-modal-gallery');
    const prevBtn = imageModal.querySelector('.prev-btn');
    const nextBtn = imageModal.querySelector('.next-btn');
    const counter = imageModal.querySelector('.image-counter');
    
    let currentImageIndex = 0;
    let currentImages = [];

    // Función para abrir el modal con la imagen correspondiente
    function openImageFromBentoItem(bentoItem) {
        const img = bentoItem.querySelector('img');
        if (!img) return;
        
        const currentBentogrid = bentoItem.closest('.modal-bentogrid');
        currentImages = Array.from(currentBentogrid.querySelectorAll('.bento-item img'))
                           .map(img => img.src);
        currentImageIndex = currentImages.indexOf(img.src);
        
        openImageModal();
    }

    // Manejar clicks tanto en el bento-item como en sus elementos
    document.querySelectorAll('.modal .bento-item').forEach(bentoItem => {
        bentoItem.style.cursor = 'pointer';
        
        // Click en el bento-item (incluyendo el ::after)
        bentoItem.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openImageFromBentoItem(this);
        });

        // Click en la imagen dentro del bento-item
        const img = bentoItem.querySelector('img');
        if (img) {
            img.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                openImageFromBentoItem(bentoItem);
            });
        }

        // Touch events para dispositivos móviles
        bentoItem.addEventListener('touchend', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openImageFromBentoItem(this);
        }, { passive: false });
    });

    function openImageModal() {
        const modalImageContainer = imageModal.querySelector('.modal-image-container');
        modalImageContainer.innerHTML = `
            <div class="image-wrapper">
                <img src="${currentImages[currentImageIndex]}" class="modal-image" alt="Image">
            </div>
        `;
        updateModalImage();
        imageModal.style.display = 'flex';
        imageModal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    function updateModalImage() {
        const modalImage = imageModal.querySelector('.modal-image');
        modalImage.style.opacity = '0';
        setTimeout(() => {
            modalImage.src = currentImages[currentImageIndex];
            modalImage.style.opacity = '1';
            counter.textContent = `${currentImageIndex + 1} / ${currentImages.length}`;
        }, 300);
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % currentImages.length;
        updateModalImage();
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
        updateModalImage();
    }

    // Event Listeners
    nextBtn.addEventListener('click', nextImage);
    prevBtn.addEventListener('click', prevImage);
    
    closeBtn.addEventListener('click', () => {
        imageModal.classList.remove('show');
        setTimeout(() => {
            imageModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    });

    // Navegación con teclado
    document.addEventListener('keydown', (e) => {
        if (!imageModal.classList.contains('show')) return;
        
        switch(e.key) {
            case 'ArrowLeft':
                prevImage();
                break;
            case 'ArrowRight':
                nextImage();
                break;
            case 'Escape':
                closeBtn.click();
                break;
        }
    });

    // Cerrar al hacer clic fuera de la imagen
    imageModal.addEventListener('click', (e) => {
        if (e.target === imageModal) {
            closeBtn.click();
        }
    });
});