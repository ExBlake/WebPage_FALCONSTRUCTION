<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Custom Slider with GSAP</title>
  <link rel='stylesheet' href='https://slater.app/10324/23333.css'>
  <link rel="stylesheet" href="Estilos_Servicios">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="cloneable-services">
    <div class="overlay-services">
      <div class="overlay-inner-services">
        <div class="overlay-count-row-services">
          <div class="count-column-services">
            <h2 data-slide-count="step" class="count-heading-services">01</h2>
          </div>
          <div class="count-row-divider-services"></div>
          <div class="count-column-services">
            <h2 data-slide-count="total" class="count-heading-services">04</h2>
          </div>
        </div>
        <div class="overlay-nav-row-services"><button aria-label="previous slide" data-slider="button-prev" class="button-services"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewbox="0 0 17 12" fill="none" class="button-arrow-services">
              <path d="M6.28871 12L7.53907 10.9111L3.48697 6.77778H16.5V5.22222H3.48697L7.53907 1.08889L6.28871 0L0.5 6L6.28871 12Z" fill="currentColor"></path>
            </svg>
            <div class="button-overlay-services">
              <div class="overlay-corner-services"></div>
              <div class="overlay-corner-services top-right-services"></div>
              <div class="overlay-corner-services bottom-left-services"></div>
              <div class="overlay-corner-services bottom-right-services"></div>
            </div>
          </button><button aria-label="previous slide" data-slider="button-next" class="button-services"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewbox="0 0 17 12" fill="none" class="button-arrow-services next-services">
              <path d="M6.28871 12L7.53907 10.9111L3.48697 6.77778H16.5V5.22222H3.48697L7.53907 1.08889L6.28871 0L0.5 6L6.28871 12Z" fill="currentColor"></path>
            </svg>
            <div class="button-overlay-services">
              <div class="overlay-corner-services"></div>
              <div class="overlay-corner-services top-right-services"></div>
              <div class="overlay-corner-services bottom-left-services"></div>
              <div class="overlay-corner-services bottom-right-services"></div>
            </div>
          </button></div>
      </div>
    </div>
    <div class="main-services">
      <div class="slider-wrap-services">
        <div data-slider="list" class="slider-list-services">
          <div data-slider="slide" class="slider-slide-services">
            <div class="slide-inner-services"><img class="img-services"  src="https://cdn.prod.website-files.com/674d847bf8e817966d307714/674d90f74ff2fe8b0b912b97_slide-1.avif" loading="lazy" sizes="(max-width: 479px) 100vw, 560px" alt="Abstract layout By FAKURIANDESIGN through Unsplash">
              <div class="slide-caption-services">
                <div class="caption-dot-services"></div>
                <p class="caption-services">Layout nº001</p>
              </div>
            </div>
          </div>
          <div data-slider="slide" class="slider-slide-services active-services">
            <div class="slide-inner-services"><img class="img-services" src="https://cdn.prod.website-files.com/674d847bf8e817966d307714/674d90f7cf52dd961b48a1e2_slide-2.avif" loading="lazy" alt="Abstract layout By FAKURIANDESIGN through Unsplash">
              <div class="slide-caption-services">
                <div class="caption-dot-services"></div>
                <p class="caption-services">Layout nº002</p>
              </div>
            </div>
          </div>
          <div data-slider="slide" class="slider-slide-services">
            <div class="slide-inner-services"><img class="img-services" src="https://cdn.prod.website-files.com/674d847bf8e817966d307714/674d90f7f7cce73267703347_slide-3.avif" loading="lazy" sizes="(max-width: 479px) 100vw, 560px" alt="Abstract layout By FAKURIANDESIGN through Unsplash">
              <div class="slide-caption-services">
                <div class="caption-dot-services"></div>
                <p class="caption-services">Layout nº003</p>
              </div>
            </div>
          </div>
          <div data-slider="slide" class="slider-slide-services">
            <div class="slide-inner-services"><img class="img-services" src="https://cdn.prod.website-files.com/674d847bf8e817966d307714/674d90f7ccfd203c82a46798_slide-4.avif" loading="lazy" sizes="(max-width: 479px) 100vw, 560px" alt="Abstract layout By FAKURIANDESIGN through Unsplash">
              <div class="slide-caption-services">
                <div class="caption-dot-services"></div>
                <p class="caption-services">Layout nº004</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main class="main-content">
        <div class="content-grid">
            <div class="text-content">
                <h1 class="main-title">SPACE IS MEANT TO BE SHARED</h1>
                
                <div>
                    <p class="main-description">
                        Going to space is the kind of life event you'll want your loved ones to be a part of.
                    </p>
                    <p class="sub-description">
                        Bring up to three guests so they can share in the love, wonder and awe of your spaceflight.
                    </p>
                </div>

                <div class="image-container">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ii6IUY4gDMEBjZqZm4fQ9pCWcpzWqH.png" alt="Astronaut team">
                </div>
            </div>

            <div class="image-container">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-ii6IUY4gDMEBjZqZm4fQ9pCWcpzWqH.png" alt="People sharing a moment">
            </div>
        </div>

    </main> 
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js'></script>
<script src='https://cdn.jsdelivr.net/gh/ilja-van-eck/osmo/assets/gsap/InertiaPlugin.min.js'></script>
<script  src="Script_Services"></script>

</body>
</html>
