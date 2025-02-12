<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Custom Slider with GSAP</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="Estilos_Header">

    <link rel="stylesheet" href="Estilos_Servicios">
    <link rel="stylesheet" href="Estilos_Footer">
    <link rel="stylesheet" href="Estilos_Banner">

</head>

<body>
    <?php
    // Inclusión del Header
    require_once 'Layout/Header.php';
    ?>

    <div class="background-gradients">
        <div class="gradient-1"></div>
        <div class="gradient-2"></div>
        <div class="gradient-3"></div>
    </div>

    <div class="fullscreen-container">
        <section class="fullscreen-section">
            <div class="hero-banner-services">
                <!-- Video Background -->
                <video autoplay loop muted playsinline class="background-video-banner-services">
                    <source src="PVideoBanner/video2 copy.mp4" type="video/mp4">
                </video>

                <!-- Overlay con gradiente -->
                <div class="overlay-banner-services"></div>

                <!-- Contenido principal -->
                <div class="content-banner-services">
                    <div class="content-wrapper-banner-services">
                        <div class="header-banner-services">
                            <h1 class="title-banner-services">Services</h1>
                            <p class="publisher-banner-services"> Interactive Entertainment</p>

                            <div class="platforms-banner-services">
                                <span class="platform-badge-banner-services">X</span>
                                <span class="platform-badge-banner-services">XX</span>
                                <span class="platform-badge-banner-services">XXX</span>
                            </div>
                        </div>

                        <div class="purchase-section-banner-services">
                            <div class="price-container-banner-services">
                                <div class="price-banner-services">
                                    <span>Todo con nosotros</span>
                                </div>
                            </div>

                            <p class="subscription-note-banner-services">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio natus laboriosam
                                dolorem, placeat dolorum, nesciunt iste eos, est quos dolores officiis saepe? Officiis,
                                architecto aut facilis iure nobis nulla at!
                            </p>

                            <div class="buttons-banner-services">
                                <button class="contact-banner-services">Contact Us</button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="fullscreen-section start-services">
            <div class="hero">
                <div class="hero__background">
                    <div id="particles-js"></div>
                </div>

                <div class="container">
                    <div class="hero__content">
                        <!-- Columna izquierda -->
                        <div class="hero__text">
                            <h1 class="title-section-2-service">Satisfacción a Nuestros Clientes</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic deleniti 
                                rerum cumque eveniet ratione non ullam reprehenderit eius, iure aperiam 
                                voluptates eaque dolorum, deserunt facere. Molestiae unde corrupti rem non.</p>
                        </div>

                        <!-- Columna derecha -->
                        <div class="hero__media">
                            <div class="hero__monitor">
                                <img src="PImageProject/project-6.jpg"
                                    alt="image" class="hero__game-image">
                                <div class="hero__scanner"></div>
                            </div>
                            <img src="PImageProject/project-3.jpg" alt="image"
                                class="hero__controller">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="fullscreen-section combined-section">
            <div class="container-services-section">

                <div class="timeline">

                    <div class="timeline-items">
                        <div class="timeline-item" data-image="PImageServicios/kkkk.jpg">
                            <div class="content-services-section">
                                <h2 class="titulo-services-section main">NUESTROS SERVICIOS</h2>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/kkkk.jpg">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <div class="content-services-section">
                                <span class="subtitle">L-5 DAYS</span>
                                <h2 class="titulo-services-section">Adquisición de Propiedades para Flips o
                                    Renta/Wholesale</h2>
                                <p class="parrafo-services-section">En Falconstruction, ofrecemos un servicio
                                    especializado de adquisición de propiedades orientado tanto a inversionistas que
                                    buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                    obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                    (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                    inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                    inversión.</p>
                                <button class="cta-button">Get Ready</button>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/pexels-iriser-1366957.jpg">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path
                                        d="M17.8 19.2L16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-services-section">
                                <span class="subtitle">L-4 DAYS</span>
                                <h2 class="titulo-services-section">Adquisición de Propiedades para Flips o
                                    Renta/Wholesale</h2>
                                <p class="parrafo-services-section">En Falconstruction, ofrecemos un servicio
                                    especializado de adquisición de propiedades orientado tanto a inversionistas que
                                    buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                    obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                    (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                    inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                    inversión.</p>
                                <button class="cta-button">Plan Arrival</button>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/photo-1559583985-c80d8ad9b29f.jpeg">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path
                                        d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                    </path>
                                    <path
                                        d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                    </path>
                                    <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                    <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                </svg>
                            </div>
                            <div class="content-services-section">
                                <span class="subtitle">L-3 DAYS</span>
                                <h2 class="titulo-services-section">Adquisición de Propiedades para Flips o
                                    Renta/Wholesale</h2>
                                <p class="parrafo-services-section">En Falconstruction, ofrecemos un servicio
                                    especializado de adquisición de propiedades orientado tanto a inversionistas que
                                    buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                    obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                    (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                    inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                    inversión.</p>
                                <button class="cta-button">Learn More</button>
                            </div>
                        </div>
                        <div class="timeline-item"
                            data-image="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-zH04rGA73bITXkpags0NsGAUvolSqH.png">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="content-services-section">
                                <span class="subtitle">L-2 DAYS</span>
                                <h2 class="titulo-services-section">Adquisición de Propiedades para Flips o
                                    Renta/Wholesale</h2>
                                <p class="parrafo-services-section">En Falconstruction, ofrecemos un servicio
                                    especializado de adquisición de propiedades orientado tanto a inversionistas que
                                    buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                    obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                    (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                    inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                    inversión.</p>
                                <button class="cta-button">Start Training</button>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/wallpaper-758922_1280.webp">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                            </div>
                            <div class="content-services-section">
                                <span class="subtitle">L-1 DAYS</span>
                                <h2 class="titulo-services-section">Adquisición de Propiedades para Flips o
                                    Renta/Wholesale</h2>
                                <p class="parrafo-services-section">En Falconstruction, ofrecemos un servicio
                                    especializado de adquisición de propiedades orientado tanto a inversionistas que
                                    buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                    obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                    (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                    inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                    inversión.</p>
                                <button class="cta-button">Prepare for Launch</button>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/wallpaper-758922_1280.webp">
                            <div class="icon-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>
                            </div>
                            <div class="content-services-section">
                                <span class="subtitle">L-1 DAYS</span>
                                <h2 class="titulo-services-section">Adquisición de Propiedades para Flips o
                                    Renta/Wholesale</h2>
                                <p class="parrafo-services-section">En Falconstruction, ofrecemos un servicio
                                    especializado de adquisición de propiedades orientado tanto a inversionistas que
                                    buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                    obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                    (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                    inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                    inversión.</p>
                                <button class="cta-button">Prepare for Launch</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="image-container">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-zH04rGA73bITXkpags0NsGAUvolSqH.png"
                        alt="Timeline Image" id="timeline-image">
                </div>
            </div>
        </section>

        <section class="fullscreen-section contacts-banner-container" id="contacts-section">
            <div class="contacts-banner-promo-card">
                <div class="contacts-banner-gradient-blob"></div>
                <div class="contacts-banner-content">
                    <h1 class="contacts-banner-title" id="contacts-title">CONTÁCTANOS PARA SABER MÁS SOBRE NUESTROS
                        SERVICIOS</h1>
                </div>
                <button class="cta-button luxurious-button">¡Contáctanos!</button>
            </div>
            <div class="background-logo"></div>
        </section>

        <section class="fullscreen-section banner-final">
            <?php
            // Inclusión Banner End
            require_once 'Layout/BannerEnd.php';
            ?>
        </section>


        <footer class="footer-section">
            <?php require_once 'Layout/Footer.php'; ?>
        </footer>

    </div>

    <div id="cursor-effect"></div>

    <!-- partial -->
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js'></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="Script_Banner"></script>
    <script src="Script_Services"></script>

    <script src="Script_Header"></script>
</body>

</html>