<!--
SuitePage.php

ESTE ARCHIVO CONTIENE LA ESTRUCTURA DE LA PAGINA DE SUITES DEL HOTEL CASA MALVA.
-->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suites de Hotel</title>

  <link rel="stylesheet" href="Estilos_Suite">


</head>

<body>

<style>



/* Fondo oscuro que cubre toda la pantalla */
.modal {
  display: none;
  /* Inicialmente está oculta */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  /* Fondo translúcido */
  justify-content: center;
  align-items: center;
  animation: fadeIn 0.3s ease-out;
  /* Animación suave de apertura */
  z-index: 1000;
  overflow: hidden;
}

/* Contenedor de la modal con fondo blanco */
.modal-content {
  background-color: #121212;
  width: 90%;
  height: 80%;
  position: relative;
  border-radius: 24px;
  padding: 10px;
  display: flex;
  flex-direction: column;
}

/* Contenedor de secciones */
.sections-container {
  display: flex;
  flex-direction: column;
  height: 100vh;
  overflow-y: auto;
  scroll-snap-type: y mandatory;
  /* Activa el scroll snap */
  scroll-behavior: smooth;
  /* Desplazamiento suave */
}

/* Estilo de cada sección */
.section {
  scroll-snap-align: start;
  /* Ajusta la posición de cada sección al iniciar */
  height: 100%;
  /* Cada sección ocupa toda la altura del contenedor */
  padding: 20px;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
}

/* Ocultar secciones fuera de vista (esto es opcional) */
.sections-container {
  display: block;
  /* Cambio para permitir el scroll */
  overflow-y: auto;
  /* Asegura que solo una sección esté visible a la vez */
  height: 100%;
  /* Hace que el contenedor ocupe toda la altura */
}

.modal-content h2 {
  font-size: 2.5rem;
  font-weight: 600;
  color: #3c2a1e;
  margin-bottom: 20px;
  text-align: center;
}



/* Style IFRAME */

/********************************/
/* Styles BentoGrid Modal 4 */
/********************************/
.bentogrid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: repeat(3, 1fr);
  gap: 25px;
  width: 90%;
  height: 90%;
}

.grid-item {
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Nueva animación para el efecto de clic */
.grid-item:active {
  transform: scale(1.05) translateY(-5px);
  /* Escalado y desplazamiento hacia arriba */
  box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
  /* Sombra sutil para resaltar el efecto */
}

/* Efecto al pasar el cursor por encima (hover) */
.grid-item:hover {
  transform: scale(1.05);
  cursor: pointer;
}

@media (max-width: 768px) {
  .bentogrid {
    display: flex;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    width: 100%;
    height: auto;
    gap: 10px;
    padding: 10px;
  }

  .grid-item {
    flex: 0 0 80%;
    scroll-snap-align: center;
    height: 250px;
  }


}

</style>

  <!-- End Sección del encabezado hero -->

  <!-- Contenedor principal para las descripciones de las suites -->
  <div class="container-suite">

    <section class="suite-section seccion seccion2">
      <!-- Información de la suite Malva -->
      <div class="suite-info">

        <div class="buttons-suite">
          <button id="openModal1" class="btn-suite btn-secondary openModalBtn">MAS DETALLES</button>

        </div>

      </div>
      
    </section>
 
  </div>

  <!-- Modales para cada suite con información detallada -->
  <!-- Modal 1 -->
  <div id="modalPlan1" class="modal">
    <!-- Contenido del modal para la suite Malva -->
    <div class="modal-content">
      <div class="sections-container">

        <!-- Section 2 -->
        <div class="section">
          <div class="bentogrid" data-modal-id="modal1">
            <div class="grid-item item1" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item2" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item3" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item4" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item5" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item6" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item7" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item8" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item9" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
            <div class="grid-item item10" loading="lazy" style="background-image: url('Img/Contacts/logo para camilo.jpg');"></div>
          </div>
        </div>
        <!-- / Section 2 -->

        <!-- / Section 4 -->
      </div>
    </div>
  </div>




  <script>
    // SCRIPT PARA LA PAGINA DE SUITES

/*
Este script gestiona carruseles de imágenes, modales, transiciones de secciones,
y contadores aleatorios. Proporciona una experiencia interactiva y responsiva en
la página web.
*/
window.onload = () => {
  document.body.className += " loaded"
}




//COMPORTAMIENTO DE MODALES DE DETALLES DE LAS SUITES

// Función para abrir la modal por su id
function openModal(modalId) {
  const modal = document.getElementById(modalId)
  modal.style.display = "flex" // Mostrar la modal
  document.body.style.overflow = "hidden" // Deshabilitar el scroll en el fondo
}

// Función para cerrar la modal por su id
function closeModal(modalId) {
  const modal = document.getElementById(modalId)
  modal.style.display = "none" // Ocultar la modal
  document.body.style.overflow = "auto" // Habilitar el scroll en el fondo
}

// Abrir modales al hacer clic en los botones
document.getElementById("openModal1").onclick = () => {
  openModal("modalPlan1")
}




  </script>

</body>

</html>