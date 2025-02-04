<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Inicio - FALCONSTRUCIONS </title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!--Iconos-->
  <link rel="stylesheet" href="Estilos_Header">
  <link rel="stylesheet" href="Estilos_Inicio">
  <link rel="stylesheet" href="Estilos_Footer">
  <link rel="stylesheet" href="Estilos_Banner">
</head>

<body class="bg-gray-50 text-gray-900">

  <?php
  // Inclusión del Header
  require_once 'View/Layout/Header.php';
  ?>

  <!-- <div class="cursor-dot"></div> -->

  <main class="container mx-auto px-4">
    <section class="min-h-screen flex items-center parallax-section">
      <div class="parallax-bg">
        <div class="house" id="h">
          <div class="h-lights">
            <div class="h-light"></div>
            <div class="h-light"></div>
            <div class="h-light"></div>
            <div class="h-light"></div>
            <div class="h-light"></div>
            <div class="h-light"></div>
          </div>
          <div class="h-shadow"></div>
          <div class="alt">
            <div class="alt__front face"> </div>
            <div class="alt__back face"> </div>
            <div class="alt__right face"> </div>
            <div class="alt__left face"> </div>
            <div class="alt__top face">
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
              <div class="light"></div>
            </div>
            <div class="alt__bottom face"> </div>
          </div>
          <div class="alb">
            <div class="alb__front face"> </div>
            <div class="alb__back face"> </div>
            <div class="alb__right face"> </div>
            <div class="alb__left face"> </div>
            <div class="alb__top face"> </div>
            <div class="alb__bottom face"> </div>
          </div>
          <div class="arb">
            <div class="arb__front face"> </div>
            <div class="arb__back face"> </div>
            <div class="arb__right face"> </div>
            <div class="arb__left face"> </div>
            <div class="arb__top face"> </div>
            <div class="arb__bottom face"> </div>
          </div>
          <div class="blt">
            <div class="blt__front face"> </div>
            <div class="blt__back face"> </div>
            <div class="blt__right face"> </div>
            <div class="blt__left face"> </div>
            <div class="blt__top face"> </div>
            <div class="blt__bottom face"> </div>
          </div>
          <div class="blt2">
            <div class="blt2__front face"> </div>
            <div class="blt2__back face"> </div>
            <div class="blt2__right face"> </div>
            <div class="blt2__left face"> </div>
            <div class="blt2__top face"> </div>
            <div class="blt2__bottom face"> </div>
          </div>
          <div class="blb">
            <div class="blb__front face"> </div>
            <div class="blb__back face"> </div>
            <div class="blb__right face"> </div>
            <div class="blb__left face"> </div>
            <div class="blb__top face"> </div>
            <div class="blb__bottom face"> </div>
          </div>
          <div class="blb2">
            <div class="blb2__front face"> </div>
            <div class="blb2__back face"> </div>
            <div class="blb2__right face"> </div>
            <div class="blb2__left face"> </div>
            <div class="blb2__top face"> </div>
            <div class="blb2__bottom face"> </div>
          </div>
          <div class="puerta-c">
            <div class="puerta">
              <div class="puerta__front face"> </div>
              <div class="puerta__back face"> </div>
              <div class="puerta__right face"> </div>
              <div class="puerta__left face"> </div>
              <div class="puerta__top face"> </div>
              <div class="puerta__bottom face"> </div>
            </div>
            <div class="puerta-l">
              <div class="puerta-l__front face"> </div>
              <div class="puerta-l__back face"> </div>
              <div class="puerta-l__right face"> </div>
              <div class="puerta-l__left face"> </div>
              <div class="puerta-l__top face"> </div>
              <div class="puerta-l__bottom face"> </div>
            </div>
            <div class="puerta-r">
              <div class="puerta-r__front face"> </div>
              <div class="puerta-r__back face"> </div>
              <div class="puerta-r__right face"> </div>
              <div class="puerta-r__left face"> </div>
              <div class="puerta-r__top face"> </div>
              <div class="puerta-r__bottom face"> </div>
            </div>
            <div class="puerta-t">
              <div class="puerta-t__front face"> </div>
              <div class="puerta-t__back face"> </div>
              <div class="puerta-t__right face"> </div>
              <div class="puerta-t__left face"> </div>
              <div class="puerta-t__top face"> </div>
              <div class="puerta-t__bottom face"> </div>
            </div>
          </div>
          <div class="cuadro-l">
            <div class="cuadro-l__front face"> </div>
            <div class="cuadro-l__back face"> </div>
            <div class="cuadro-l__right face"> </div>
            <div class="cuadro-l__left face"> </div>
            <div class="cuadro-l__top face"> </div>
            <div class="cuadro-l__bottom face"> </div>
          </div>
          <div class="cuadro-r">
            <div class="cuadro-r__front face"> </div>
            <div class="cuadro-r__back face"> </div>
            <div class="cuadro-r__right face"> </div>
            <div class="cuadro-r__left face"> </div>
            <div class="cuadro-r__top face"> </div>
            <div class="cuadro-r__bottom face"> </div>
          </div>
          <div class="librero">
            <div class="librero__front face"> </div>
            <div class="librero__back face"> </div>
            <div class="librero__right face"> </div>
            <div class="librero__left face"> </div>
            <div class="librero__top face"> </div>
            <div class="librero__bottom face"> </div>
          </div>
          <div class="libros">
            <div class="libro">
              <div class="libro__front face"> </div>
              <div class="libro__back face"> </div>
              <div class="libro__right face"> </div>
              <div class="libro__left face"> </div>
              <div class="libro__top face"> </div>
              <div class="libro__bottom face"> </div>
            </div>
            <div class="libro">
              <div class="libro__front face"> </div>
              <div class="libro__back face"> </div>
              <div class="libro__right face"> </div>
              <div class="libro__left face"> </div>
              <div class="libro__top face"> </div>
              <div class="libro__bottom face"> </div>
            </div>
            <div class="libro">
              <div class="libro__front face"> </div>
              <div class="libro__back face"> </div>
              <div class="libro__right face"> </div>
              <div class="libro__left face"> </div>
              <div class="libro__top face"> </div>
              <div class="libro__bottom face"> </div>
            </div>
            <div class="libro">
              <div class="libro__front face"> </div>
              <div class="libro__back face"> </div>
              <div class="libro__right face"> </div>
              <div class="libro__left face"> </div>
              <div class="libro__top face"> </div>
              <div class="libro__bottom face"> </div>
            </div>
            <div class="libro">
              <div class="libro__front face"> </div>
              <div class="libro__back face"> </div>
              <div class="libro__right face"> </div>
              <div class="libro__left face"> </div>
              <div class="libro__top face"> </div>
              <div class="libro__bottom face"> </div>
            </div>
            <div class="libro">
              <div class="libro__front face"> </div>
              <div class="libro__back face"> </div>
              <div class="libro__right face"> </div>
              <div class="libro__left face"> </div>
              <div class="libro__top face"> </div>
              <div class="libro__bottom face"> </div>
            </div>
          </div>
          <div class="fotos">
            <div class="foto">
              <div class="foto__front face"> </div>
              <div class="foto__back face"> </div>
              <div class="foto__right face"> </div>
              <div class="foto__left face"> </div>
              <div class="foto__top face"> </div>
              <div class="foto__bottom face"> </div>
            </div>
            <div class="foto">
              <div class="foto__front face"> </div>
              <div class="foto__back face"> </div>
              <div class="foto__right face"> </div>
              <div class="foto__left face"> </div>
              <div class="foto__top face"> </div>
              <div class="foto__bottom face"> </div>
            </div>
          </div>
          <div class="cajas">
            <div class="caja">
              <div class="caja__front face"> </div>
              <div class="caja__back face"> </div>
              <div class="caja__right face"> </div>
              <div class="caja__left face"> </div>
              <div class="caja__top face"> </div>
              <div class="caja__bottom face"> </div>
            </div>
            <div class="caja">
              <div class="caja__front face"> </div>
              <div class="caja__back face"> </div>
              <div class="caja__right face"> </div>
              <div class="caja__left face"> </div>
              <div class="caja__top face"> </div>
              <div class="caja__bottom face"> </div>
            </div>
            <div class="caja">
              <div class="caja__front face"> </div>
              <div class="caja__back face"> </div>
              <div class="caja__right face"> </div>
              <div class="caja__left face"> </div>
              <div class="caja__top face"> </div>
              <div class="caja__bottom face"> </div>
            </div>
          </div>
          <div class="tv">
            <div class="tv__front face"> </div>
            <div class="tv__back face"> </div>
            <div class="tv__right face"> </div>
            <div class="tv__left face"> </div>
            <div class="tv__top face"> </div>
            <div class="tv__bottom face"> </div>
          </div>
          <div class="repisa-t">
            <div class="repisa-t__front face"> </div>
            <div class="repisa-t__back face"> </div>
            <div class="repisa-t__right face"> </div>
            <div class="repisa-t__left face"> </div>
            <div class="repisa-t__top face"> </div>
            <div class="repisa-t__bottom face"> </div>
          </div>
          <div class="repisa-b">
            <div class="repisa-b__front face"> </div>
            <div class="repisa-b__back face"> </div>
            <div class="repisa-b__right face"> </div>
            <div class="repisa-b__left face"> </div>
            <div class="repisa-b__top face"> </div>
            <div class="repisa-b__bottom face"> </div>
          </div>
          <div class="bocina-l">
            <div class="bocina-l__front face"> </div>
            <div class="bocina-l__back face"> </div>
            <div class="bocina-l__right face"> </div>
            <div class="bocina-l__left face"> </div>
            <div class="bocina-l__top face"> </div>
            <div class="bocina-l__bottom face"> </div>
          </div>
          <div class="bocina-r">
            <div class="bocina-r__front face"> </div>
            <div class="bocina-r__back face"> </div>
            <div class="bocina-r__right face"> </div>
            <div class="bocina-r__left face"> </div>
            <div class="bocina-r__top face"> </div>
            <div class="bocina-r__bottom face"> </div>
          </div>
          <div class="muro">
            <div class="muro__front face"> </div>
            <div class="muro__back face"> </div>
            <div class="muro__right face"> </div>
            <div class="muro__left face"> </div>
            <div class="muro__top face"> </div>
            <div class="muro__bottom face"> </div>
          </div>
          <div class="sillon-c">
            <div class="sillon-b">
              <div class="sillon-b__front face"> </div>
              <div class="sillon-b__back face"> </div>
              <div class="sillon-b__right face"> </div>
              <div class="sillon-b__left face"> </div>
              <div class="sillon-b__top face"> </div>
              <div class="sillon-b__bottom face"> </div>
            </div>
            <div class="sillon-t">
              <div class="sillon-t__front face"> </div>
              <div class="sillon-t__back face"> </div>
              <div class="sillon-t__right face"> </div>
              <div class="sillon-t__left face"> </div>
              <div class="sillon-t__top face"> </div>
              <div class="sillon-t__bottom face"> </div>
            </div>
            <div class="sillon-l">
              <div class="sillon-l__front face"> </div>
              <div class="sillon-l__back face"> </div>
              <div class="sillon-l__right face"> </div>
              <div class="sillon-l__left face"> </div>
              <div class="sillon-l__top face"> </div>
              <div class="sillon-l__bottom face"> </div>
            </div>
            <div class="sillon-r">
              <div class="sillon-r__front face"> </div>
              <div class="sillon-r__back face"> </div>
              <div class="sillon-r__right face"> </div>
              <div class="sillon-r__left face"> </div>
              <div class="sillon-r__top face"> </div>
              <div class="sillon-r__bottom face"> </div>
            </div>
          </div>
          <div class="mesa-c">
            <div class="mesa">
              <div class="mesa__front face"> </div>
              <div class="mesa__back face"> </div>
              <div class="mesa__right face"> </div>
              <div class="mesa__left face"> </div>
              <div class="mesa__top face"> </div>
              <div class="mesa__bottom face"> </div>
            </div>
            <div class="mesa-p">
              <div class="mesa-p__front face"> </div>
              <div class="mesa-p__back face"> </div>
              <div class="mesa-p__right face"> </div>
              <div class="mesa-p__left face"> </div>
              <div class="mesa-p__top face"> </div>
              <div class="mesa-p__bottom face"> </div>
            </div>
            <div class="mesa-p">
              <div class="mesa-p__front face"> </div>
              <div class="mesa-p__back face"> </div>
              <div class="mesa-p__right face"> </div>
              <div class="mesa-p__left face"> </div>
              <div class="mesa-p__top face"> </div>
              <div class="mesa-p__bottom face"> </div>
            </div>
            <div class="mesa-p">
              <div class="mesa-p__front face"> </div>
              <div class="mesa-p__back face"> </div>
              <div class="mesa-p__right face"> </div>
              <div class="mesa-p__left face"> </div>
              <div class="mesa-p__top face"> </div>
              <div class="mesa-p__bottom face"> </div>
            </div>
            <div class="mesa-p">
              <div class="mesa-p__front face"> </div>
              <div class="mesa-p__back face"> </div>
              <div class="mesa-p__right face"> </div>
              <div class="mesa-p__left face"> </div>
              <div class="mesa-p__top face"> </div>
              <div class="mesa-p__bottom face"> </div>
            </div>
            <div class="mesa-shadow"></div>
          </div>
          <div class="tablet">
            <div class="tablet__front face"> </div>
            <div class="tablet__back face"> </div>
            <div class="tablet__right face"> </div>
            <div class="tablet__left face"> </div>
            <div class="tablet__top face"> </div>
            <div class="tablet__bottom face"> </div>
          </div>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-5xl font-bold mb-4 text-primary reveal-animation">Constructora Elite</h1>
        <p class="text-xl mb-8 reveal-animation">Transformando visiones en infraestructura de precisión</p>
        <button
          class="px-6 py-3 bg-primary text-white rounded-full hover:bg-secondary transition-colors reveal-animation">
          Explora Nuestros Proyectos
        </button>
      </div>
    </section>

    <div style="background: transparent;">
      <section class="grid md:grid-cols-3 gap-8 my-16">
        <div class="interactive-card glass-morphism p-6 rounded-xl smooth-shadow reveal-animation">
          <h3 class="text-2xl font-semibold mb-4">Diseño Innovador</h3>
          <p>Soluciones arquitectónicas que desafían los límites convencionales.</p>
        </div>
        <div class="interactive-card glass-morphism p-6 rounded-xl smooth-shadow reveal-animation">
          <h3 class="text-2xl font-semibold mb-4">Precisión Técnica</h3>
          <p>Ingeniería de vanguardia con metodologías de última generación.</p>
        </div>
        <div class="interactive-card glass-morphism p-6 rounded-xl smooth-shadow reveal-animation">
          <h3 class="text-2xl font-semibold mb-4">Sostenibilidad</h3>
          <p>Comprometidos con soluciones eco-amigables y eficientes.</p>
        </div>
      </section>

      <section class="my-16">
        <h2 class="text-4xl font-bold text-center mb-12 reveal-animation">Nuestros Proyectos Destacados</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="interactive-card glass-morphism p-6 rounded-xl smooth-shadow reveal-animation">
            <img
              src="https://images.unsplash.com/photo-1523436278115-b135a7a26ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="Proyecto 1" class="w-full rounded-lg mb-4">
            <h3 class="text-2xl font-semibold mb-4">Torre Corporativa</h3>
            <p>Rascacielos de 45 pisos con tecnología de vanguardia.</p>
          </div>
          <div class="interactive-card glass-morphism p-6 rounded-xl smooth-shadow reveal-animation">
            <img
              src="https://images.unsplash.com/photo-1523436278115-b135a7a26ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="Proyecto 2" class="w-full rounded-lg mb-4">
            <h3 class="text-2xl font-semibold mb-4">Complejo Sostenible</h3>
            <p>Desarrollo eco-amigable con certificación LEED Platinum.</p>
          </div>
          <div class="interactive-card glass-morphism p-6 rounded-xl smooth-shadow reveal-animation">
            <img
              src="https://images.unsplash.com/photo-1523436278115-b135a7a26ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="Proyecto 3" class="w-full rounded-lg mb-4">
            <h3 class="text-2xl font-semibold mb-4">Puente Inteligente</h3>
            <p>Infraestructura de movilidad con sensores de última generación.</p>
          </div>
        </div>
      </section>
    </div>

    <section class="my-16">
      <h2 class="text-4xl font-bold text-center mb-12 reveal-animation">Línea de Tiempo de Proyectos</h2>
      <div class="project-timeline">
        <div class="timeline-item reveal-animation">
          <div class="timeline-marker"></div>
          <h3 class="text-2xl font-semibold">2015 - Inicio</h3>
          <p>Fundación de Constructora Elite con visión innovadora.</p>
        </div>
        <div class="timeline-item reveal-animation">
          <div class="timeline-marker"></div>
          <h3 class="text-2xl font-semibold">2018 - Primer Gran Proyecto</h3>
          <p>Construcción del primer rascacielos inteligente.</p>
        </div>
        <div class="timeline-item reveal-animation">
          <div class="timeline-marker"></div>
          <h3 class="text-2xl font-semibold">2021 - Expansión</h3>
          <p>Desarrollo de proyectos sostenibles a nivel nacional.</p>
        </div>
        <div class="timeline-item reveal-animation">
          <div class="timeline-marker"></div>
          <h3 class="text-2xl font-semibold">2023 - Reconocimiento</h3>
          <p>Premio a la Innovación en Arquitectura Sostenible.</p>
        </div>
      </div>
    </section>

    <section class="my-16">
      <h2 class="text-4xl font-bold text-center mb-12 reveal-animation">Proyectos Destacados</h2>
      <div class="project-grid">
        <div class="project-card relative">
          <img
            src="https://images.unsplash.com/photo-1523436278115-b135a7a26ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt="Proyecto 1" class="w-full h-full object-cover">
          <div class="project-card-overlay">
            <h3 class="text-2xl font-semibold">Torre Corporativa</h3>
            <p>Rascacielos de 45 pisos con tecnología de vanguardia.</p>
          </div>
        </div>
        <div class="project-card relative">
          <img
            src="https://images.unsplash.com/photo-1523436278115-b135a7a26ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt="Proyecto 2" class="w-full h-full object-cover">
          <div class="project-card-overlay">
            <h3 class="text-2xl font-semibold">Complejo Sostenible</h3>
            <p>Desarrollo eco-amigable con certificación LEED Platinum.</p>
          </div>
        </div>
        <div class="project-card relative">
          <img
            src="https://images.unsplash.com/photo-1523436278115-b135a7a26ad6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt="Proyecto 3" class="w-full h-full object-cover">
          <div class="project-card-overlay">
            <h3 class="text-2xl font-semibold">Puente Inteligente</h3>
            <p>Infraestructura de movilidad con sensores de última generación.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="my-16 relative">
      <svg class="svg-background" xmlns="http://www.w3.org/2000/svg">
        <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
          <path d="M 50 0 L 0 0 0 50" fill="none" stroke="var(--color-primary)" stroke-width="0.5" />
        </pattern>
        <rect width="100%" height="100%" fill="url(#grid)" />
      </svg>
      <h2 class="text-4xl font-bold text-center mb-12 reveal-animation">Nuestro Impacto</h2>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="interactive-statistic bg-white p-6 rounded-xl shadow-lg text-center reveal-animation">
          <div class="statistic-number" data-target="50">0</div>
          <p>Proyectos Completados</p>
        </div>
        <div class="interactive-statistic bg-white p-6 rounded-xl shadow-lg text-center reveal-animation">
          <div class="statistic-number" data-target="95">0</div>
          <p>Satisfacción de Clientes</p>
        </div>
        <div class="interactive-statistic bg-white p-6 rounded-xl shadow-lg text-center reveal-animation">
          <div class="statistic-number" data-target="25">0</div>
          <p>Años de Experiencia</p>
        </div>
        <div class="interactive-statistic bg-white p-6 rounded-xl shadow-lg text-center reveal-animation">
          <div class="statistic-number" data-target="100">0</div>
          <p>Metros Cuadrados</p>
        </div>
      </div>
    </section>

    <section class="min-h-screen flex items-center relative overflow-hidden">
      <div class="absolute inset-0 geometric-overlay"></div>
      <div class="relative z-10 text-center w-full">
        <h1 class="text-6xl font-bold mb-6 text-primary reveal-animation">Transformando Horizontes</h1>
        <p class="text-2xl mb-12 reveal-animation">Ingeniería que redefine los límites de la construcción</p>
        <div class="flex justify-center space-x-6">
          <button
            class="px-8 py-4 bg-primary text-white rounded-full hover:bg-secondary transition-colors reveal-animation">
            Explorar Proyectos
          </button>
          <button
            class="px-8 py-4 border-2 border-primary text-primary rounded-full hover:bg-primary hover:text-white transition-colors reveal-animation">
            Contactar
          </button>
        </div>
      </div>
    </section>

    <section class="my-16">
      <h2 class="text-4xl font-bold text-center mb-12 reveal-animation">Nuestras Capacidades</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="hover-3d-effect bg-white p-8 rounded-xl shadow-lg relative reveal-animation">
          <div class="absolute top-0 right-0 m-4 text-5xl text-gray-200">01</div>
          <h3 class="text-2xl font-semibold mb-4">Diseño Arquitectónico</h3>
          <div class="skill-bar mb-4">
            <div class="skill-bar-fill" style="width: 95%"></div>
          </div>
          <p>Soluciones de diseño que fusionan estética y funcionalidad.</p>
        </div>
        <div class="hover-3d-effect bg-white p-8 rounded-xl shadow-lg relative reveal-animation">
          <div class="absolute top-0 right-0 m-4 text-5xl text-gray-200">02</div>
          <h3 class="text-2xl font-semibold mb-4">Ingeniería Estructural</h3>
          <div class="skill-bar mb-4">
            <div class="skill-bar-fill" style="width: 90%"></div>
          </div>
          <p>Precisión técnica que garantiza seguridad y durabilidad.</p>
        </div>
        <div class="hover-3d-effect bg-white p-8 rounded-xl shadow-lg relative reveal-animation">
          <div class="absolute top-0 right-0 m-4 text-5xl text-gray-200">03</div>
          <h3 class="text-2xl font-semibold mb-4">Sostenibilidad</h3>
          <div class="skill-bar mb-4">
            <div class="skill-bar-fill" style="width: 85%"></div>
          </div>
          <p>Comprometidos con soluciones eco-amigables de vanguardia.</p>
        </div>
      </div>
    </section>
  </main>

  <section class="BannerEnd-Portfolio">
    <?php
    // Inclusión Banner End
    require_once 'View/Layout/BannerEnd.php';
    ?>
  </section>
  <?php
  // Inclusión del footer
  require_once 'View/Layout/Footer.php';
  ?>

  <script src="Script_Inicio"></script>
  <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js'></script>
  <script src="Script_Banner"></script>
  <script src="Script_Header"></script>
</body>

</html>