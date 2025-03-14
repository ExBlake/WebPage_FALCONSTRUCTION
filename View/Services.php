<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SERVICES</title>
    <link rel="icon" href="PImageIconos/Icono.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="Estilos_Header">
    <link rel="stylesheet" href="Estilos_Servicios">
    <link rel="stylesheet" href="Estilos_Footer">
    <link rel="stylesheet" href="Estilos_Banner">
    <link rel="stylesheet" href="Estilos_Cursor">
    <link rel="stylesheet" href="Estilos_Boton_Flotante">
</head>

<body>
    <?php
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
                    <source src="PImageServicios/Banner.mp4" type="video/mp4">
                </video>

                <!-- Overlay con gradiente -->
                <div class="overlay-banner-services"></div>
                <!-- Main content -->
                <div class="content-banner-services">
                    <div class="content-wrapper-banner-services">
                        <div class="header-banner-services">
                            <h1 class="title-banner-services">Our Services</h1>
                            <p class="publisher-banner-services"></p>

                            <div class="platforms-banner-services">
                                <span class="platform-badge-banner-services">Consulting</span>
                                <span class="platform-badge-banner-services">Contracting</span>
                                <span class="platform-badge-banner-services">Subcontracting</span>
                            </div>
                        </div>

                        <div class="purchase-section-banner-services">
                            <div class="price-container-banner-services">
                                <div class="price-banner-services">
                                    <span>Everything with us</span>
                                </div>
                            </div>

                            <p class="subscription-note-banner-services">
                                At FALCONSTRUCTION SERVICES LLC, we transform ideas into realities. We manage every
                                phase of the project, from feasibility study to final delivery, ensuring quality,
                                efficiency, and results that exceed expectations.
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
                            <h1 class="title-section-2-service">Exceeding Expectations, Building Trust</h1>
                            <p>
                                We pride ourselves on our unwavering responsibility and commitment to surpassing our
                                customers’ expectations at every step. With ethical practices, personalized service, and
                                exceptional quality, we create lasting trust and ensure complete satisfaction.
                            </p>
                        </div>


                        <!-- Columna derecha -->
                        <div class="hero__media">
                            <div class="hero__monitor">
                                <img src="PImageServicios/Section-2.jpg" alt="image" class="hero__game-image">
                                <div class="hero__scanner"></div>
                            </div>
                            <img src="PImageServicios/Section-2-1.jpg" alt="image" class="hero__controller">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="fullscreen-section combined-section">
            <div class="container-services-section">

                <div class="timeline" id="timeline-container">

                    <div class="timeline-items">
                        <div class="timeline-item" data-image="PImageServicios/Service_1.jpg">
                            <div class="content-services-section">
                                <h2 class="titulo-services-section main">OUR SERVICES</h2>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/Service_1.jpg">
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
                                <span class="subtitle">S-1 SVS</span>
                                <h2 class="titulo-services-section">Project Consulting and Management</h2>
                                <p class="parrafo-services-section">We provide advisory and comprehensive project
                                    management, covering financial feasibility studies, strategic planning, budgeting
                                    and cost control, permits and regulations management, and on-site supervision to
                                    ensure efficient and optimized execution.</p>
                                <button class="cta-button">Get Ready</button>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/Service_2.jpg">
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
                                <span class="subtitle">S-2 SVS</span>
                                <h2 class="titulo-services-section">Construction Contracting</h2>
                                <p class="parrafo-services-section">We execute complete projects as primary contractors,
                                    from design to final delivery. We specialize in residential and commercial flooring for remodeling, new construction, premium
                                    interior and exterior finishes, bathrooms, pools,  
                                    as well as rigorous quality control and compliance management.</p>
                                <button class="cta-button">Start Your Project</button>
                            </div>
                        </div>
                        <div class="timeline-item" data-image="PImageServicios/Service_3.jpg">
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
                                <span class="subtitle">S-3 SVS</span>
                                <h2 class="titulo-services-section">Specialized Workforce Subcontracting</h2>
                                <p class="parrafo-services-section">We supply highly skilled personnel for framing and drywall contractors
                                    who require efficient and reliable execution. We handle the selection, hiring, and
                                    management of specialized workforce, including payroll and insurance, securing regulatory compliance and reducing administrative burdens.</p>
                                <button class="cta-button">Power Your Project</button>
                            </div>
                        </div>
                        
                        <div class="timeline-item" data-image="PImageServicios/Service_3.jpg">
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
                            <div class="content-services-section">
                                <br><br><br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="image-container" id="image-container">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-zH04rGA73bITXkpags0NsGAUvolSqH.png"
                        alt="Timeline Image" id="timeline-image">
                </div>

                <div class="slider-container" id="slider-container">
                    <div class="slider">
                        <div class="slide">
                            <img src="PImageProject/project-6.jpg" alt="Meeting room" class="slide-image">
                            <h2 class="slide-title">Adquisición de Propiedades para Flips o
                                Renta/Wholesale</h2>
                            <p class="slide-description">En Falconstruction, ofrecemos un servicio
                                especializado de adquisición de propiedades orientado tanto a inversionistas que
                                buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                inversión.</p>
                            <button class="cta-button">Prepare for Launch</button>
                        </div>
                        <div class="slide">
                            <img src="PImageProject/project-5.jpg" alt="Training" class="slide-image">
                            <h2 class="slide-title">Adquisición de Propiedades para Flips o
                                Renta/Wholesale</h2>
                            <p class="slide-description">En Falconstruction, ofrecemos un servicio
                                especializado de adquisición de propiedades orientado tanto a inversionistas que
                                buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                inversión.</p>
                            <button class="cta-button">Prepare for Launch</button>
                        </div>
                        <div class="slide">
                            <img src="PImageProject/project-3.jpg" alt="Equipment" class="slide-image">
                            <h2 class="slide-title">Adquisición de Propiedades para Flips o
                                Renta/Wholesale</h2>
                            <p class="slide-description">En Falconstruction, ofrecemos un servicio
                                especializado de adquisición de propiedades orientado tanto a inversionistas que
                                buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                inversión.</p>
                            <button class="cta-button">Prepare for Launch</button>
                        </div>
                        <div class="slide">
                            <img src="PImageProject/project-4.jpg" alt="Final" class="slide-image">
                            <h2 class="slide-title">Adquisición de Propiedades para Flips o
                                Renta/Wholesale</h2>
                            <p class="slide-description">En Falconstruction, ofrecemos un servicio
                                especializado de adquisición de propiedades orientado tanto a inversionistas que
                                buscan oportunidades para "flips" (comprar, renovar y vender rápidamente para
                                obtener beneficios) como a aquellos interesados en la renta o venta al por mayor
                                (wholesale). Gracias a nuestra vasta experiencia y conocimiento del mercado
                                inmobiliario, identificamos propiedades con un alto potencial de retorno de
                                inversión.</p>
                            <button class="cta-button">Prepare for Launch</button>
                        </div>
                    </div>
                    <div class="dots"></div>
                </div>
            </div>
        </section>

        <section class="fullscreen-section contacts-banner-container" id="contacts-section">
            <div class="contacts-banner-promo-card">
                <div class="contacts-banner-gradient-blob"></div>
                <div class="contacts-banner-content">
                    <h1 class="contacts-banner-title" id="contacts-title">BUILD THE FUTURE: CONNECT WITH US TODAY AND TURN YOUR VISION INTO REALITY!</h1>
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
    <?php
        require_once 'Layout/FloatingButton.php';
    ?>
    <!-- Banner Final -->
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
    <script src="Script_Banner"></script>
    <!-- End Banner Final -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="Script_Services"></script>
    <script src="Script_Header"></script>
    <script src="Script_Cursor"></script>
    <script src="Script_Boton_Flotante"></script>
</body>

</html>