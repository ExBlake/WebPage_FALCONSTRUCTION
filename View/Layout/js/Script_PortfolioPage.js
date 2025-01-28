document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('navToggle');
    const closeMenu = document.getElementById('closeMenu');
    const fullscreenMenu = document.getElementById('fullscreenMenu');
    const menuItems = document.querySelectorAll('.menu-item');
    const menuImage = document.querySelector('.menu-image');

    navToggle.addEventListener('click', () => {
        // Alternar la clase 'active' para abrir el menú
        fullscreenMenu.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    });

    closeMenu.addEventListener('click', () => {
        // Cerrar el menú
        fullscreenMenu.classList.remove('active');
        document.body.classList.remove('menu-open');
    });

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const imageSrc = item.getAttribute('data-image');
            menuImage.style.backgroundImage = `url(${imageSrc})`;
            menuImage.style.opacity = '0.3'; // Ajustado para mejor contraste
        });

        item.addEventListener('mouseleave', () => {
            menuImage.style.opacity = '0';
        });

        item.addEventListener('click', () => {
            menuItems.forEach(otherItem => {
                otherItem.style.opacity = '0.5'; // Opacidad de los no seleccionados
            });
            item.style.opacity = '1'; // Mantener el seleccionado visible
        });
    });
});

/******************************/
/* Script para la sección de proyectos */
/******************************/

let lastScrollTop = 0;
const sections = document.querySelectorAll('.section--Projects--Portfolio-Attachment');
const contents = document.querySelectorAll('.content--Projects--Portfolio-Attachment');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active--Projects--Portfolio-Attachment');
        } else {
            entry.target.classList.remove('active--Projects--Portfolio-Attachment');
        }
    });
}, {
    threshold: 0.1
});

sections.forEach(section => {
    observer.observe(section);
});

window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;

    const height = document.documentElement.scrollHeight - window.innerHeight;
    const progress = (scrolled / height) * 100;
    document.querySelector('.progress-bar--Projects--Portfolio-Attachment').style.width = `${progress}%`;

    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    contents.forEach((content, index) => {
        const section = sections[index];
        const rect = section.getBoundingClientRect();
        const sectionTop = rect.top + window.pageYOffset;
        const sectionBottom = sectionTop + rect.height;

        if (currentScrollTop > lastScrollTop) {
            // Scrolling down
            if (currentScrollTop > sectionTop && currentScrollTop < sectionBottom) {
                const progress = (currentScrollTop - sectionTop) / rect.height;
                content.style.opacity = progress;
                content.style.transform = `translateY(${(1 - progress) * 50}px)`;
            }
        } else {
            // Scrolling up
            if (currentScrollTop > sectionTop - window.innerHeight && currentScrollTop < sectionBottom - window.innerHeight) {
                const progress = 1 - (sectionBottom - currentScrollTop - window.innerHeight) / rect.height;
                content.style.opacity = 1 - progress;
                content.style.transform = `translateY(${progress * 50}px)`;
            }
        }
    });

    document.querySelectorAll('.parallax-image--Projects--Portfolio-Attachment').forEach(image => {
        const parent = image.parentElement;
        const parentRect = parent.getBoundingClientRect();
        const parentMiddle = parentRect.top + parentRect.height / 2;
        const windowMiddle = window.innerHeight / 2;
        const difference = parentMiddle - windowMiddle;
        const speed = 0.15;

        image.style.transform = `scale(1.1) translateY(${difference * speed}px)`;
    });

    lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
}, false);


/******************************/
/* Script para la sección de proyectos */
/******************************/

/*****************************/
/* Script para la sección de contacto */
/*****************************/

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

/***********************/
/* Script para casa 3D */
/***********************/

var wrap = document.getElementById("wrap");
var begX, begY, prevX, prevY, newX, newY, dv;
newX=33; newY=67;
document.onmousedown = beginD;
document.onmouseup = stopD;
/*document.touchstart = beginD;
document.touchend = stopD;*/

function beginD(e){
  dv = wrap.parentNode.offsetWidth >> 7;
  begX = e.clientX/(dv!=0?dv:dv=1);
  begY = e.clientY/dv;
  prevX = newX;
  prevY = newY;
  drag = true;
  document.onmousemove = letsD;
  /*document.ontouchmove = letsD;*/
  return false;
}

function letsD(e) {
  if (!drag) return;
  newX = (prevY > 0 && prevY < 180) ? (prevX - (e.clientX/dv) + begX) : (prevX + (e.clientX/dv) - begX);
  newY = prevY - (e.clientY /dv) + begY;
  wrap.style.transform = "rotateX(" + newY + "deg) rotateZ(" + newX + "deg)";
  return false;
}

function stopD() {
  drag = false;
  rotReset();
}

function rotReset() {
  if (newX >= 360 || newX < 0) newX -= 360 * Math.floor(newX / 360);
  if (newY >= 360 || newY < 0) newY -= 360 * Math.floor(newY / 360);
  wrap.style.transform = "rotateX(" + newY + "deg) rotateZ(" + newX + "deg)";
}

wrap.style.transform = "rotateX(" + (newY += .11) + "deg) rotateZ(" + (newX += .11) + "deg)"; //flicker preventer

/***********************/
/* Script para casa 3D */
/***********************/