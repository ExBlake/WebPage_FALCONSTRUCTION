<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        html {
  --bg: hsl(132, 83%, 5%);
  --accent: hsl(84, 96%, 80%);
  --fsize: 16px;
  --circleMultiplier: 3;
  --circleSize: calc(calc(var(--circleMultiplier) * 1rem));
}

html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: grid;
  grid-template-rows: 1fr 3rem;
  font-size: var(--fsize);
  background-color: var(--bg);
  position: relative;
  overflow: hidden;
  place-items: center;
  
  p {
    position: relative;
    z-index: 2;
    color: white;
    font-family: sans-serif;

    a {
      color: var(--accent);
    }
  }
  
  &:has(a:hover) #circle {
    --circleSize: calc(calc(var(--circleMultiplier) * 1.5rem));
    opacity: 0.2;
  }
}

#circle {
  pointer-events: none;
  width: var(--circleSize);
  height: var(--circleSize);
  background-color: var(--accent);
  border-radius: 50%;
  position: absolute;
  translate: var(--xpos) var(--ypos);
  transform-origin: center center;
  transition: 
    width .2s ease-in-out,
    height .2s ease-in-out,
    border-radius .4s ease-in-out,
    opacity .2s ease-in-out;
  align-self: start;
  justify-self: start;
}

.gallery {
  display: flex;
  width: 80vw;
  overflow: visible;
  gap: min(5%, 2rem);
  container-type: inline-size;
  container-name: gallery;
 
  img {
    flex: 1;
    width: 100%;
    aspect-ratio: 3/4;
    min-height: 0;
    min-width: 0;
    position: relative;
    clip-path: inset(20px 10px round 12px);
    transition: all .2s cubic-bezier(0.72, 0.14, 0.3, 1.51);
    
    &:hover {
      translate: 0 -20%;
      scale: 2;
      z-index: 2;
      clip-path: inset(0px 0px round 12px);
      transition: translate .2s cubic-bezier(0.4, 0, 0.2, 1),
                scale .6s cubic-bezier(0.22, 0.61, 0.36, 1),
                clip-path 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
  }
}

@container gallery (min-width: 750px) {
  .gallery {
    img {
      &:hover {
        scale: 1.3;
      }
    }
  }
}

    </style>
</head>
<body>
    <div id="circle" style="--xpos:0;--ypos:0;"></div>

<div class="gallery">
  <img src="https://assets.codepen.io/301890/Img4.png" alt="Casa Bonín, Vigo" />
  <img src="https://assets.codepen.io/301890/Img2.png" alt="Rúa do Marqués de Valadares, Vigo" />
  <img src="https://assets.codepen.io/301890/Img1.png" alt="O Sereo, Vigo" />
  <img src="https://assets.codepen.io/301890/Img3.png" alt="Rúa de Carral, Vigo" />
</div>
<p>Pictures of <a href="https://dub.sh/vigo-city" target="_blank">Vigo, Spain</a></p>

<script>
const $context = document.querySelector("body");
const $circle = document.querySelector("#circle");
const $images = document.querySelectorAll(".gallery img");
const gallery = document.querySelector(".gallery");

let targetX = 0;
let targetY = 0;
let currentX = 0;
let currentY = 0;
let onImg = false;
let hoveringImg = null;
const easing = 0.1;

$context.addEventListener("pointermove", (evt) => {
  if (!onImg) {
    targetX = evt.clientX - $circle.getBoundingClientRect().width / 2;
    targetY = evt.clientY - $circle.getBoundingClientRect().height / 2;
  }
});

function animateCircle() {
  currentX += (targetX - currentX) * easing;
  currentY += (targetY - currentY) * easing;

  $circle.style.setProperty("--xpos", `${currentX}px`);
  $circle.style.setProperty("--ypos", `${currentY}px`);

  requestAnimationFrame(animateCircle);
}

animateCircle();

$images.forEach((img) => {
  img.addEventListener("mouseenter", () => {
    const galleryWidth = gallery.getBoundingClientRect().width;
    const scaleFactor = galleryWidth < 750 ? 2 : 1.3;

    const imgRect = img.getBoundingClientRect();
    const finalWidth = imgRect.width * scaleFactor + 20;
    const finalHeight = imgRect.height * scaleFactor + 20;
    const translateY = -0.2 * imgRect.height;
    const imgCenterX = imgRect.left + window.scrollX + imgRect.width / 2;
    const imgCenterY =
      imgRect.top + window.scrollY + imgRect.height / 2 + translateY;

    targetX = imgCenterX - finalWidth / 2;
    targetY = imgCenterY - finalHeight / 2;

    if (!onImg || hoveringImg !== img) {
      $circle.style.width = `${finalWidth}px`;
      $circle.style.height = `${finalHeight}px`;
      $circle.style.borderRadius = "22px";
    }

    onImg = true;
    hoveringImg = img;
    console.log(onImg);
  });
  img.addEventListener("mouseleave", (evt) => {
    if (hoveringImg === img) {
      onImg = false;
      hoveringImg = null;
      console.log(onImg);

      $circle.style.width = "var(--circleSize)";
      $circle.style.height = "var(--circleSize)";
      $circle.style.borderRadius = "50%";

      targetX = evt.clientX - $circle.getBoundingClientRect().width / 2;
      targetY = evt.clientY - $circle.getBoundingClientRect().height / 2;
    }
  });
});
</script>
</body>
</html>