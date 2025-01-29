document.addEventListener("DOMContentLoaded", () => {
    // Funcionalidad del carrusel
    const carousels = document.querySelectorAll(".post-carousel-review")

    carousels.forEach((carousel) => {
        const container = carousel.querySelector(".carousel-container-review")
        const slides = carousel.querySelectorAll(".carousel-slide-review")
        const prevButton = carousel.querySelector(".prev-review")
        const nextButton = carousel.querySelector(".next-review")
        let currentIndex = 0

        function showSlide(index) {
            container.style.transform = `translateX(-${index * 100}%)`
        }

        prevButton.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length
            showSlide(currentIndex)
        })

        nextButton.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % slides.length
            showSlide(currentIndex)
        })

        // Inicializar el carrusel
        showSlide(currentIndex)
    })
})

