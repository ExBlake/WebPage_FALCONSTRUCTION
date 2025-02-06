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
          <section class="fullscreen-section main-content">
              <div class="content-grid">
                  <div class="text-content">
                      <h1 class="main-title">SPACE IS MEANT TO BE SHARED</h1>

                      <div>
                          <p class="main-description">
                              Going to space is the kind of life event you'll want your loved ones to be a part of.
                          </p>
                      </div>

                      <div class="image-container-banner">
                          <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ii6IUY4gDMEBjZqZm4fQ9pCWcpzWqH.png"
                              alt="Astronaut team">
                      </div>
                  </div>

                  <div class="image-container-banner">
                      <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ii6IUY4gDMEBjZqZm4fQ9pCWcpzWqH.png"
                          alt="People sharing a moment">
                  </div>
              </div>
          </section>

          <div class="fullscreen-section start-services">
              <h1>Con la confianza de más de <span class="highlight">11,4 millones</span> de desarrolladores</h1>
          </div>

          <section class="fullscreen-section combined-section">
              <div class="start-services">
                  <h1>Con la confianza de más de <span class="highlight">11,4 millones</span> de desarrolladores</h1>
              </div>
              <div class="container-section2">
                  <div class="content-wrapper">
                      <div class="right-column">
                          <div class="image-container">
                              <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-tYSBLJcl3bQSYO3QWqrSXehsPcpmwH.png"
                                  alt="PyCharm IDE" class="active" id="image1">
                              <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ii6IUY4gDMEBjZqZm4fQ9pCWcpzWqH.png"
                                  alt="Development Tools" id="image2">
                              <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-tYSBLJcl3bQSYO3QWqrSXehsPcpmwH.png"
                                  alt="Workflow" id="image3">
                          </div>
                      </div>
                      <div class="left-column">
                          <section class="text-section active" id="section1">
                              <h2>Listo para usar desde el primer momento</h2>
                              <p>Las herramientas esenciales y una amplia variedad de lenguajes y marcos de trabajo
                                  compatibles están al alcance de su mano, sin tener que complicarse la vida con
                                  complementos.</p>
                          </section>
                          <section class="text-section" id="section2">
                              <h2>Desarrollo inteligente</h2>
                              <p>Herramientas avanzadas de desarrollo que mejoran tu productividad y experiencia de
                                  codificación.</p>
                          </section>
                          <section class="text-section" id="section3">
                              <h2>Potencia tu flujo de trabajo</h2>
                              <p>Integración perfecta con todas las herramientas que necesitas para un desarrollo
                                  eficiente.</p>
                          </section>
                      </div>
                  </div>
              </div>
          </section>
          <section class="fullscreen-section contacts-banner-container">
              <div class="contacts-banner-promo-card">
                  <!-- Gradient blob background -->
                  <div class="contacts-banner-gradient-blob"></div>

                  <!-- Content container -->
                  <div class="contacts-banner-content">
                      <!-- Logo -->
                      <div class="contacts-banner-logo">

                          <span class="contacts-banner-logo-text">Falconstruction</span>
                      </div>

                      <!-- Text content -->
                      <div class="contacts-banner-text-content">
                          <h1 class="contacts-banner-title">Contact us to learn more about our services</h1>
                          <p class="contacts-banner-description">
                              Discover how our solutions can optimize your workflow and enhance your team's efficiency.
                              Let's talk about what you need.
                          </p>
                          <button class="contacts-banner-cta-button" onclick="handleClick()">Learn More</button>
                      </div>

                  </div>
              </div>
          </section>

          <section class="fullscreen-section banner-final">
              <?php
            // Inclusión Banner End
            require_once 'Layout/BannerEnd.php';
            
          
            ?>
          </section>
          
            

      </div>

      <footer class="footer-section">
                <?php require_once 'Layout/Footer.php';?>
            </foote>

      <div id="cursor-effect"></div>



      <!-- partial -->
      <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js'></script>
      <script src="Script_Banner"></script>
      <script src="Script_Services"></script>

      <script src="Script_Header"></script>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
  // Selecciona el footer
  const footer = document.querySelector('.footer-section');

  // Desactiva el scroll snapping para el footer
  if (footer) {
    footer.style.scrollSnapAlign = 'none';
  }
});
      </script>



 

  </body>

  </html>