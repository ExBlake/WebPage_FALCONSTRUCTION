gsap.registerPlugin(ScrollTrigger);

// Animaciones existentes para PC
if (window.matchMedia("(min-width: 1025px)").matches) {
  let tl1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".banner-container-about card-about",
      start: "top 20px",
      end: "600px top",
      toggleActions: "restart pause restart pause"
    }
  });
  tl1
    .from(".banner-container-about .text h1", { x: 200, opacity: 0, duration: 1 })
    .from(".banner-container-about .text p", { y: 300, opacity: 0, duration: 1 }, "-=1")
    .from(".banner-container-about .card-about", { y: -300, opacity: 0, duration: 1 }, "-=1");

  let tl2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".last-container",
      start: "top top",
      end: "300px center",
      scrub: 2,
      toggleActions: "restart pause reverse pause"
    }
  });
  tl2.from(".last-container .vertical-about p", { y: 300, opacity: 0, duration: 1 });

  let tl3 = gsap.timeline({
    scrollTrigger: {
      trigger: ".horizontal-container-about .panel.one",
      start: "80px center",
      end: "80px bottom",
      scrub: 3,
      toggleActions: "restart pause reverse pause"
    }
  });
  tl3
    .from(".horizontal-container-about .panel.one h2", {
      y: -80,
      opacity: 0,
      duration: 0.8
    })
    .from(
      ".horizontal-container-about .panel.one .card-about",
      { y: 300, opacity: 0, duration: 0.8 },
      "<0.4"
    );

  let tl4 = gsap.timeline({
    scrollTrigger: {
      trigger: ".horizontal-container-about .panel.two .card-about:nth-child(4)",
      start: "1600px top",
      end: "1600px bottom",
      scrub: 3,
      toggleActions: "restart pause reverse pause"
    }
  });
  tl4.from(".horizontal-container-about .panel.two .card-about", {
    y: 400,
    opacity: 0,
    duration: 1.2,
    stagger: 0.6
  });

  let tl5 = gsap.timeline({
    scrollTrigger: {
      trigger: ".horizontal-container-about .panel.three p",
      start: "4600px top",
      end: "4600px bottom",
      scrub: 3,
      toggleActions: "restart pause reverse pause"
    }
  });
  tl5
    .from(".horizontal-container-about .panel.three .card-about", {
      y: 400,
      opacity: 0,
      duration: 1.2
    })
    .from(
      ".horizontal-container-about .panel.three p",
      { x: 500, opacity: 0, duration: 1.2 },
      "<.7"
    );

  let sections = gsap.utils.toArray(".panel"),
    container = document.querySelector(".horizontal-container-about");

  gsap.to(sections, {
    xPercent: -100 * (sections.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: container,
      id: "trigger",
      pin: true,
      scrub: 1,
      snap: 1 / (sections.length - 1),
      end: () => "+=" + container.offsetWidth
    }
  });
}

// Animaciones para dispositivos táctiles (móviles y tabletas)
if (window.matchMedia("(max-width: 1024px)").matches) {
  const container = document.querySelector(".horizontal-container-about");
  const sections = gsap.utils.toArray(".panel");

  let startX = 0; // Posición inicial del toque
  let currentX = 0; // Posición actual
  let xOffset = 0; // Desplazamiento acumulado
  let maxOffset = -(container.offsetWidth - window.innerWidth); // Límite máximo del desplazamiento

  container.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  container.addEventListener("touchmove", (e) => {
    currentX = e.touches[0].clientX;
    let deltaX = currentX - startX;

    // Calcular el nuevo desplazamiento con los límites
    xOffset = Math.min(0, Math.max(maxOffset, xOffset + deltaX));

    // Aplicar el desplazamiento
    gsap.to(container, { x: xOffset, duration: 0.3, ease: "power2.out" });

    startX = currentX; // Actualizar la posición inicial para el próximo frame
  });

  container.addEventListener("touchend", () => {
    // Añadir lógica de snap si se requiere
    const snapPoint = Math.round(xOffset / window.innerWidth) * window.innerWidth;
    gsap.to(container, { x: snapPoint, duration: 0.5, ease: "power3.out" });
    xOffset = snapPoint; // Actualizar el desplazamiento acumulado
  });

  // Animaciones de contenido dentro de los paneles
  sections.forEach((section) => {
    gsap.from(section, {
      opacity: 0,
      y: 100,
      scrollTrigger: {
        trigger: section,
        start: "top center",
        end: "bottom center",
        scrub: true,
      },
    });
  });
}



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