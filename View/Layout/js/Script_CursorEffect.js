/***************************************/
/*Efecto del cursor para toda la pagina*/
/***************************************/
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
});
/*******************************************/
/*END Efecto del cursor para toda la pagina*/
/*******************************************/