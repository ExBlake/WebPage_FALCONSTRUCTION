document.addEventListener("DOMContentLoaded", () => {
   
    const carousels = document.querySelectorAll(".post-carousel-review");
    const sidebar = document.querySelector(".sidebar-review");
    const postsContainer = document.querySelector(".feed-section-review");
    const buttons = document.querySelectorAll(".switch-btn-review");
    const videos = document.querySelectorAll('.custom-video');
    /****************************/
    /*Funcionalidad del carrusel*/
    /****************************/
    carousels.forEach((carousel) => {
        const container = carousel.querySelector(".carousel-container-review");
        const slides = carousel.querySelectorAll(".carousel-slide-review");
        const prevButton = carousel.querySelector(".prev-review");
        const nextButton = carousel.querySelector(".next-review");
        let currentIndex = 0;
        let startX = 0;
        let isDragging = false;
        let currentTranslate = 0;
        let prevTranslate = 0;

        container.style.cursor = 'grab';

        function showSlide(index) {
            currentIndex = index;
            currentTranslate = -index * 100;
            container.style.transform = `translateX(${currentTranslate}%)`;
        }

        container.addEventListener('mousedown', dragStart);
        container.addEventListener('touchstart', dragStart);
        container.addEventListener('mouseup', dragEnd);
        container.addEventListener('touchend', dragEnd);
        container.addEventListener('mousemove', drag);
        container.addEventListener('touchmove', drag);
        container.addEventListener('mouseleave', dragEnd);
        container.addEventListener('contextmenu', (e) => e.preventDefault());

        function dragStart(e) {
            isDragging = true;
            container.style.cursor = 'grabbing';
            startX = getPositionX(e);
            container.style.transition = 'none';
        }

        function drag(e) {
            if (!isDragging) return;
            e.preventDefault();
            const currentPosition = getPositionX(e);
            const diff = currentPosition - startX;
            const move = (diff / carousel.offsetWidth) * 100;
            currentTranslate = prevTranslate + move;
            container.style.transform = `translateX(${currentTranslate}%)`;
        }

        function dragEnd() {
            isDragging = false;
            container.style.cursor = 'grab';
            container.style.transition = 'transform 0.3s ease-out';
            
            const movedBy = currentTranslate - prevTranslate;

            if (Math.abs(movedBy) > 20) { 
                if (movedBy < 0 && currentIndex < slides.length - 1) {
                    currentIndex++;
                } else if (movedBy > 0 && currentIndex > 0) {
                    currentIndex--;
                }
            }

            showSlide(currentIndex);
            prevTranslate = currentTranslate;
        }

        function getPositionX(e) {
            return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
        }

        prevButton.addEventListener("click", () => {
            if (currentIndex > 0) {
                showSlide(currentIndex - 1);
            }
        });

        nextButton.addEventListener("click", () => {
            if (currentIndex < slides.length - 1) {
                showSlide(currentIndex + 1);
            }
        });

        slides.forEach(slide => {
            slide.addEventListener('dragstart', (e) => e.preventDefault());
        });

        showSlide(currentIndex);
    });
    /********************************/
    /*END Funcionalidad del carrusel*/
    /********************************/

    /************************************************************/
    /*Funcionalidad de los limites de los fixdes de los usuarios*/
    /************************************************************/
    function updateSidebarPosition() {
        if (!sidebar || !postsContainer) return;
    
        const postsRect = postsContainer.getBoundingClientRect();
        const sidebarHeight = sidebar.offsetHeight;
        const viewportHeight = window.innerHeight;
    
        // Posición inicial de la barra lateral (ajusta según tu diseño)
        const sidebarInitialTop = 100; // Por ejemplo, 100px desde el top
    
        // Calcula hasta dónde puede bajar la sidebar
        const maxSidebarTop = postsRect.bottom - sidebarHeight;
    
        // Lógica adicional para evitar que desaparezca arriba
        const minSidebarTop = Math.max(postsRect.top, sidebarInitialTop);
    
        if (postsRect.top >= sidebarInitialTop) {
            // Cuando el contenedor de posts está en su posición inicial, la barra lateral no debe estar fija
            sidebar.style.position = "absolute";
            sidebar.style.top = `${postsContainer.offsetTop}px`; // La coloca en la parte superior del contenedor
        } else if (postsRect.bottom > viewportHeight) {
            // Mantiene fixed mientras haya contenido
            sidebar.style.position = "fixed";
            sidebar.style.top = `${minSidebarTop}px`; // Usa minSidebarTop para evitar que desaparezca
        } else {
            // Se detiene en su última posición visible sin desaparecer
            sidebar.style.position = "fixed";
            sidebar.style.top = `${Math.min(maxSidebarTop, sidebarInitialTop)}px`;
        }
    }
    
    window.addEventListener("scroll", updateSidebarPosition);
    window.addEventListener("resize", updateSidebarPosition);
    updateSidebarPosition();

    /****************************************************************/
    /*END Funcionalidad de los limites de los fixdes de los usuarios*/
    /****************************************************************/

    /******************************************************************/
    /*Funcionalidad para hacer click en el objeto he irse al posts*/
    /******************************************************************/
    buttons.forEach(button => {
        button.addEventListener("click", function () {
            // Obtener el username del atributo data-username
            const username = this.getAttribute("data-username");

            // Buscar la publicación correspondiente
            const post = document.querySelector(`#post-${CSS.escape(username)}`);

            // Si se encuentra la publicación, hacer scroll hacia ella
            if (post) {
                post.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });
    /******************************************************************/
    /*END Funcionalidad para hacer click en el objeto he irse al posts*/
    /******************************************************************/


    /******************************************************************/
    /*Funcionalidad para hacer click en el objeto y desmutear el video*/
    /******************************************************************/
    videos.forEach(video => {
        // Al hacer clic en el video
        video.addEventListener('click', () => {
            if (video.muted) {
                // Si el video está silenciado, desmútealo y muestra el icono de "unmute"
                video.muted = false;
                video.classList.remove('muted'); // Cambiar clase para cambiar icono
            } else {
                // Si el video no está silenciado, mútelo y muestra el icono de "mute"
                video.muted = true;
                video.classList.add('muted'); // Cambiar clase para cambiar icono
            }
        });
    });
    /**********************************************************************/
    /*END Funcionalidad para hacer click en el objeto y desmutear el video*/
    /**********************************************************************/

    /*******************************************************************************/
    /*Funcionalidad para hacer el efecto de auntoincremento en el numero del banner*/
    /*******************************************************************************/
    function animateCounter(element, start, end, duration) {
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let timer = setInterval(() => {
            current += increment;
            element.textContent = "+" + current ;
            if (current === end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    let counterElement = document.querySelector(".counter");
    animateCounter(counterElement, 0, 99, 2000);

    /***********************************************************************************/
    /*END Funcionalidad para hacer el efecto de auntoincremento en el numero del banner*/
    /***********************************************************************************/
});