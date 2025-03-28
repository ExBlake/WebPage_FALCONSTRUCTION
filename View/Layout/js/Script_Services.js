document.addEventListener('DOMContentLoaded', () => {
  const fullscreenContainer = document.querySelector('.fullscreen-container');
  const sections = document.querySelectorAll('.fullscreen-section');
  const images = document.querySelectorAll('.image-container img');
  const textSections = document.querySelectorAll('.text-section');
  const scrollContainer = document.querySelector('.left-column');

  let currentSection = 0;
  const totalSections = sections.length;
  const scrollDistance = 400; // Distancia de scroll para cambiar imagen

  function updateActiveSection() {
    // Actualiza las secciones principales
    sections.forEach((section, index) => {
      if (index === currentSection) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });

    // Solo para la tercera sección (índice 2)
    if (currentSection === 2) {
      const scrollTop = fullscreenContainer.scrollTop - sections[0].offsetHeight - sections[1].offsetHeight;
      const index = Math.floor(scrollTop / scrollDistance) % textSections.length;

      // Actualiza las secciones de texto y las imágenes
      textSections.forEach((section, i) => {
        if (i === index) {
          section.classList.add('active');
        } else {
          section.classList.remove('active');
        }
      });

      images.forEach((image, i) => {
        if (i === index) {
          image.classList.add('active');
        } else {
          image.classList.remove('active');
        }
      });
    }
  }

  // Evento para el contenedor de fullscreen
  fullscreenContainer.addEventListener('scroll', () => {
    currentSection = Math.round(fullscreenContainer.scrollTop / window.innerHeight);
    updateActiveSection();
  });

  // Evento para el contenedor izquierdo (left-column)
  scrollContainer.addEventListener('scroll', function () {
    let activeSection = Math.floor(scrollContainer.scrollTop / scrollDistance);

    // Actualiza las secciones de texto
    textSections.forEach((section, index) => {
      if (index === activeSection) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    });

    // Calcula el índice de la imagen y actualiza su estado
    const index = Math.floor(scrollContainer.scrollTop / scrollDistance) % images.length;
    images.forEach(image => {
      image.classList.remove('active');
    });
    images[index].classList.add('active');
  });

  // Llamada inicial para actualizar el estado de las secciones e imágenes
  updateActiveSection();

});

// Añadimos efectos de hover más suaves
document.addEventListener('DOMContentLoaded', () => {
  const button = document.querySelector('.contacts-banner-cta-button');

  button.addEventListener('mouseover', () => {
    button.style.transform = 'scale(1.05)';
    button.style.transition = 'all 0.3s ease';
  });

  button.addEventListener('mouseout', () => {
    button.style.transform = 'scale(1)';
  });

  // Efecto de parallax suave en el blob
  const blob = document.querySelector('.contacts-banner-gradient-blob');
  document.addEventListener('mousemove', (e) => {
    const { clientX, clientY } = e;
    const centerX = window.innerWidth / 2;
    const centerY = window.innerHeight / 2;

    const moveX = (clientX - centerX) * 0.01;
    const moveY = (clientY - centerY) * 0.01;

    blob.style.transform = `translateX(25%) translate(${moveX}px, ${moveY}px)`;
    blob.style.transition = 'transform 0.3s ease-out';
  });
});

// Añadimos efecto de aparición gradual al cargar la página
window.addEventListener('load', () => {
  const content = document.querySelector('.contacts-banner-content');
  content.style.opacity = '0';

  setTimeout(() => {
    content.style.transition = 'opacity 1s ease-in-out';
    content.style.opacity = '1';
  }, 100);
});


document.addEventListener("DOMContentLoaded", function () {
  const bannerend = document.querySelector('.banner-final');
  const container = document.querySelector('.fullscreen-container');

  if (bannerend && container) {
    container.addEventListener('scroll', function () {
      const footerRect = bannerend.getBoundingClientRect();
      if (footerRect.top <= window.innerHeight && footerRect.bottom >= 0) {
        container.style.scrollSnapType = 'none';
      } else {
        container.style.scrollSnapType = 'y mandatory';
      }
    });
  }
});


























document.addEventListener("DOMContentLoaded", () => {
  const timelineItems = document.querySelectorAll(".timeline-item")

  const timelineImage = document.getElementById("timeline-image")
  const timeline = document.querySelector(".timeline")

  let activeIndex = 0

  const setActiveItem = (index) => {
    timelineItems.forEach((item, i) => {
      if (i === index) {
        item.classList.add("active")
        const imageSrc = item.dataset.image
        if (window.innerWidth <= 768) {
          item.style.setProperty("--bg-image", `url(${imageSrc})`)
        } else {
          timelineImage.src = imageSrc
          timelineImage.style.opacity = "0"
          timelineImage.style.transform = "scale(1.1)"
          setTimeout(() => {
            timelineImage.style.opacity = "1"
            timelineImage.style.transform = "scale(1)"
          }, 50)
        }
      } else {
        item.classList.remove("active")
      }
    })
  }


  const handleScroll = () => {
    const scrollY = timeline.scrollTop
    const maxScroll = timeline.scrollHeight - timeline.clientHeight
    const viewportHeight = window.innerHeight

    let found = false

    timelineItems.forEach((item, index) => {
      const rect = item.getBoundingClientRect()
      const itemTop = rect.top + scrollY - timeline.offsetTop
      const itemCenter = itemTop + rect.height / 2

      // Condición ajustada para mejorar la detección del último elemento
      if (itemCenter > scrollY && itemCenter < scrollY + viewportHeight * 0.6) {
        if (activeIndex !== index) {
          activeIndex = index
          setActiveItem(activeIndex)
        }
        found = true
      }
    })

    // Si el usuario ha llegado al final, forzar activación del último ítem
    if (!found && scrollY >= maxScroll) {
      activeIndex = timelineItems.length - 1
      setActiveItem(activeIndex)
    }
  }

  timeline.addEventListener("scroll", handleScroll)

  // Inicializar la primera sección como activa
  setActiveItem(0)

})

document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".image-container-banner img");
  const textContent = document.querySelector(".text-content");
  const imageContainer = document.querySelector(".image-container-banner");

  // Verificar si estamos en móvil o tablet
  if (window.innerWidth <= 1024 && images.length > 1) {
    // Convertir las imágenes en un carrusel
    let currentIndex = 0;

    // Crear un contenedor para el carrusel
    const carouselContainer = document.createElement("div");
    carouselContainer.classList.add("carousel-container");
    carouselContainer.style.position = "relative";
    carouselContainer.style.width = "100%";
    carouselContainer.style.height = "300px"; // Ajusta la altura según sea necesario

    // Mover las imágenes al contenedor del carrusel
    images.forEach((img) => {
      img.style.position = "absolute";
      img.style.width = "100%";
      img.style.height = "100%";
      img.style.objectFit = "cover";
      img.style.opacity = "0";
      img.style.transition = "opacity 0.5s ease";
      carouselContainer.appendChild(img);
    });

    // Mostrar la primera imagen
    images[currentIndex].style.opacity = "1";

    // Reemplazar el contenedor original con el carrusel
    imageContainer.innerHTML = "";
    imageContainer.appendChild(carouselContainer);

    // Función para cambiar de imagen
    function showNextImage() {
      images[currentIndex].style.opacity = "0";
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].style.opacity = "1";
    }

    // Cambiar de imagen cada 3 segundos
    setInterval(showNextImage, 3000);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".image-container-banner img");
  const textContent = document.querySelector(".text-content");
  const imageContainer = document.querySelector(".image-container-banner");

  // Verificar si estamos en móvil o tablet
  if (window.innerWidth <= 1024 && images.length > 1) {
    // Convertir las imágenes en un carrusel
    let currentIndex = 0;

    // Crear un contenedor para el carrusel
    const carouselContainer = document.createElement("div");
    carouselContainer.classList.add("carousel-container");
    carouselContainer.style.position = "relative";
    carouselContainer.style.width = "100%";
    carouselContainer.style.height = "300px"; // Ajusta la altura según sea necesario

    // Mover las imágenes al contenedor del carrusel
    images.forEach((img) => {
      img.style.position = "absolute";
      img.style.width = "100%";
      img.style.height = "100%";
      img.style.objectFit = "cover";
      img.style.opacity = "0";
      img.style.transition = "opacity 0.5s ease";
      carouselContainer.appendChild(img);
    });

    // Mostrar la primera imagen
    images[currentIndex].style.opacity = "1";

    // Reemplazar el contenedor original con el carrusel
    imageContainer.innerHTML = "";
    imageContainer.appendChild(carouselContainer);

    // Función para cambiar de imagen
    function showNextImage() {
      images[currentIndex].style.opacity = "0";
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].style.opacity = "1";
    }

    // Cambiar de imagen cada 3 segundos
    setInterval(showNextImage, 3000);
  }
});

/******************************/
/* Script sección 2 servicios */
/******************************/

document.addEventListener('DOMContentLoaded', function () {
  // Inicializar partículas
  particlesJS('particles-js', {
    particles: {
      number: { value: 80, density: { enable: true, value_area: 800 } },
      color: { value: "#ffffff" },
      shape: { type: "circle" },
      opacity: { value: 0.5, random: false },
      size: { value: 3, random: true },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#ffffff",
        opacity: 0.4,
        width: 1
      },
      move: {
        enable: true,
        speed: 2,
        direction: "none",
        random: false,
        straight: false,
        out_mode: "out",
        bounce: false,
      }
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: { enable: true, mode: "repulse" },
        onclick: { enable: true, mode: "push" },
        resize: true
      },
      modes: {
        repulse: { distance: 100, duration: 0.4 },
        push: { particles_nb: 4 }
      }
    },
    retina_detect: true
  });

  // Manejar la carga de imágenes
  const images = document.querySelectorAll('img');
  images.forEach(img => {
    img.addEventListener('load', function () {
      this.classList.add('loaded');
    });
    img.addEventListener('error', function () {
      console.error('Error loading image:', this.src);
    });
  });

  // Efecto de hover en el botón
  const button = document.querySelector('.button');
  button.addEventListener('mousemove', function (e) {
    const x = e.pageX - button.offsetLeft;
    const y = e.pageY - button.offsetTop;

    button.style.setProperty('--x', x + 'px');
    button.style.setProperty('--y', y + 'px');
  });
});

// Función para manejar el responsive de manera más suave
function handleResize() {
  const heroContent = document.querySelector('.hero__content');
  const windowWidth = window.innerWidth;

  if (windowWidth < 1024) {
    heroContent.style.opacity = '1';
  }
}

// Escuchar el evento resize
window.addEventListener('resize', handleResize);

// Llamar a handleResize inicialmente
handleResize();

/******************************/
/* Script sección 2 servicios */
/******************************/

/*******************************************************/
/* Script para el responsive del carrusel y sección 3  */
/*******************************************************/

const sliderContainer = document.querySelector('.slider-container');
const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const dotsContainer = document.querySelector('.dots');

let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let currentIndex = 0;
let animationID = 0;
let slidesPerView = getSlidesPerView();

// Create dots based on number of visible slides
function createDots() {
  dotsContainer.innerHTML = '';
  const numDots = Math.ceil(slides.length / slidesPerView);

  for (let i = 0; i < numDots; i++) {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (i === currentIndex) dot.classList.add('active');
    dot.addEventListener('click', () => goToSlide(i));
    dotsContainer.appendChild(dot);
  }
}

function getSlidesPerView() {
  if (window.innerWidth >= 1024) return 3;
  if (window.innerWidth >= 768) return 2;
  return 1;
}

function updateDots() {
  const dots = document.querySelectorAll('.dot');
  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === currentIndex);
  });
}

function goToSlide(index) {
  currentIndex = index;
  prevTranslate = currentTranslate = -index * (100 / slidesPerView);
  setSliderPosition();
  updateDots();
}

// Touch events
slider.addEventListener('touchstart', startDragging);
slider.addEventListener('touchmove', drag);
slider.addEventListener('touchend', stopDragging);

// Mouse events
slider.addEventListener('mousedown', startDragging);
slider.addEventListener('mousemove', drag);
slider.addEventListener('mouseup', stopDragging);
slider.addEventListener('mouseleave', stopDragging);

function startDragging(e) {
  isDragging = true;
  slider.classList.add('dragging');

  // Get starting position
  startPos = getPositionX(e);

  // Cancel any ongoing animation
  cancelAnimationFrame(animationID);
}

function drag(e) {
  if (!isDragging) return;

  e.preventDefault();
  const currentPosition = getPositionX(e);
  const diff = currentPosition - startPos;
  currentTranslate = prevTranslate + (diff / sliderContainer.offsetWidth) * 100;

  // Add boundaries
  const minTranslate = -((slides.length - slidesPerView) * (100 / slidesPerView));
  currentTranslate = Math.max(minTranslate, Math.min(0, currentTranslate));

  setSliderPosition();
}

function stopDragging() {
  isDragging = false;
  slider.classList.remove('dragging');

  const movedBy = currentTranslate - prevTranslate;

  // If moved enough negative
  if (movedBy < -5) {
    currentIndex = Math.min(
      Math.ceil(slides.length / slidesPerView) - 1,
      currentIndex + 1
    );
  }
  // If moved enough positive
  else if (movedBy > 5) {
    currentIndex = Math.max(0, currentIndex - 1);
  }

  currentTranslate = -currentIndex * (100 / slidesPerView);
  prevTranslate = currentTranslate;
  setSliderPosition();
  updateDots();
}

function getPositionX(e) {
  return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
}

function setSliderPosition() {
  slider.style.transform = `translateX(${currentTranslate}%)`;
}

// Handle window resize
window.addEventListener('resize', () => {
  const newSlidesPerView = getSlidesPerView();
  if (newSlidesPerView !== slidesPerView) {
    slidesPerView = newSlidesPerView;
    currentIndex = Math.min(currentIndex, Math.ceil(slides.length / slidesPerView) - 1);
    createDots();
    goToSlide(currentIndex);
  }
});

// Prevent context menu on long press
slider.addEventListener('contextmenu', e => e.preventDefault());

// Initialize
createDots();
updateDots();

/*******************************************************/
/* Script para el responsive del carrusel y sección 3  */
/*******************************************************/

/*********************************/
/* Script para efecto del título */
/*********************************/

document.addEventListener("mousemove", (event) => {
  const title = document.querySelector(".contacts-banner-title");
  const rect = title.getBoundingClientRect();

  // Calculamos la diferencia entre la posición del cursor y el centro del texto
  const offsetX = (event.clientX - (rect.left + rect.width / 2)) * 0.01;
  const offsetY = (event.clientY - (rect.top + rect.height / 2)) * 0.01;

  title.style.transform = `translate(${-offsetX}px, ${-offsetY}px)`;
});

/*********************************/
/* Script para efecto del título */
/*********************************/