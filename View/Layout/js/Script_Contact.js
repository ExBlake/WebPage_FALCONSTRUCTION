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