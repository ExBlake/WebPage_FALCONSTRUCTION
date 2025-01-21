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
                content.style.opacity = 1 - progress;
                content.style.transform = `translateY(${progress * 50}px)`;
            }
        } else {
            // Scrolling up
            if (currentScrollTop > sectionTop - window.innerHeight && currentScrollTop < sectionBottom - window.innerHeight) {
                const progress = 1 - (sectionBottom - currentScrollTop - window.innerHeight) / rect.height;
                content.style.opacity = progress;
                content.style.transform = `translateY(${(1 - progress) * 50}px)`;
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

// Modal functionality
const modal = document.getElementById('imageModal');
const modalMainImage = document.getElementById('modalMainImage');
const modalThumbnails = document.getElementById('modalThumbnails');
const closeButton = document.querySelector('.modal-close--Projects--Portfolio-Attachment');
const imageContainers = document.querySelectorAll('.image-container--Projects--Portfolio-Attachment');

// Define image sources for each phase
const phaseImages = {
    1: [
        "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-RDrQNfekaklBM4noT7RujqROGOjR54.png",
        "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-RDrQNfekaklBM4noT7RujqROGOjR54.png",
        "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-RDrQNfekaklBM4noT7RujqROGOjR54.png"
    ],
    2: [
        "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-XiVRa6Waq3ONEEqNruuCuDOy8gG1RW.png",
        "/placeholder.svg?height=800&width=600",
        "/placeholder.svg?height=800&width=600"
    ],
    3: [
        "/placeholder.svg?height=800&width=600",
        "/placeholder.svg?height=800&width=600",
        "/placeholder.svg?height=800&width=600"
    ]
};

// Add click event to all image containers
imageContainers.forEach((container) => {
    container.addEventListener('click', () => {
        const phase = container.getAttribute('data-phase');
        openModal(phase);
    });
});

function openModal(phase) {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    updateModalContent(phase, 0);
}

function updateModalContent(phase, selectedIndex) {
    const images = phaseImages[phase];
    
    // Update main image
    modalMainImage.src = images[selectedIndex];
    
    // Clear and rebuild thumbnails
    modalThumbnails.innerHTML = '';
    images.forEach((src, index) => {
        const thumb = document.createElement('img');
        thumb.src = src;
        thumb.classList.add('modal-thumbnail--Projects--Portfolio-Attachment');
        if (index === selectedIndex) {
            thumb.classList.add('active');
        }
        thumb.addEventListener('click', () => {
            updateModalContent(phase, index);
        });
        modalThumbnails.appendChild(thumb);
    });
}

// Close modal when clicking close button or outside the image
closeButton.addEventListener('click', closeModal);
modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModal();
    }
});

function closeModal() {
    modal.style.display = 'none';
    document.body.style.overflow = '';
}

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (modal.style.display === 'block') {
        if (e.key === 'Escape') {
            closeModal();
        } else if (e.key === 'ArrowLeft') {
            navigateModal(-1);
        } else if (e.key === 'ArrowRight') {
            navigateModal(1);
        }
    }
});

function navigateModal(direction) {
    const currentPhase = modalMainImage.src.includes('RDrQNfekaklBM4noT7RujqROGOjR54') ? '1' : 
                         modalMainImage.src.includes('XiVRa6Waq3ONEEqNruuCuDOy8gG1RW') ? '2' : '3';
    const currentImages = phaseImages[currentPhase];
    const currentIndex = currentImages.indexOf(modalMainImage.src);
    let newIndex = currentIndex + direction;
    
    if (newIndex >= currentImages.length) {
        newIndex = 0;
    } else if (newIndex < 0) {
        newIndex = currentImages.length - 1;
    }
    
    updateModalContent(currentPhase, newIndex);
}

document.documentElement.style.scrollBehavior = 'smooth';

/*****************************/
/* Script para la sección de contacto */
/*****************************/