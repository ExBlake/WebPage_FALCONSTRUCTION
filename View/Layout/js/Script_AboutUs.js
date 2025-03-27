
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


/*************************************/
/* Script para el modal de avatares  */
/*************************************/

document.addEventListener('DOMContentLoaded', function () {
  console.log('Script de modal cargado');

  // Asegurar que todos los modales están completamente ocultos desde el inicio
  document.querySelectorAll('.modal').forEach(modal => {
      modal.style.visibility = 'hidden';
      modal.style.opacity = '0';
  });

  // Asignar evento click a cada avatar para abrir su modal correspondiente
  const avatars = document.querySelectorAll('.avatar');
  avatars.forEach((avatar, index) => {
      const modalId = `modal-${index + 1}`;
      avatar.addEventListener('click', () => {
          const modal = document.getElementById(modalId);
          if (modal) {
              modal.style.visibility = 'visible';
              modal.style.opacity = '1';
              modal.classList.add('show-users');
              document.body.style.overflow = 'hidden';
          }
      });
  });

  // Cerrar modales al hacer click en el botón de cierre
  const closeButtons = document.querySelectorAll('.close-modal');
  closeButtons.forEach(button => {
      button.addEventListener('click', () => {
          const modal = button.closest('.modal');
          modal.classList.remove('show-users');
          modal.style.opacity = '0';
          setTimeout(() => {
              modal.style.visibility = 'hidden';
          }, 300);
          document.body.style.overflow = 'auto';
      });
  });

  // Cerrar modal al hacer click fuera del contenido del modal
  window.addEventListener('click', (e) => {
      if (e.target.classList.contains('modal')) {
          const modal = e.target;
          modal.classList.remove('show-users');
          modal.style.opacity = '0';
          setTimeout(() => {
              modal.style.visibility = 'hidden';
          }, 300);
          document.body.style.overflow = 'auto';
      }
  });

  // Cerrar modal con la tecla ESC
  document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
          const modals = document.querySelectorAll('.modal');
          modals.forEach(modal => {
              modal.classList.remove('show-users');
              modal.style.opacity = '0';
              setTimeout(() => {
                  modal.style.visibility = 'hidden';
              }, 300);
          });
          document.body.style.overflow = 'auto';
      }
  });
});

/*************************************/
/* Script para el modal de avatares  */
/*************************************/