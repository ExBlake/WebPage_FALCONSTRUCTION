<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Estilos_Contacto">
    <link rel="stylesheet" href="Estilos_Header">
    <title>Contact Form</title>
	
</head>
<body>
<?php
    // Inclusión del Header
    require_once 'Layout/Header.php';
    ?>
    <div class="container-contacts">
        <div class="form-section-contacts">
            <h1 class="title-contacts">Let's work together<span>.</span></h1>
            <p class="subtitle-contacts">Or reach us via : <a href="mailto:Publius@mail.com">Publius@mail.com</a></p>
            
            <form>
                <div class="input-grid-contacts">
                    <div class="form-group-contacts">
                        <label>First name</label>
                        <input type="text" class="form-control-contacts" placeholder="true">
                        <span class="input-icon-contacts">👤</span>
                    </div>
                    <div class="form-group-contacts">
                        <label>Last name</label>
                        <input type="text" class="form-control-contacts" placeholder="coder">
                        <span class="input-icon-contacts">👤</span>
                    </div>
                </div>
                
                <div class="form-group-contacts">
                    <label>Email</label>
                    <input type="email" class="form-control-contacts" placeholder="true@coder.com">
                    <span class="input-icon-contacts">✉️</span>
                </div>
                
                <div class="form-group-contacts with-textarea">
                    <label>Message</label>
                    <textarea class="form-control-contacts" placeholder="this is some message"></textarea>
                    <span class="input-icon-contacts">💬</span>
                </div>
                
                <div class="form-footer-contacts">
                    <button type="button" class="attachment-btn-contacts">.</button>
                    <button type="submit" class="send-btn-contacts">Send message</button>
                </div>
            </form>
        </div>
        
        <div class="image-section-contacts">
            <button class="close-button">×</button>
            <img src="PImageContact/Banner.jpg" alt="Workspace with laptop and coffee">
        </div>
    </div>
</body>
</html>
