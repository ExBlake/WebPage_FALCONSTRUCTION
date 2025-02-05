function sendMessage() {
    let fullName = document.getElementById("fullName").value;
    let phoneNumber = document.getElementById("phoneNumber").value;
    let message = document.getElementById("message").value;
    let contactMethod = document.querySelector('input[name="contactMethod"]:checked').value;

    if (!fullName || !phoneNumber || !message) {
        alert("Please fill in all fields.");
        return;
    }

    if (contactMethod === "whatsapp") {
        let whatsappURL = `https://wa.me/19048988000?text=Hello, my name is ${encodeURIComponent(fullName)}.%0A
        Phone: ${encodeURIComponent(phoneNumber)}%0A
        Message: ${encodeURIComponent(message)}`;
        window.open(whatsappURL, "_blank");
    } else if (contactMethod === "email") {
        let mailtoLink = `mailto:Publius@mail.com?subject=New Contact Request&body=Name: ${encodeURIComponent(fullName)}%0A
        Phone: ${encodeURIComponent(phoneNumber)}%0A
        Message: ${encodeURIComponent(message)}`;
        window.location.href = mailtoLink;
    }
}

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
