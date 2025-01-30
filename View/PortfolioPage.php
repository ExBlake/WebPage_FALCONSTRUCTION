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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--Iconos-->
    <link rel="stylesheet" href="Estilos_Header">
    <link rel="stylesheet" href="Estilos_Portafolio">
    <link rel="stylesheet" href="Estilos_Footer">
    <link rel="stylesheet" href="Estilos_Banner">

</head>

<body>
    <?php
    // Inclusión del Header
    require_once 'Layout/Header.php';
    ?>

    <div class="parallax-container">
        <section class="parallax-section hero-section">
            <main class="hero-portfolio">
                <div class="hero-content-portfolio">
                    <!-- Decorative elements -->
                    <div class="hero-decorative-line"></div>
                    <div class="hero-side-text">EXCELLENCE IN CONSTRUCTION</div>

                    <!-- Main content -->
                    <div class="hero-main-content">
                        <div class="spaceport-portfolio">
                            <span class="line-before"></span>
                            FALCONSTRUCTIONS PRESENTS
                            <span class="line-after"></span>
                        </div>

                        <h1 class="main-title-portfolio">
                            <span class="title-line">SHAPING NEW</span>
                            <span class="title-line">SUCCESS</span>
                            <span class="title-line">STORIES</span>
                        </h1>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-value="25">0</span>
                                <span class="stat-label">YEARS OF<br>EXCELLENCE</span>
                            </div>
                            <div class="stat-separator"></div>
                            <div class="stat-item">
                                <span class="stat-number" data-value="500">0</span>
                                <span class="stat-label">PROJECTS<br>COMPLETED</span>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll indicator -->
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

                <!-- Blueprint grid overlay -->
                <div class="blueprint-grid"></div>
            </main>
        </section>

        <section class="parallax-section projects-section">
            <div class="progress-bar--Projects--Portfolio-Attachment"></div>
            <div class="scroll-container--Projects--Portfolio-Attachment">

                <section class="section--Projects--title">
                    <div class="content--Projects--Portfolio-Attachment-title">
                        <div class="project-phase-container">

                            <div class="content-wrapper">
                                <div class="text-content">
                                    <h3 class="phase-label">Explora</h3>
                                    <h2 class="project-title">
                                        <span class="title-text">Nuestros Proyectos</span>
                                    </h2>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </section>

        <section class="section--Projects--Portfolio-Attachment item1">
            <div class="content--Projects--Portfolio-Attachment">
                <div class="section-subtitle--Projects--Portfolio-Attachment">Fase 2</div>
                <h2 class="section-title--Projects--Portfolio-Attachment">ARRIVAL TO NEW MEXICO</h2>
                <p class="section-text--Projects--Portfolio-Attachment">
                    Welcome to New Mexico! You will have ample time to settle into your luxury accommodations
                    and
                    prepare for your spaceflight experience.
                </p>
            </div>
            <div class="image-container--Projects--Portfolio-Attachment" data-phase="2">
                <img src="PImageProject/project-1.jpg" alt="New Mexico"
                    class="parallax-image--Projects--Portfolio-Attachment">
                <div class="hover-text">+</div>
            </div>
        </section>

        <section class="section--Projects--Portfolio-Attachment item2">
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
    </section>

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
    </div>

    <section class="BannerEnd-Portfolio">
        <?php
        // Inclusión Banner End
        require_once 'Layout/BannerEnd.php';
        ?>
    </section>
    <?php
    // Inclusión del footer
    require_once 'Layout/Footer.php';
    ?>

    <script src="Script_Portafolio"></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
    <script src="Script_Banner"></script>
    <script src="Script_Header"></script>
    

</body>

</html>

