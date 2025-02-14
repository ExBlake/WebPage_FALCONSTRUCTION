<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Proyectos - FALCONSTRUCTIONS</title>

    <!-- Carga de fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Estilos personalizados para diferentes secciones -->
    <link rel="stylesheet" href="Estilos_Header"> <!-- Estilos del encabezado -->
    <link rel="stylesheet" href="Estilos_Portafolio"> <!-- Estilos del portafolio -->
    <link rel="stylesheet" href="Estilos_Footer"> <!-- Estilos del pie de página -->
    <link rel="stylesheet" href="Estilos_Banner"> <!-- Estilos del banner -->
</head>

<body>

    <?php
    // Inclusión del Header
    // Se carga el archivo del encabezado que contiene la navegación y el logo
    require_once 'Layout/Header.php';
    ?>

    <div class="parallax-container">
        <section class="parallax-section hero-section">
            <main class="hero-portfolio">
                <div class="hero-content-portfolio">
                    <!-- Elementos decorativos para la sección hero -->
                    <div class="hero-decorative-line"></div>
                    <div class="hero-side-text">EXCELLENCE IN CONSTRUCTION</div>

                    <!-- Contenido principal de la sección hero -->
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
                            <!-- Estadísticas de la empresa -->
                            <div class="stat-item">
                                <span class="stat-number" data-value="25">0</span> <!-- Valor inicial que se animará -->
                                <span class="stat-label">YEARS OF<br>EXCELLENCE</span>
                            </div>
                            <div class="stat-separator"></div>
                            <div class="stat-item">
                                <span class="stat-number" data-value="500">0</span> <!-- Valor inicial que se animará -->
                                <span class="stat-label">PROJECTS<br>COMPLETED</span>
                            </div>
                        </div>
                    </div>

                    <!-- Indicador de desplazamiento -->
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

                <!-- Superposición de cuadrícula de plano -->
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

            <!-- Bloque de contenido para la experiencia de los invitados -->
            <div class="content-block animate-on-scroll">
                <img src="PImageProject/project-0.jpg" alt="Unity 25" class="image-right">
                <div class="text-left">
                    <h2>Going to space is the kind of life event you'll want your loved ones to be a part of.</h2>
                    <p>Bring up to three guests so they can share in the love, wonder and awe of your spaceflight.</p>
                    <button class="ver-mas-btn">Ver Más</button> <!-- Botón para más información -->
                </div>
                <p class="caption-left">UNITY 25 SPACEFLIGHT CELEBRATION</p>
            </div>

            <div class="content-block animate-on-scroll">
                <div class="text-right">
                    <p>While you participate in pre-flight readiness, your loved ones will enjoy curated activities,
                        top-tier amenities, and most importantly, a front row seat on flight day.</p>
                    <button class="ver-mas-btn">Ver Más</button> <!-- Botón para más información -->
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
                        <button class="ver-mas-btn">Ver Más</button> <!-- Botón para más información -->
                    </div>
                    <p class="caption-left">UNITY 25 SPACEFLIGHT CELEBRATION</p>
                </div>
            </div>
        </div>

        <section class="BannerEnd-Portfolio fade-in-up-element">
            <?php
            // Inclusión Banner End
            // Se carga el archivo del banner final que puede contener información adicional o promociones
            require_once 'Layout/BannerEnd.php';
            ?>
        </section>

        <div id="cursor-effect"></div> <!-- Efecto de cursor personalizado -->

        <?php
        // Inclusión del footer
        // Se carga el archivo del pie de página que contiene información de contacto y enlaces
        require_once 'Layout/Footer.php';
        ?>

        <!-- Primer modal -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close-modal"></span> <!-- Botón para cerrar el modal -->

                <!-- Sección del título -->
                <div class="modal-header">
                    <h2 class="impact-title">Experiencia Espacial Compartida</h2>
                </div>

                <!-- Sección del bentogrid -->
                <div class="modal-content-grid"></div> <!-- Contenido dinámico que se llenará con información -->

                <!-- Sección de descripción -->
                <div class="modal-description">
                    <div class="description-container">
                        <h3 class="modal-subtitle modern-title">Transformamos <br> ideas en resultados: <br>El proceso
                        </h3>

                        <div class="accordion-final-modal">
                            <!-- Elementos del acordeón para mostrar información adicional -->
                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Diseño</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Explora nuestro innovador enfoque de diseño que combina
                                        estética y funcionalidad.
                                        Creamos soluciones visuales que no solo son atractivas, sino que también mejoran
                                        la
                                        experiencia del usuario.</p>
                                </div>
                            </div>

                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Colaborar para recolectar</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Únete a nuestra iniciativa de colaboración para la
                                        recolección de datos. Juntos,
                                        podemos crear un impacto significativo y desarrollar soluciones más efectivas
                                        basadas en información precisa y actualizada.</p>
                                </div>
                            </div>

                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Objetivo para empaques</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Nuestro objetivo es revolucionar la industria del
                                        empaquetado con soluciones
                                        sostenibles y eficientes. Trabajamos en la creación de empaques que no solo
                                        protegen
                                        los productos, sino que también cuidan nuestro planeta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segundo modal -->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <span class="close-modal"></span> <!-- Botón para cerrar el modal -->

                <!-- Sección del título -->
                <div class="modal-header">
                    <h2 class="impact-title">Experiencia Espacial Compartida</h2>
                </div>

                <!-- Sección del bentogrid -->
                <div class="modal-content-grid"></div> <!-- Contenido dinámico que se llenará con información -->

                <!-- Sección de descripción -->
                <div class="modal-description">
                    <div class="description-container">
                        <h3 class="modal-subtitle modern-title">Transformamos <br> ideas en resultados: <br>El proceso
                        </h3>

                        <div class="accordion-final-modal">
                            <!-- Elementos del acordeón para mostrar información adicional -->
                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Diseño</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Explora nuestro innovador enfoque de diseño que combina
                                        estética y funcionalidad.
                                        Creamos soluciones visuales que no solo son atractivas, sino que también mejoran
                                        la
                                        experiencia del usuario.</p>
                                </div>
                            </div>

                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Colaborar para recolectar</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Únete a nuestra iniciativa de colaboración para la
                                        recolección de datos. Juntos,
                                        podemos crear un impacto significativo y desarrollar soluciones más efectivas
                                        basadas en información precisa y actualizada.</p>
                                </div>
                            </div>

                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Objetivo para empaques</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Nuestro objetivo es revolucionar la industria del
                                        empaquetado con soluciones
                                        sostenibles y eficientes. Trabajamos en la creación de empaques que no solo
                                        protegen
                                        los productos, sino que también cuidan nuestro planeta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tercer modal -->
         <div id="modal3" class="modal">
            <div class="modal-content">
                <span class="close-modal"></span> <!-- Botón para cerrar el modal -->

                <!-- Sección del título -->
                <div class="modal-header">
                    <h2 class="impact-title">Experiencia Espacial Compartida</h2>
                </div>

                <!-- Sección del bentogrid -->
                <div class="modal-content-grid"></div> <!-- Contenido dinámico que se llenará con información -->

                <!-- Sección de descripción -->
                <div class="modal-description">
                    <div class="description-container">
                        <h3 class="modal-subtitle modern-title">Transformamos <br> ideas en resultados: <br>El proceso
                        </h3>

                        <div class="accordion-final-modal">
                            <!-- Elementos del acordeón para mostrar información adicional -->
                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Diseño</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Explora nuestro innovador enfoque de diseño que combina
                                        estética y funcionalidad.
                                        Creamos soluciones visuales que no solo son atractivas, sino que también mejoran
                                        la
                                        experiencia del usuario.</p>
                                </div>
                            </div>

                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Colaborar para recolectar</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Únete a nuestra iniciativa de colaboración para la
                                        recolección de datos. Juntos,
                                        podemos crear un impacto significativo y desarrollar soluciones más efectivas
                                        basadas en información precisa y actualizada.</p>
                                </div>
                            </div>

                            <div class="accordion-item-final-modal">
                                <div class="accordion-header-final-modal">Objetivo para empaques</div>
                                <div class="accordion-content-final-modal">
                                    <p class="accordion-text">Nuestro objetivo es revolucionar la industria del
                                        empaquetado con soluciones
                                        sostenibles y eficientes. Trabajamos en la creación de empaques que no solo
                                        protegen
                                        los productos, sino que también cuidan nuestro planeta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para galería de imágenes -->
        <div id="imageModal" class="modal image-modal">
            <div class="modal-content image-modal-content">
                <span class="close-modal-gallery"></span> <!-- Botón para cerrar la galería de imágenes -->
                <button class="nav-btn prev-btn"> <!-- Botón para la imagen anterior -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"></path>
                    </svg>
                </button>
                <div class="modal-image-container">
                    <img src="" alt="Imagen ampliada" class="modal-image"> <!-- Imagen ampliada que se mostrará -->
                </div>
                <button class="nav-btn next-btn"> <!-- Botón para la imagen siguiente -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6"></path>
                    </svg>
                </button>
                <div class="image-counter">1 / 9</div> <!-- Contador de imágenes -->
            </div>
        </div>

        <!-- Inclusión de scripts -->
        <script src="Script_Portafolio"></script> <!-- Script específico para el portafolio -->
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script> <!-- Librería GSAP para animaciones -->
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script> <!-- Efectos de Flip de GSAP -->
        <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script> <!-- Easing personalizado de GSAP -->
        <script src="Script_Banner"></script> <!-- Script para el banner -->
        <script src="Script_Header"></script> <!-- Script para el encabezado -->
</body>

</html>