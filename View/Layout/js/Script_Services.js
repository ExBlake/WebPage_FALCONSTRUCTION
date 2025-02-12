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
  scrollContainer.addEventListener('scroll', function() {
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



//Fondo del cursor

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



// Loader Script
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

document.addEventListener("DOMContentLoaded", function() {
  const bannerend = document.querySelector('.banner-final');
  const container = document.querySelector('.fullscreen-container');

  if (bannerend && container) {
      container.addEventListener('scroll', function() {
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




// banner --------------------------------------------------------------------------------------

// Asegurarse de que el video se reproduzca correctamente
document.addEventListener('DOMContentLoaded', function() {
  const video = document.querySelector('.background-video-banner-services');
  
  // Reintentar la reproducción si falla
  video.addEventListener('error', function() {
      console.error('Error loading video');
      video.load();
  });


  // Asegurarse de que el video se reproduzca en dispositivos móviles
  if (video.paused) {
      video.play().catch(function(error) {
          console.log("Video autoplay failed:", error);
      });
  }
});

// Optimización del rendimiento para el video
let videoQuality = 'high';

// Detectar conexión lenta
if (navigator.connection) {
  const connection = navigator.connection;
  if (connection.effectiveType === '3g' || connection.effectiveType === '2g') {
      videoQuality = 'low';
  }
}

// Función para ajustar la calidad del video según el dispositivo y la conexión
function adjustVideoQuality() {
  const video = document.querySelector('.background-video-banner-services');
  if (videoQuality === 'low') {
      video.setAttribute('playsinline', '');
      video.setAttribute('preload', 'none');
  }
}

// Manejar el cambio de orientación en dispositivos móviles
window.addEventListener('orientationchange', function() {
  // Reajustar el layout después del cambio de orientación
  setTimeout(function() {
      window.scrollTo(0, 0);
  }, 200);
});

// Llamar a la función de ajuste de calidad
adjustVideoQuality();