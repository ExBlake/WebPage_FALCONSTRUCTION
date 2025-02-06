<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Experience</title>

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

        <div class="background-gradients">
            <div class="gradient-1"></div>
            <div class="gradient-2"></div>
            <div class="gradient-3"></div>
        </div>

        <div class="container">
            <p class="guest-experience animate-on-scroll" style="text-align: right;">GUEST EXPERIENCE</p>
            <div class="purple-line animate-on-scroll" style="margin-left: auto;"></div>

            <h1 class="animate-on-scroll" style="text-align: right;">
                SPACE IS MEANT
                <br>
                TO BE SHARED
            </h1>

            <div class="content-block animate-on-scroll">
                <img src="PImageProject/project-0.jpg" alt="Unity 25" class="image-right">
                <div class="text-left">
                    <h2>Going to space is the kind of life event you'll want your loved ones to be a part of.</h2>
                    <p>Bring up to three guests so they can share in the love, wonder and awe of your spaceflight.</p>
                </div>
                <p class="caption-left">UNITY 25 SPACEFLIGHT CELEBRATION</p>
            </div>

            <div class="content-block animate-on-scroll">
                <div class="text-right">
                    <p>While you participate in pre-flight readiness, your loved ones will enjoy curated activities,
                        top-tier amenities, and most importantly, a front row seat on flight day.</p>
                </div>
                <img src="PImageProject/project-1.jpg" alt="White Sands" class="image-left">
                <p class="caption-right">TRIP TO WHITE SANDS NATIONAL PARK</p>
            </div>

            <div class="bottom-image-container">
                <div class="content-block animate-on-scroll">
                    <img src="PImageProject/project-2.jpg" alt="Unity 25" class="image-right-2">
                    <div class="text-left">
                        <p>Bring up to three guests so they can share in the love, wonder and awe of your spaceflight.
                        </p>
                    </div>
                    <p class="caption-left">UNITY 25 SPACEFLIGHT CELEBRATION</p>
                </div>
            </div>
        </div>


        <section class="BannerEnd-Portfolio fade-in-up-element">
            <?php
            // Inclusión Banner End
            require_once 'Layout/BannerEnd.php';
            ?>
        </section>

        <div id="cursor-effect"></div>

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