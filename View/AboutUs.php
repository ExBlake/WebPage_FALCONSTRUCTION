<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ABOUT US</title>
    <link rel="icon" href="PImageIconos/Icono.png" type="image/png">
    <!-- Carga de fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Estilos personalizados para diferentes secciones -->
    <link rel="stylesheet" href="Estilos_Header">
    <link rel="stylesheet" href="Estilos_Nosotros">
    <link rel="stylesheet" href="Estilos_Footer">
    <link rel="stylesheet" href="Estilos_Banner">
    <link rel="stylesheet" href="Estilos_Cursor">
    <link rel="stylesheet" href="Estilos_Boton_Flotante">
</head>

<body>
    <?php
        require_once 'Layout/Header.php';
    ?>
    <div class="parallax-container">
        <section class="parallax-section hero-section">
            <main class="hero-portfolio">
                <div class="hero-content-portfolio">
                    <div class="hero-decorative-line"></div>
                    <div class="hero-side-text">EXCELLENCE IN DRYWALL AND FLOOING</div>

                    <div class="hero-main-content">
                        <div class="spaceport-portfolio">
                            <span class="line-before"></span>
                            FALCONSTRUCTION PRESENTS
                            <span class="line-after"></span>
                        </div>

                        <h1 class="main-title-portfolio">
                            <span class="title-line">BUILDING NEW</span>
                            <span class="title-line">SUCCESS</span>
                            <span class="title-line">STORIES</span>
                        </h1>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-value="100">0</span>
                                <span class="stat-label">QUALITY <br>AND EXCELLENCE</span>
                            </div>
                            <div class="stat-separator"></div>
                            <div class="stat-item">
                                <span class="stat-number" data-value="122">0</span>
                                <span class="stat-label">COMPLETED<br>PROJECTS</span>
                            </div>
                        </div>
                    </div>

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

                <div class="blueprint-grid"></div>
            </main>
        </section>

        <div class="background-gradients">
            <div class="gradient-1"></div>
            <div class="gradient-2"></div>
            <div class="gradient-3"></div>
        </div>

        <div class="container">
            <div class="banner-container-about-us">
                <h1 class="main-heading-about-us">
                    Excellence in every structure, trust in every project.
                </h1>
                <p class="subtitle-about-us">
                    With a commitment to quality and customer satisfaction, Falconstruction builds with integrity and
                    expertise.
                </p>
            </div>


            <section class="savings-section-about-us">
                <div class="background-split-about-us">
                    <div class="background-left-about-us"></div>
                    <div class="background-right-about-us">
                        <div class="content-about-us">
                            <h2 class="heading-about-us">At Falconstruction, Quality is Our Priority</h2>
                            <p class="description-about-us">
                                We are a specialized organization in Construction Consulting, Contracting, and
                                Subcontracting. We provide comprehensive solutions for complete project development-from
                                the initial planning stage to the execution of new constructions and remodels.
                            </p>
                            <p class="description-about-us">
                                Our expertise covers both interior and exterior finishes, including flooring, bathrooms,
                                and swimming pools. We pride ourselves on delivering reliable, efficient, and
                                high-quality service, ensuring that every project is completed on time and within
                                budget.
                            </p>
                            <ul class="benefits-list-about-us">
                                <li class="benefit-item-about-us">
                                    Personalized solutions tailored to each project, guaranteeing exceptional results.
                                </li>
                                <li class="benefit-item-about-us">
                                    A team of experts using premium materials and advanced construction techniques.
                                </li>
                            </ul>
                            <a href="#" class="cta-button-about-us">
                                Discover Our Services
                                <span class="arrow-about-us">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <section class="savings-section-about-us">
                <div class="background-split-about-us">
                    <div class="background-right-about-us">
                        <div class="content-about-us">
                            <h2 class="heading-about-us left">Unleash Your Project's Potential</h2>
                            <p class="description-about-us">
                                At Falconstruction, we fuse visionary strategy with expert execution to transform your
                                project into a resounding success.
                            </p>
                            <ul class="benefits-list-about-us">
                                <li class="benefit-item-about-us">
                                    <strong>Consulting & Management:</strong> Strategic planning, cost control, and
                                    seamless project execution.
                                </li>
                                <li class="benefit-item-about-us">
                                    <strong>Turnkey Construction:</strong> Complete builds, renovations, and premium
                                    finishes from design to delivery.
                                </li>
                                <li class="benefit-item-about-us">
                                    <strong>Specialized Labor:</strong> Expert teams ensuring efficiency, compliance,
                                    and top-quality craftsmanship.
                                </li>
                            </ul>
                            <a href="#" class="cta-button-about-us">
                                Transform Your Project Now
                                <span class="arrow-about-us">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="background-left-about-us"></div>
                </div>
            </section>



            <h2 class="title-about-us" style="text-align: center; margin-top: 100px;">Our Professional Team</h2>

            <section class="profiles" style="display: flex; flex-wrap: wrap; justify-content: center; margin: 40px">
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageNosotros/FelipeHernandez.png">
                    </div>
                    <p>Juan Felipe</p>
                </div>

                <!-- 1 Modal - 'Juan Felipe Hernandez Zapata' -->
                <div id="modal-1" class="modal">
                    <div class="modal-content">
                        <span class="close-modal">&times;</span>
                        <div class="modal-body">
                            <div class="modal-image">
                                <img src="PImageUsers/fotofelipe.png" alt="Andrés Martínez">
                            </div>
                            <div class="modal-info">
                                <h3>Andrés Martínez</h3>
                                <p class="role">Director de Proyectos</p>
                                <div class="info-details">
                                    <p><strong>Nombre completo:</strong> Andrés Felipe Martínez Rodríguez</p>
                                    <p><strong>Edad:</strong> 35 años</p>
                                    <p><strong>Experiencia:</strong> 12 años en el sector construcción</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 1 Modal - 'Juan Felipe Hernandez Zapata' -->


                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Juan Camilo</p>
                </div>

                <!-- 2 Modal - 'Juan Camilo' -->
                <div id="modal-2" class="modal">
                    <div class="modal-content">
                        <span class="close-modal">&times;</span>
                        <div class="modal-body">
                            <div class="modal-image">
                                <img src="PImageUsers/fotofelipe.png" alt="Laura Gómez">
                            </div>
                            <div class="modal-info">
                                <h3>Laura Gómez</h3>
                                <p class="role">Directora de Proyectos</p>
                                <div class="info-details">
                                    <p><strong>Nombre completo:</strong>Laura Daniela Úzuga Gómez</p>
                                    <p><strong>Edad:</strong> 30 años</p>
                                    <p><strong>Experiencia:</strong> 10 años en el sector construcción</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 Modal - 'Laura Gómez' -->

                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Javier López</p>
                </div>

                <!-- 3 Modal - 'Javier López' -->
                <div id="modal-3" class="modal">
                    <div class="modal-content">
                        <span class="close-modal">&times;</span>
                        <div class="modal-body">
                            <div class="modal-image">
                                <img src="PImageUsers/fotofelipe.png" alt="Javier López">
                            </div>
                            <div class="modal-info">
                                <h3>Javier López</h3>
                                <p class="role">Director de Proyectos</p>
                                <div class="info-details">
                                    <p><strong>Nombre completo:</strong>Javier Londoño López</p>
                                    <p><strong>Edad:</strong> 40 años</p>
                                    <p><strong>Experiencia:</strong> 20 años en el sector construcción</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 Modal - 'Javier López' -->

            </section>

            <section class="steps-section-about-us">
                <div class="container-about-us">
                    <div class="header-about-us">
                        <h2 class="title-about-us">At Falconstruction, success is built effortlessly.</h2>
                        <p class="subtitle-about-us">
                            Say goodbye to hassles. Just reach out, and we'll transform your vision into a masterpiece
                            with a seamless process.
                        </p>
                    </div>


                    <div class="steps-grid-about-us">
                        <div class="step-card-about-us">
                            <div class="step-image-about-us">
                                <img src="PImageProject/project-6.jpg" alt="Paso 1: Consulta inicial">
                            </div>
                            <div class="step-content-about-us">
                                <h3 class="step-title-about-us">
                                    <span class="step-number-about-us">1.</span> Solicita una consulta
                                </h3>
                            </div>
                        </div>

                        <div class="step-card-about-us">
                            <div class="step-image-about-us">
                                <img src="PImageProject/project-5.jpg" alt="Paso 2: Planificación del proyecto">
                            </div>
                            <div class="step-content-about-us">
                                <h3 class="step-title-about-us">
                                    <span class="step-number-about-us">2.</span> Planificación del proyecto
                                </h3>
                            </div>
                        </div>

                        <div class="step-card-about-us">
                            <div class="step-image-about-us">
                                <img src="PImageProject/project-4.jpg" alt="Paso 3: Ejecución de la obra">
                            </div>
                            <div class="step-content-about-us">
                                <h3 class="step-title-about-us">
                                    <span class="step-number-about-us">3.</span> Ejecución de la obra
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cards-section-about-us">
                <div class="container-aa-about-us">
                    <div class="video-background">
                        <video autoplay muted loop class="fullscreen-video">
                            <source src="PVideoBanner/video.mp4" type="video/mp4">
                            Your browser does not support the video.
                        </video>
                    </div>
                    <div class="content-about-us floating-content">
                        <p class="subtitle-about-us">Tailored Guidance</p>
                        <h2 class="title-about-us">Your Vision, Expertly Delivered</h2>
                        <p class="description-about-us">
                            At Falconstruction, we provide dedicated support at every stage transforming your ideas into
                            a striking reality.
                        </p>
                        <a href="#" class="cta-button-about-us">
                            Build With Us Today
                            <span class="arrow-about-us">→</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="philosophy-section-about-us">
                <div class="container-about-us">
                    <h2 class="title-about-us">Our Core Values</h2>
                    <div class="philosophy-grid-about-us">
                        <div class="philosophy-card-about-us card-1-about-us">
                            <span class="card-number-about-us">1</span>
                            <h3 class="card-title-about-us">Unwavering Commitment</h3>
                            <p class="card-description-about-us">
                                We approach every project with unmatched dedication, ensuring responsible and efficient
                                execution.
                            </p>
                        </div>
                        <div class="philosophy-card-about-us card-2-about-us">
                            <span class="card-number-about-us">2</span>
                            <h3 class="card-title-about-us">Uncompromising Quality</h3>
                            <p class="card-description-about-us">
                                Excellence is our standard; we guarantee superior craftsmanship at every phase of
                                construction.
                            </p>
                        </div>
                        <div class="philosophy-card-about-us card-3-about-us">
                            <span class="card-number-about-us">3</span>
                            <h3 class="card-title-about-us">Dependable Reliability</h3>
                            <p class="card-description-about-us">
                                Our clients trust us for steadfast support and security, ensuring peace of mind with
                                every project.
                            </p>
                        </div>
                        <div class="philosophy-card-about-us card-4-about-us">
                            <span class="card-number-about-us">4</span>
                            <h3 class="card-title-about-us">Peak Efficiency</h3>
                            <p class="card-description-about-us">
                                We optimize time and resources to deliver profitable outcomes, maximizing every
                                opportunity.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <section class="BannerEnd-Portfolio">
            <?php
                require_once 'Layout/BannerEnd.php';
            ?>
        </section>

        <div id="cursor-effect"></div>
        <?php
            require_once 'Layout/FloatingButton.php';
            require_once 'Layout/Footer.php';
        ?>
        <!-- Banner Final -->
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
        <script src="Script_Banner"></script>
        <!-- End Banner Final -->
        <script src="Script_Nosotros"></script>
        <script src="Script_Header"></script>
        <script src="Script_Cursor"></script>
        <script src="Script_Boton_Flotante"></script>
</body>

</html>