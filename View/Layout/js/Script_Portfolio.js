/**********************************************/
/* SCRIPT PARA CAMBIAR BENTOGRID POR CARRUSEL */
/**********************************************/
function displayContent() {
    // Selecciona todos los elementos de contenido del modal
    const contentDivs = document.querySelectorAll('.modal-content-grid');
  
    contentDivs.forEach(contentDiv => {
      // Si la ventana es grande, se muestra la vista de bentogrid
      if (window.innerWidth > 1200) {
        contentDiv.innerHTML = `
          <div class="modal-bentogrid">
            <div class="bento-item text" id="item1">
              <img src="PImageProject/project-0.jpg" alt="Vista Principal">
            </div>
            <div class="bento-item" id="item2">
              <img src="PImageProject/project-1.jpg" alt="Vista 2">
            </div>
            <div class="bento-item" id="item3">
              <img src="PImageProject/project-2.jpg" alt="Vista 3">
            </div>
            <div class="bento-item" id="item4">
              <img src="PImageProject/project-3.jpg" alt="Vista 4">
            </div>
            <div class="bento-item" id="item5">
              <img src="PImageProject/project-4.jpg" alt="Vista 5">
            </div>
            <div class="bento-item" id="item6">
              <img src="PImageProject/project-5.jpg" alt="Vista 6">
            </div>
            <div class="bento-item" id="item7">
              <img src="PImageProject/project-0.jpg" alt="Vista 7">
            </div>
            <div class="bento-item" id="item8">
              <img src="PImageProject/project-1.jpg" alt="Vista 8">
            </div>
            <div class="bento-item text" id="item9">
              <img src="PImageProject/project-2.jpg" alt="Vista 9">
            </div>
          </div>`;
      } else {
        // Para pantallas pequeñas, se muestra el carrusel
        contentDiv.innerHTML = `
          <div class="modal-bentogrid">
            <div class="carousel-wrapper">
              <div class="carousel-container">
                <div class="carousel">
                  <div class="carousel-track">
                    <img src="PImageProject/project-0.jpg" alt="Imagen 1" class="carousel-item">
                    <img src="PImageProject/project-1.jpg" alt="Imagen 2" class="carousel-item">
                    <img src="PImageProject/project-2.jpg" alt="Imagen 3" class="carousel-item">
                    <img src="PImageProject/project-3.jpg" alt="Imagen 4" class="carousel-item">
                    <img src="PImageProject/project-4.jpg" alt="Imagen 5" class="carousel-item">
                    <img src="PImageProject/project-5.jpg" alt="Imagen 6" class="carousel-item">
                    <img src="PImageProject/project-0.jpg" alt="Imagen 7" class="carousel-item">
                    <img src="PImageProject/project-1.jpg" alt="Imagen 8" class="carousel-item">
                    <img src="PImageProject/project-2.jpg" alt="Imagen 9" class="carousel-item">
                  </div>
                </div>
                <button class="carousel-button prev" aria-label="Anterior">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6"></path>
                  </svg>
                </button>
                <button class="carousel-button next" aria-label="Siguiente">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6"></path>
                  </svg>
                </button>
                <div class="carousel-progress"></div>
              </div>
              <div class="carousel-indicators"></div>
            </div>
          </div>`;
      }
    });
  
    // Si se usa el carrusel, inicializa sus eventos y la asignación de modal
    if (window.innerWidth <= 1200) {
      setTimeout(() => {
        initializeCarousel();
        addModalEvents();
      }, 100);
    }
  }
  
  // Función para abrir el modal con la imagen seleccionada (solo de ese modal)
  function openImageFromCarousel(carouselItem) {
    if (!carouselItem) return;
  
    // Se obtiene el contenedor del carrusel al que pertenece la imagen clickeada
    const carouselWrapper = carouselItem.closest('.carousel-wrapper');
    const items = carouselWrapper.querySelectorAll('.carousel-item');
    let currentIndex = Array.from(items).indexOf(carouselItem);
    const totalImages = items.length;
  
    // Se asume que el modal de imagen es único (con id "imageModal")
    const imageModal = document.getElementById('imageModal');
    // Se buscan los elementos internos del modal (asegúrate de que existen en tu HTML)
    const modalImageContainer = imageModal.querySelector('.modal-image-container');
    const counter = imageModal.querySelector('.image-counter');
    const closeBtn = imageModal.querySelector('.close-modal-gallery');
    const nextBtn = imageModal.querySelector('.next-btn');
    const prevBtn = imageModal.querySelector('.prev-btn');
  
    // Variables para controlar el swipe
    let touchStartX = 0;
    let isDragging = false;
    let startTranslateX = 0;
    let currentTranslateX = 0;
  
    function updateImage(index, transition = true) {
      const currentImg = items[index];
      if (currentImg) {
        modalImageContainer.innerHTML = `
          <div class="image-wrapper">
            <img src="${currentImg.src}" class="modal-image" alt="Image" 
                 onerror="this.src='View/Img/Projects/default.jpg'"
                 style="transform: translateX(${currentTranslateX}px);
                        transition: ${transition ? 'transform 0.3s ease' : 'none'}">
          </div>
        `;
        counter.textContent = `${index + 1} / ${totalImages}`;
      }
    }
  
    function handleTouchStart(e) {
      isDragging = true;
      touchStartX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
      startTranslateX = currentTranslateX;
      const modalImage = modalImageContainer.querySelector('.modal-image');
      if (modalImage) {
        modalImage.style.transition = 'none';
      }
    }
  
    function handleTouchMove(e) {
      if (!isDragging) return;
      e.preventDefault();
      const currentX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
      const diff = currentX - touchStartX;
      currentTranslateX = startTranslateX + diff;
      // Resistencia en los extremos
      if ((currentIndex === 0 && diff > 0) || (currentIndex === totalImages - 1 && diff < 0)) {
        currentTranslateX = startTranslateX + diff * 0.3;
      }
      const modalImage = modalImageContainer.querySelector('.modal-image');
      if (modalImage) {
        modalImage.style.transform = `translateX(${currentTranslateX}px)`;
      }
    }
  
    function handleTouchEnd() {
      if (!isDragging) return;
      isDragging = false;
      const diff = currentTranslateX - startTranslateX;
      const threshold = modalImageContainer.offsetWidth * 0.3;
      if (Math.abs(diff) > threshold) {
        if (diff > 0 && currentIndex > 0) {
          currentIndex--;
        } else if (diff < 0 && currentIndex < totalImages - 1) {
          currentIndex++;
        }
      }
      currentTranslateX = 0;
      updateImage(currentIndex, true);
    }
  
    // Inicializa el modal con la imagen correspondiente
    updateImage(currentIndex);
    imageModal.style.display = 'flex';
    imageModal.classList.add('show');
    document.body.style.overflow = 'hidden';
  
    // Eventos para controlar el swipe (mouse y touch)
    modalImageContainer.addEventListener('mousedown', handleTouchStart);
    modalImageContainer.addEventListener('mousemove', handleTouchMove);
    modalImageContainer.addEventListener('mouseup', handleTouchEnd);
    modalImageContainer.addEventListener('mouseleave', handleTouchEnd);
    modalImageContainer.addEventListener('touchstart', handleTouchStart);
    modalImageContainer.addEventListener('touchmove', handleTouchMove);
    modalImageContainer.addEventListener('touchend', handleTouchEnd);
  
    // Eventos de navegación
    nextBtn.onclick = () => {
      currentIndex = (currentIndex + 1) % totalImages;
      currentTranslateX = 0;
      updateImage(currentIndex);
    };
  
    prevBtn.onclick = () => {
      currentIndex = (currentIndex - 1 + totalImages) % totalImages;
      currentTranslateX = 0;
      updateImage(currentIndex);
    };
  
    closeBtn.onclick = () => {
      imageModal.classList.remove('show');
      setTimeout(() => {
        imageModal.style.display = 'none';
        document.body.style.overflow = 'auto';
      }, 300);
    };
  }
  
  // Función para inicializar cada carrusel de forma independiente
  function initializeCarousel() {
    // Selecciona cada contenedor de carrusel (dentro de cada modal)
    const carousels = document.querySelectorAll(".carousel-wrapper");
    carousels.forEach(carousel => {
      const track = carousel.querySelector(".carousel-track");
      const items = carousel.querySelectorAll(".carousel-item");
      const indicatorsContainer = carousel.querySelector(".carousel-indicators");
      const progressLabel = carousel.querySelector(".carousel-progress");
      const prevButton = carousel.querySelector(".carousel-button.prev");
      const nextButton = carousel.querySelector(".carousel-button.next");
  
      let currentIndex = 0;
      indicatorsContainer.innerHTML = ""; // Limpia indicadores anteriores
  
      // Crea indicadores según la cantidad de imágenes
      items.forEach((_, index) => {
        const indicator = document.createElement("button");
        indicator.classList.add("indicator");
        if (index === 0) indicator.classList.add("active");
        indicator.addEventListener("click", () => goToSlide(index));
        indicatorsContainer.appendChild(indicator);
      });
  
      const indicators = indicatorsContainer.querySelectorAll("button");
  
      function updateCarousel() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        indicators.forEach((indicator, index) => {
          indicator.classList.toggle("active", index === currentIndex);
        });
        progressLabel.textContent = `${currentIndex + 1}/${items.length}`;
      }
  
      function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
      }
  
      function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
      }
  
      function prevSlide() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarousel();
      }
  
      nextButton.addEventListener("click", nextSlide);
      prevButton.addEventListener("click", prevSlide);
      updateCarousel();
    });
  }
  
  // Función para asignar el evento de apertura del modal a cada imagen del carrusel
  function addModalEvents() {
    // Se asigna a cada .carousel-item (en cada modal, serán únicamente las 9 propias)
    const carouselItems = document.querySelectorAll('.carousel-item');
    carouselItems.forEach(item => {
      item.addEventListener('click', () => {
        openImageFromCarousel(item);
      });
    });
  }
  
  // Ejecuta al cargar la página y al redimensionar la ventana
  document.addEventListener("DOMContentLoaded", displayContent);
  window.onresize = displayContent;
  
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

    // Verificar si los elementos existen antes de continuar
    if (!heroSection || !projectsSection) {
        console.error("Error: No se encontraron 'hero-section' o 'projects-section' en el DOM.");
    }

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
document.addEventListener('DOMContentLoaded', function () {
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
document.addEventListener('DOMContentLoaded', function () {
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
        bentoItem.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            openImageFromBentoItem(this);
        });

        // Click en la imagen dentro del bento-item
        const img = bentoItem.querySelector('img');
        if (img) {
            img.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                openImageFromBentoItem(bentoItem);
            });
        }

        // Touch events para dispositivos móviles
        bentoItem.addEventListener('touchend', function (e) {
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

        switch (e.key) {
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

/***********************/
/* Accordion Modal end */
/***********************/

document.querySelectorAll('.accordion-header-final-modal').forEach(button => {
    button.addEventListener('click', () => {
        const accordionItem = button.parentElement;

        document.querySelectorAll('.accordion-item-final-modal').forEach(item => {
            if (item !== accordionItem && item.classList.contains('active')) {
                item.classList.remove('active');
            }
        });

        accordionItem.classList.toggle('active');
    });
});

/***********************/
/* Accordion Modal end */
/***********************/
