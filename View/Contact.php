<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CONTACT US</title>
    <link rel="icon" href="PImageIconos/Icono.png" type="image/png">
    <!--For icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="Estilos_Contacto">
    <link rel="stylesheet" href="Estilos_Header">
    <link rel="stylesheet" href="Estilos_Cursor">
</head>
<body>
    <?php
        require_once 'Layout/Header.php';
    ?>
    <div class="container-contacts">
        <div class="form-section-contacts">
            <h1 class="title-contacts">Let's work together<span>.</span></h1>
            <p class="subtitle-contacts">Or reach us via : <a href="mailto:Publius@mail.com">Publius@mail.com</a></p>
            <form id="contactForm">
                <div class="input-grid-contacts">
                    <div class="form-group-contacts">
                        <label class="title-contacts">Full Name</label>
                        <input type="text" class="form-control-contacts" id="fullName" placeholder="Complete name here"
                            required>
                    </div>
                    <div class="form-group-contacts">
                        <label class="title-contacts">Phone Number</label>
                        <input type="text" class="form-control-contacts" id="phoneNumber" placeholder="Your phone"
                            required>
                    </div>
                </div>
                <div class="form-group-contacts with-textarea">
                    <label class="title-contacts">Message</label>
                    <textarea class="form-control-contacts" id="message" placeholder="This is some message"
                        required></textarea>
                </div>
                <div class="input-grid-contacts">
                    <div class="form-group-contacts">
                        <label class="title-contacts">Select a medium</label>
                        <div class="radio-inputs">
                            <label class="radio">
                                <input type="radio" name="contactMethod" value="whatsapp" checked>
                                <span class="name">WhatsApp</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="contactMethod" value="email">
                                <span class="name">Email</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-footer-contacts">
                    <button type="button" class="attachment-btn-contacts">.</button>
                    <button type="button" class="send-btn-contacts" onclick="sendMessage()">Send message</button>
                </div>
            </form>
        </div>

        <div class="image-section-contacts">
            <img src="PImageContact/logo para camilo.jpg" alt="Workspace with laptop and coffee">
        </div>
    </div>

    <div id="cursor-effect"></div>

    <script src="Script_Header"></script>
    <script src="Script_Contactos"></script>
    <script src="Script_Cursor"></script>
</body>
</html> 