<!--------------------------------------------------------------------------------->
<!--All rights reserved-->
<!--Santiago Villada & Brandon Palacios-->
<!--exblake.com-->
<!--------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FALCONSTRUCTIONS</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> <!--Iconos-->
    <link rel="stylesheet" href="Estilos_Header">
    <link rel="stylesheet" href="Estilos_Portafolio">
    <link rel="stylesheet" href="Estilos_Footer">
    
</head>

<body>
    <?php
        // Inclusión del Header
        require_once 'Layout/Header.php';
    ?>

    <main class="hero-portfolio">
        <div class="hero-content-portfolio">
            <div class="spaceport-portfolio">FALCONSTRUCTIONS PRESENTS</div>
            <h1 class="main-title-portfolio">SHAPING NEW<br>SUCCESS<br>STORIES</h1>
            <div class="scroll-container">
                <div class="mouse-icon">
                    <div class="mouse-wheel"></div>
                </div>
                <div class="arrow-container">
                    <div class="arrow"></div>
                    <div class="arrow"></div>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
    </main>

   

    <section>
        <div class="progress-bar--Projects--Portfolio-Attachment"></div>
        <div class="scroll-container--Projects--Portfolio-Attachment">
            <section class="section--Projects--Portfolio-Attachment">
                <div class="content--Projects--Portfolio-Attachment">
                    <div class="section-subtitle--Projects--Portfolio-Attachment">Fase 1</div>
                    <h2 class="section-title--Projects--Portfolio-Attachment">PREPARE FOR TAKE-OFF</h2>
                    <p class="section-text--Projects--Portfolio-Attachment">
                        The Gateway to Space at Spaceport America is our operational center where our team of experts
                        will guide you through curated activities designed to prepare your mind and body for
                        spaceflight.
                    </p>
                </div>
                <div class="image-container--Projects--Portfolio-Attachment" data-phase="1">
                    <img src="/View/img/projects/project-0.jpg" alt="Preparación"
                        class="parallax-image--Projects--Portfolio-Attachment">
                    <div class="hover-text">+</div>
                </div>
            </section>

            <section class="section--Projects--Portfolio-Attachment">
                <div class="content--Projects--Portfolio-Attachment">
                    <div class="section-subtitle--Projects--Portfolio-Attachment">Fase 2</div>
                    <h2 class="section-title--Projects--Portfolio-Attachment">ARRIVAL TO NEW MEXICO</h2>
                    <p class="section-text--Projects--Portfolio-Attachment">
                        Welcome to New Mexico! You will have ample time to settle into your luxury accommodations and
                        prepare for your spaceflight experience.
                    </p>
                </div>
                <div class="image-container--Projects--Portfolio-Attachment" data-phase="2">
                    <img src="PImageProject/project-1.jpg" alt="New Mexico"
                        class="parallax-image--Projects--Portfolio-Attachment">
                        <div class="hover-text">+</div>
                </div>
            </section>

            <section class="section--Projects--Portfolio-Attachment">
                <div class="content--Projects--Portfolio-Attachment">
                    <div class="section-subtitle--Projects--Portfolio-Attachment">Fase 3</div>
                    <h2 class="section-title--Projects--Portfolio-Attachment">INTRODUCTION TO SPACEFLIGHT</h2>
                    <p class="section-text--Projects--Portfolio-Attachment">
                        Learn the fundamentals of spaceflight and what to expect during your journey beyond Earth's
                        atmosphere.
                    </p>
                </div>
                <div class="image-container--Projects--Portfolio-Attachment" data-phase="3">
                    <img src="PImageProject/project-2.jpg" alt="Spaceflight"
                        class="parallax-image--Projects--Portfolio-Attachment">
                        <div class="hover-text">+</div>
                </div>
            </section>
        </div>

        <!-- Add Modal HTML -->
        <div class="modal--Projects--Portfolio-Attachment" id="imageModal">
            <div class="modal-content--Projects--Portfolio-Attachment">
                <button class="modal-close--Projects--Portfolio-Attachment">&times;</button>
                <img src="/placeholder.svg" alt="" class="modal-main-image--Projects--Portfolio-Attachment"
                    id="modalMainImage">
                <div class="modal-thumbnails--Projects--Portfolio-Attachment" id="modalThumbnails">
                    <!-- Thumbnails will be added here dynamically -->
                </div>
            </div>
        </div>
    </section>

    <?php
        // Inclusión del footer

        require_once 'Layout/Footer.php';
    ?>

    <script src="Script_Portafolio"></script>
</body>

</html>