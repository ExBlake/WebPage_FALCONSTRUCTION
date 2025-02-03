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
