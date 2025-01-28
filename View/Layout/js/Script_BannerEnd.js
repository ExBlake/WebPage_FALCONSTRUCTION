gsap.registerPlugin(CustomEase, Flip);

CustomEase.create("osmo-ease", "0.625, 0.05, 0, 1");

gsap.defaults({
  ease: "osmo-ease",
  duration: 0.8,
});

function initFlipButtons() {
  const wrappers = document.querySelectorAll('[data-flip-button="wrap"]');

  wrappers.forEach((wrapper) => {
    const buttons = wrapper.querySelectorAll('[data-flip-button="button"]');
    const bg = wrapper.querySelector('[data-flip-button="bg"]');

    buttons.forEach((button) => {
      // Handle mouse enter
      button.addEventListener("mouseenter", function () {
        const state = Flip.getState(bg);
        this.appendChild(bg);
        Flip.from(state, {
          duration: 0.4,
        });
      });

      // Handle focus for keyboard navigation
      button.addEventListener("focus", function () {
        const state = Flip.getState(bg);
        this.appendChild(bg);
        Flip.from(state, {
          duration: 0.4,
        });
      });

      // Handle mouse leave
      button.addEventListener("mouseleave", () => {
        const state = Flip.getState(bg);
        const activeLink = wrapper.querySelector(".active-ForAll");
        activeLink.appendChild(bg);
        Flip.from(state, {
          duration: 0.4,
        });
      });

      // Handle blur to reset background for keyboard navigation
      button.addEventListener("blur", () => {
        const state = Flip.getState(bg);
        const activeLink = wrapper.querySelector(".active-ForAll");
        activeLink.appendChild(bg);
        Flip.from(state, {
          duration: 0.4,
        });
      });
    });
  });
}

function initTabSystem() {
  const wrappers = document.querySelectorAll('[data-tabs="wrapper"]');

  wrappers.forEach((wrapper) => {
    const nav = wrapper.querySelector('[data-tabs="nav"]');
    const buttons = nav.querySelectorAll('[data-tabs="button"]');
    const contentWrap = wrapper.querySelector('[data-tabs="content-wrap"]');
    const contentItems = contentWrap.querySelectorAll(
      '[data-tabs="content-item"]'
    );
    const visualWrap = wrapper.querySelector('[data-tabs="visual-wrap"]');
    const visualItems = visualWrap.querySelectorAll(
      '[data-tabs="visual-item"]'
    );

    let activeButton = buttons[0];
    let activeContent = contentItems[0];
    let activeVisual = visualItems[0];
    let isAnimating = false;

    function switchTab(index, initial = false) {
      if (!initial && (isAnimating || buttons[index] === activeButton)) return;
      isAnimating = true;

      const outgoingContent = activeContent;
      const incomingContent =
        contentItems[Math.min(index, contentItems.length - 1)];
      const outgoingVisual = activeVisual;
      const incomingVisual =
        visualItems[Math.min(index, visualItems.length - 1)];

      const outgoingLines =
        outgoingContent.querySelectorAll("[data-tabs-fade]") || [];
      const incomingLines =
        incomingContent.querySelectorAll("[data-tabs-fade]");

      const timeline = gsap.timeline({
        defaults: {
          ease: "power3.inOut",
        },
        onComplete: () => {
          if (!initial) {
            outgoingContent &&
              outgoingContent.classList.remove("active-ForAll");
            outgoingVisual && outgoingVisual.classList.remove("active-ForAll");
          }
          activeContent = incomingContent;
          activeVisual = incomingVisual;
          isAnimating = false;
        },
      });

      incomingContent.classList.add("active-ForAll");
      incomingVisual.classList.add("active-ForAll");

      timeline
        .to(outgoingLines, { y: "-2em", autoAlpha: 0 }, 0)
        .to(outgoingVisual, { autoAlpha: 0, xPercent: 3 }, 0)
        .fromTo(
          incomingLines,
          { y: "2em", autoAlpha: 0 },
          { y: "0em", autoAlpha: 1, stagger: 0.075 },
          0.4
        )
        .fromTo(
          incomingVisual,
          { autoAlpha: 0, xPercent: 3 },
          { autoAlpha: 1, xPercent: 0 },
          "<"
        );

      activeButton && activeButton.classList.remove("active-ForAll");
      buttons[index].classList.add("active-ForAll");
      activeButton = buttons[index];
    }

    switchTab(0, true); // on page load

    buttons.forEach((button, i) => {
      button.addEventListener("click", () => switchTab(i));
    });

    contentItems[0].classList.add("active-ForAll");
    visualItems[0].classList.add("active-ForAll");
    buttons[0].classList.add("active-ForAll");
  });
}

document.addEventListener("DOMContentLoaded", () => {
  initTabSystem();
  initFlipButtons();
});
