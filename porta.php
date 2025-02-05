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
    <style>
        :root {
            --background-gradient: linear-gradient(180deg, rgb(0, 0, 0) 0%, rgba(0, 21, 36, 0.979) 100%);
            --text-color: #ffffff;
            --border-color: #1e3a5f;
            --post-background: rgba(4, 27, 58, 0.5);
            --search-text: #a0a0a0;
            --icon-color: #ffffff;
            --background: #000000;
            --foreground: #ffffff;
            --primary: #3b82f6;
            --primary-foreground: #ffffff;
            --muted: #6b7280;
            --muted-foreground: #9ca3af;
            --border: #1f2937;
        }

        /* Estilos base (PC y Tablet) */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: var(--background-gradient);
            color: var(--text-color);
        }


        /* Estilización del scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: rgb(255, 255, 255);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(0, 60, 109);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgb(0, 31, 56);
        }


        .background-gradients {
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
        }

        .gradient-1 {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgb(0, 0, 0) 0%, rgba(0, 21, 36, 0.84) 100%);
        }

        .gradient-2 {
            position: absolute;
            top: 0;
            right: 0;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(59, 131, 246, 0.18) 0%, rgba(59, 130, 246, 0) 70%);
        }

        .gradient-3 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(138, 92, 246, 0.12) 0%, rgba(139, 92, 246, 0) 70%);
        }

        #cursor-effect {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .guest-experience {
            font-size: 14px;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .purple-line {
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, #ffff, #2D3748);
            margin-bottom: 80px;
        }

        h1 {
            font-size: 64px;
            font-weight: 300;
            line-height: 1.1;
            margin-bottom: 120px;
        }

        .content-block {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: -20px;
            position: relative;
        }

        .text-left,
        .text-right {
            width: 45%;
        }

        h2 {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        p {
            color: #A0AEC0;
            line-height: 1.6;
        }

        .image-right {
            width: 450px;
            height: 500px;
            object-fit: cover;
        }

        .image-right-2 {
            width: 550px;
            height: 250px;
            object-fit: cover;
        }

        .image-left {
            width: 410px;
            height: 350px;
            object-fit: cover;
        }

        .caption-left,
        .caption-right {
            font-size: 12px;
            letter-spacing: 1px;
            margin-top: 20px;
            color: #A0AEC0;
        }

        .caption-left {
            position: absolute;
            left: 0;
            bottom: -50px;
        }

        .caption-right {
            position: absolute;
            right: 0;
            bottom: -50px;
        }

        .reverse {
            flex-direction: row-reverse;
        }

        .bottom-image-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: 80px;
        }

        .bottom-image {
            width: 500px;
            position: relative;
        }

        .bottom-image img {
            width: 100%;
            height: auto;
        }

        .caption-bottom {
            font-size: 12px;
            letter-spacing: 1px;
            margin-top: 20px;
            color: #A0AEC0;
        }

        /* Estilos para tablets */
        @media (max-width: 1024px) {
            .container {
                padding: 40px 20px;
            }

            h1 {
                font-size: 56px;
                margin-bottom: 100px;
            }

            .content-block {
                margin-bottom: 100px;
            }

            .image-right {
                width: 400px;
                height: 450px;
            }

            .image-right-2 {
                width: 500px;
                height: 225px;
            }

            .image-left {
                width: 360px;
                height: 300px;
            }

            .bottom-image {
                width: 450px;
            }
        }

        /* Estilos para celulares */
        @media (max-width: 768px) {
            .container {
                padding: 30px 15px;
            }

            h1 {
                font-size: 40px;
                margin-bottom: 60px;
                text-align: center;
            }

            .content-block {
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin-bottom: 60px;
            }

            .reverse {
                flex-direction: column;
            }

            .text-left,
            .text-right {
                width: 100%;
                margin-bottom: 30px;
            }

            h2 {
                font-size: 28px;
            }

            .image-right,
            .image-left,
            .image-right-2 {
                width: 100%;
                height: auto;
                max-width: 350px;
                margin-bottom: 20px;
            }

            .caption-left,
            .caption-right {
                position: static;
                margin-bottom: 0;
            }

            .bottom-image-container {
                align-items: center;
            }

            .bottom-image {
                width: 100%;
                max-width: 350px;
            }

            .guest-experience,
            .purple-line {
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* Animation keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Animation classes */
        .animate-on-scroll {
            opacity: 0;
            transition: opacity 0.6s, transform 0.6s;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .scale-in {
            animation: scaleIn 0.6s ease-out forwards;
        }

        /* Hover effects */
        .image-right,
        .image-left,
        .image-right-2 {
            transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
        }

        .image-right:hover,
        .image-left:hover,
        .image-right-2:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        h1,
        h2,
        p {
            transition: color 0.3s ease-out;
        }

        h1:hover,
        h2:hover {
            color: var(--muted);
        }

        p:hover {
            color: var(--text-color);
        }

         /* Loading animation */
         .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgb(0, 0, 0) 0%, rgba(0, 21, 36, 0.84) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
        }

        .loading-image {
            position: relative;
            width: 111px;
            height: auto;
            z-index: 0;
            transform: none;
        }

        .loading::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            border: 5px solid #fff;
            border-top: 5px solid #2D3748;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            z-index: 1;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .fade-in-up-element {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            visibility: hidden;
        }

        .fade-in-up-element.visible {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }
    </style>
</head>

<body>
    
<?php
    // Inclusión del Header
    require_once 'View/Layout/Header.php';
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
            require_once 'View/Layout/BannerEnd.php';
            ?>
        </section>
        <?php
        // Inclusión del footer
        require_once 'View/Layout/Footer.php';
        ?>

        <script src="Script_Portafolio"></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
        <script src="Script_Banner"></script>
        <script src="Script_Header"></script>

    <script>
document.addEventListener('DOMContentLoaded', () => {
            // Loading animation
            const loading = document.createElement('div');
            loading.classList.add('loading');

            const loadingContainer = document.createElement('div');
            loadingContainer.classList.add('loading-container');

            const image = document.createElement('img');
            image.src = 'View/img/Logo_Phone.png';
            image.classList.add('loading-image');

            loadingContainer.appendChild(image);
            loading.appendChild(loadingContainer);
            document.body.appendChild(loading);

            window.addEventListener('load', () => {
                setTimeout(() => {
                    loading.style.opacity = '0';
                    setTimeout(() => {
                        loading.remove();
                    }, 500);
                }, 1000);
            });

            // Scroll animations
            const animatedElements = document.querySelectorAll('.animate-on-scroll');

            const isElementInViewport = (el) => {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            };

            const handleScroll = () => {
                animatedElements.forEach((el) => {
                    if (isElementInViewport(el)) {
                        el.classList.add('is-visible');
                        if (el.classList.contains('content-block')) {
                            el.classList.add('scale-in');
                        } else {
                            el.classList.add('fade-in-up');
                        }
                    }
                });
            };

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Initial check
        });


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

        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in-up-element');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>

</html>