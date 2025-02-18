<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Proyectos - Falconstruction</title>

    <!-- Carga de fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Estilos personalizados para diferentes secciones -->
    <link rel="stylesheet" href="Estilos_Header"> <!-- Estilos del encabezado -->
    <link rel="stylesheet" href="Estilos_Nosotros"> <!-- Estilos del portafolio -->
    <link rel="stylesheet" href="Estilos_Footer"> <!-- Estilos del pie de página -->
    <link rel="stylesheet" href="Estilos_Banner"> <!-- Estilos del banner -->
    <style>
        .video-and-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .responsive-video {
            width: 100%;
            /* O el tamaño que desees */
            max-width: 600px;
            /* Ajusta según sea necesario */
            height: auto;
        }
    </style>
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
                    <div class="hero-decorative-line"></div>
                    <div class="hero-side-text">EXCELENCIA EN CONSTRUCCIÓN</div>

                    <div class="hero-main-content">
                        <div class="spaceport-portfolio">
                            <span class="line-before"></span>
                            FALCONSTRUCTION PRESENTA
                            <span class="line-after"></span>
                        </div>

                        <h1 class="main-title-portfolio">
                            <span class="title-line">CONSTRUYENDO NUEVAS</span>
                            <span class="title-line">HISTORIAS DE</span>
                            <span class="title-line">ÉXITO</span>
                        </h1>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <span class="stat-number" data-value="15">0</span>
                                <span class="stat-label">AÑOS DE<br>EXCELENCIA</span>
                            </div>
                            <div class="stat-separator"></div>
                            <div class="stat-item">
                                <span class="stat-number" data-value="300">0</span>
                                <span class="stat-label">PROYECTOS<br>COMPLETADOS</span>
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
                    Conoce a <span class="highlight-about-us">Falconstruction</span> y nuestros proyectos<br>
                    innovadores en construcción.
                </h1>
                <p class="subtitle-about-us">
                    Desde nuestra fundación, hemos estado comprometidos con la calidad y la satisfacción del cliente.
                </p>
            </div>

            <section class="savings-section-about-us">
                <div class="background-split-about-us">
                    <div class="background-left-about-us"></div>
                    <div class="background-right-about-us"></div>
                </div>
                <div class="savings-container-about-us">
                    <div class="card-illustration-about-us">
                        <div class="wave-pattern-about-us"></div>
                        <div class="card-bottom-about-us">
                            <div class="card-line-about-us"></div>
                            <div class="plus-button-about-us">+</div>
                        </div>
                    </div>
                    <div class="content-about-us">
                        <h2 class="heading-about-us">En Falconstruction, la calidad es nuestra prioridad</h2>
                        <ul class="benefits-list-about-us">
                            <li class="benefit-item-about-us">
                                Ofrecemos soluciones personalizadas para cada proyecto, garantizando resultados
                                excepcionales.
                            </li>
                            <li class="benefit-item-about-us">
                                Nuestro equipo de expertos trabaja con los mejores materiales y técnicas de
                                construcción.
                            </li>
                        </ul>
                        <a href="#" class="cta-button-about-us">
                            Conoce nuestros servicios
                            <span class="arrow-about-us">→</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class="savings-section-about-us">
                <div class="background-split-about-us">
                    <div class="background-right-about-us"></div>
                    <div class="background-left-about-us"></div>
                </div>
                <div class="savings-container-about-us">
                    <div class="content-about-us">
                        <h2 class="heading-about-us">Comprometidos con la sostenibilidad</h2>
                        <ul class="benefits-list-about-us">
                            <li class="benefit-item-about-us">
                                Implementamos prácticas sostenibles en todos nuestros proyectos para cuidar el medio
                                ambiente.
                            </li>
                            <li class="benefit-item-about-us">
                                Trabajamos con tecnologías innovadoras que minimizan el impacto ambiental.
                            </li>
                        </ul>
                        <a href="#" class="cta-button-about-us">
                            Descubre nuestras iniciativas
                            <span class="arrow-about-us">→</span>
                        </a>
                    </div>

                    <div class="card-illustration-about-us">
                        <div class="wave-pattern-about-us"></div>
                        <div class="card-bottom-about-us">
                            <div class="card-line-about-us"></div>
                            <div class="plus-button-about-us">+</div>
                        </div>
                    </div>
                </div>
            </section>

            <h2 class="title-about-us" style="text-align: center; margin-top: 100px;">Nuestro Equipo Profesional</h2>
            
            <section class="profiles" style="display: flex; flex-wrap: wrap; justify-content: center; margin: 40px">
                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/112/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Andrés Martínez</p>
                </div>

                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/54/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Laura Gómez</p>
                </div>

                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/48/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Javier López</p>
                </div>

                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/210/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Carolina Ruiz</p>
                </div>

                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/210/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Carolina Ruiz</p>
                </div>

                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/210/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Carolina Ruiz</p>
                </div>

                <!-- <div class="avatar" style="--bg-img:url(https://picsum.photos/id/210/300/200)"> -->
                <div class="avatar" style="--bg-img:url(PImageUsers/fondo3.jpg)">
                    <div class="avatar-img">
                        <img src="PImageUsers/fotofelipe.png">
                    </div>
                    <p>Carolina Ruiz</p>
                </div>
            </section>

            <section class="steps-section-about-us">
                <div class="container-about-us">
                    <div class="header-about-us">
                        <h2 class="title-about-us">Con Falconstruction, todo es fácil.</h2>
                        <p class="subtitle-about-us">
                            Nuestro proceso es sencillo. Solo necesitas contactarnos y nosotros nos encargamos del
                            resto.
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
                    <div class="content-about-us">
                        <p class="subtitle-about-us">Asesoría personalizada</p>
                        <h2 class="title-about-us">Tu proyecto en manos expertas</h2>
                        <p class="description-about-us">Recibe atención y seguimiento en cada etapa de tu proyecto con
                            Falconstruction.</p>
                        <a href="#" class="cta-button-about-us">
                            Contáctanos
                            <span class="arrow-about-us">→</span>
                        </a>
                    </div>

                    <div class="video-and-content">
                        <div class="video-container-about-us">
                            <video controls class="responsive-video">
                                <source src="PVideoBanner/video.mp4" type="video/mp4">
                                Tu navegador no soporta el video.
                            </video>
                        </div>
                    </div>
                </div>
            </section>

            <section class="philosophy-section-about-us">
                <div class="container-about-us">
                    <h2 class="title-about-us">Nuestra filosofía</h2>

                    <div class="philosophy-grid-about-us">
                        <div class="philosophy-card-about-us card-1-about-us">
                            <span class="card-number-about-us">1</span>
                            <h3 class="card-title-about-us">Compromiso con la calidad</h3>
                            <p class="card-description-about-us">Cada proyecto es una oportunidad para demostrar nuestra
                                excelencia.</p>
                        </div>

                        <div class="philosophy-card-about-us card-2-about-us">
                            <span class="card-number-about-us">2</span>
                            <h3 class="card-title-about-us">Transparencia total</h3>
                            <p class="card-description-about-us">Mantenemos una comunicación clara y abierta con
                                nuestros
                                clientes.</p>
                        </div>

                        <div class="philosophy-card-about-us card-3-about-us">
                            <span class="card-number-about-us">3</span>
                            <h3 class="card-title-about-us">Innovación constante</h3>
                            <p class="card-description-about-us">Utilizamos las últimas tecnologías para mejorar
                                nuestros
                                servicios.</p>
                        </div>

                        <div class="philosophy-card-about-us card-4-about-us">
                            <span class="card-number-about-us">4</span>
                            <h3 class="card-title-about-us">Satisfacción del cliente</h3>
                            <p class="card-description-about-us">Nuestro objetivo es superar las expectativas de
                                nuestros
                                clientes.</p>
                        </div>
                    </div>
                </div>
            </section>
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

        <!-- Inclusión de scripts -->
        <script src="Script_Portafolio"></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
        <script src="Script_Banner"></script>
        <script src="Script_Header"></script>
</body>

</html>