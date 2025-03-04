/***********************************************************/
/*Funcionalidad para enviar el mensaje via whatsapp o email*/
/***********************************************************/
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
        let whatsappMessage = `Hello, my name is *${encodeURIComponent(fullName)}*.%0A%0A` +
                              `I am very interested in your services and would love to have more details it.%0A%0A` +
                              `*Message:* ${encodeURIComponent(message)}%0A%0A` +
                              `Please give me a call at your earliest convenience.%0A`+
                              `*Phone:* ${encodeURIComponent(phoneNumber)}%0A%0A` +
                              `Looking forward to your response. *Thank you!*`;
    
        let whatsappURL = `https://wa.me/19048988000?text=${whatsappMessage}`;
        window.open(whatsappURL, "_blank");
    
    } else if (contactMethod === "email") {
        let emailSubject = "New Contact Request";
        let emailBody = `Hello,%0A%0A` +
                        `My name is ${encodeURIComponent(fullName)}%0A%0A`+
                        `I am very interested in your services. I would love to get more information.%0A%0A` +
                        `Message: ${encodeURIComponent(message)}%0A%0A` +
                        `Phone: ${encodeURIComponent(phoneNumber)}%0A` +
                        `Looking forward to your response.%0A%0A Best regards,%0A%0A ${encodeURIComponent(fullName)}`;
    
        let mailtoLink = `mailto:commercial@falconstructs.com?subject=${encodeURIComponent(emailSubject)}&body=${emailBody}`;
        window.location.href = mailtoLink;
    } else if (contactMethod === "sms") {
        let smsMessage = `Hello, my name is ${fullName}.%0A` +
                         `Phone: ${phoneNumber}%0A` +
                         `Message: ${message}`;
        let smsURL = `sms:${phoneNumber}?body=${smsMessage}`;
        window.location.href = smsURL;
    }
}
/***************************************************************/
/*END Funcionalidad para enviar el mensaje via whatsapp o email*/
/***************************************************************/
