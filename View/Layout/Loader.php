<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CSS-Only Cube Pack</title>
  <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">


</head>
<body>
  <style>
    .boodyy {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  transform-style: preserve-3d;
  perspective: 1000px;
  background: linear-gradient(180deg, rgba(0, 21, 36, 0.897) 0%, rgba(0, 0, 0, 0.875) 100%);
}


.boodyy {
  display: flex;
  justify-content: center;
  align-items: center;
  transform-style: preserve-3d;
  perspective: 1000px;
  background: linear-gradient(180deg, rgba(0, 21, 36, 0.897) 0%, rgba(0, 0, 0, 0.875) 100%);
}
body:hover > label, body:hover > input {
  opacity: 1;
}

label, #shadows {
  position: fixed;
  top: 2vmin;
  opacity: 0.5;
}

label {
  left: 6vmin;
  color: white;
  font-weight: bold;
}

#shadows {
  left: 2vmin;
}

#shadows:not(:checked) ~ .cubes {
  --shadow-filter: none;
}

.cubes {
  width: 10vmin;
  height: 10vmin;
  transform: rotateX(60deg) rotateZ(-45deg);
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  overflow: visible;
  transform-style: preserve-3d;
  perspective: 9000px;
}

.cube, .large-shadow {
  height: 10vmin;
  width: 10vmin;
  transform-style: preserve-3d;
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  transform-origin: center center -0.5vmin;
  position: absolute;
  top: 0;
  left: 0;
}
.cube > .cube-wrap, .large-shadow > .cube-wrap {
  -webkit-animation: cube 4s infinite both;
          animation: cube 4s infinite both;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  transform-origin: center center -0.5vmin;
  will-change: transform;
}
@-webkit-keyframes cube {
  from, to, 20%, 60% {
    -webkit-animation-timing-function: step-start;
            animation-timing-function: step-start;
    transform: none;
  }
  40% {
    transform: rotateY(-1turn);
  }
}
@keyframes cube {
  from, to, 20%, 60% {
    -webkit-animation-timing-function: step-start;
            animation-timing-function: step-start;
    transform: none;
  }
  40% {
    transform: rotateY(-1turn);
  }
}
.cube[data-cube^="1"], .large-shadow[data-cube^="1"] {
  top: calc(-10vmin - 2px);
  --color-bg-top: #848689;
  --color-bg-bottom: #89E4E4;
  --color-fl-top: #4EAFBC;
  --color-fl-bottom: #43A5B2;
}
.cube[data-cube^="2"], .large-shadow[data-cube^="2"] {
  --color-bg-top: #89E4E4;
  --color-bg-bottom: #76DEE5;
  --color-fl-top: #43A5B2;
  --color-fl-bottom: #3D93A9;
}
.cube[data-cube^="3"], .large-shadow[data-cube^="3"] {
  top: calc(10vmin + 2px);
  --color-bg-top: #76DEE5;
  --color-bg-bottom: #63D3D4;
  --color-fl-top: #3D93A9;
  --color-fl-bottom: #8b8c8d;
}
.cube[data-cube^="11"], .cube[data-cube^="21"], .cube[data-cube^="31"], .large-shadow[data-cube^="11"], .large-shadow[data-cube^="21"], .large-shadow[data-cube^="31"] {
  left: calc(-10vmin - 2px);
  --color-fr-top: #ffffff;
  --color-fr-bottom: #ffffff;
}
.cube[data-cube^="12"], .cube[data-cube^="22"], .cube[data-cube^="32"], .large-shadow[data-cube^="12"], .large-shadow[data-cube^="22"], .large-shadow[data-cube^="32"] {
  --color-fr-top: #eeeeee;
  --color-fr-bottom: #d6d7d7;
}
.cube[data-cube^="13"], .cube[data-cube^="23"], .cube[data-cube^="33"], .large-shadow[data-cube^="13"], .large-shadow[data-cube^="23"], .large-shadow[data-cube^="33"] {
  left: calc(10vmin + 2px);
  --color-fr-top: #f1eeee;
  --color-fr-bottom: #d6d6d6;
}
.cube[data-cube$="2"], .large-shadow[data-cube$="2"] {
  transform: translateZ(calc(10vmin + 2px));
}
.cube[data-cube$="3"], .large-shadow[data-cube$="3"] {
  transform: translateZ(calc(-10vmin - 2px));
}

.large-shadows {
  transform: translateZ(-21vmin);
}

.large-shadow {
  background: black;
  height: 10vmin;
  width: 10vmin;
  transform-origin: top right;
  -webkit-animation: large-shadow 4s infinite both;
          animation: large-shadow 4s infinite both;
  filter: var(--shadow-filter, blur(3vmin));
  opacity: 0.2;
  will-change: transform;
}
@-webkit-keyframes large-shadow {
  from, 80%, to {
    transform: scale(1.5, 3);
  }
  20% {
    transform: scale(1.5, 2);
  }
  40%, 60% {
    transform: scale(1.5, 5);
  }
  50% {
    transform: scale(1, 5);
  }
}
@keyframes large-shadow {
  from, 80%, to {
    transform: scale(1.5, 3);
  }
  20% {
    transform: scale(1.5, 2);
  }
  40%, 60% {
    transform: scale(1.5, 5);
  }
  50% {
    transform: scale(1, 5);
  }
}

[class^=cube-] {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  top: 0;
  left: 0;
}
[class^=cube-], [class^=cube-]:before {
  will-change: transform;
  -webkit-animation: any 4s infinite both;
          animation: any 4s infinite both;
}
[class^=cube-]:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: inherit;
}

.cube-top {
  -webkit-animation-name: cube-top;
          animation-name: cube-top;
  overflow: hidden;
}
.cube-top:before, .cube-top:after {
  will-change: transform;
}
.cube-top:before {
  background-image: linear-gradient(to bottom, #CBFEFF, transparent), linear-gradient(to bottom, var(--color-bg-top), var(--color-bg-bottom));
  background-size: 2px 100%, auto;
  background-repeat: no-repeat;
}
.cube-top:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #DFF4F0;
  -webkit-animation: cube-top-flash 4s infinite both;
          animation: cube-top-flash 4s infinite both;
}
@-webkit-keyframes cube-top-flash {
  from, 50%, 60%, to {
    opacity: 0;
  }
  52% {
    opacity: 0.9;
  }
}
@keyframes cube-top-flash {
  from, 50%, 60%, to {
    opacity: 0;
  }
  52% {
    opacity: 0.9;
  }
}
@-webkit-keyframes cube-top {
  20% {
    transform: translateZ(calc(-10vmin + 2vmin));
  }
  40%, 60%, 80% {
    transform: none;
  }
}
@keyframes cube-top {
  20% {
    transform: translateZ(calc(-10vmin + 2vmin));
  }
  40%, 60%, 80% {
    transform: none;
  }
}

.cube-front-left {
  transform-origin: left center;
  transform: rotateY(90deg);
  overflow: hidden;
}
.cube-front-left:before {
  background-image: linear-gradient(to bottom, var(--color-fl-top), var(--color-fl-bottom)), linear-gradient(to bottom, rgba(255, 255, 255, 0.5), transparent 60%);
  background-size: auto auto 1px 100%;
  background-repeat: no-repeat;
  transform-origin: right;
  -webkit-animation-name: cube-front-left;
          animation-name: cube-front-left;
  will-change: transform;
}
@-webkit-keyframes cube-front-left {
  20% {
    transform: scaleX(0.2);
  }
  40%, 60% {
    transform: translateX(-8vmin) scaleX(0.2);
  }
  80% {
    transform: none;
  }
}
@keyframes cube-front-left {
  20% {
    transform: scaleX(0.2);
  }
  40%, 60% {
    transform: translateX(-8vmin) scaleX(0.2);
  }
  80% {
    transform: none;
  }
}

.cube-front-right {
  transform-origin: bottom center;
  transform: rotateX(90deg);
}
.cube-front-right:before {
  background-image: linear-gradient(to right, var(--color-fr-top), var(--color-fr-bottom));
  transform-origin: top;
  -webkit-animation-name: cube-front-right;
          animation-name: cube-front-right;
  will-change: transform;
}
@-webkit-keyframes cube-front-right {
  20% {
    transform: scaleY(0.2);
  }
  40%, 60% {
    transform: translateY(8vmin) scaleY(0.2);
  }
  80% {
    transform: none;
  }
}
@keyframes cube-front-right {
  20% {
    transform: scaleY(0.2);
  }
  40%, 60% {
    transform: translateY(8vmin) scaleY(0.2);
  }
  80% {
    transform: none;
  }
}

.cube-bottom {
  transform: translateZ(-10vmin);
  background-image: linear-gradient(to bottom, var(--color-bg-top), var(--color-bg-bottom));
  -webkit-animation-name: cube-bottom;
          animation-name: cube-bottom;
}
@-webkit-keyframes cube-bottom {
  from, 20%, 80%, to {
    transform: translateZ(calc(-10vmin + 1px)) scale(0.95);
  }
  40%, 60% {
    transform: translateZ(-2vmin) scale(0.95);
  }
}
@keyframes cube-bottom {
  from, 20%, 80%, to {
    transform: translateZ(calc(-10vmin + 1px)) scale(0.95);
  }
  40%, 60% {
    transform: translateZ(-2vmin) scale(0.95);
  }
}
.cube-bottom:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #DFF4F0;
  -webkit-animation: cube-bottom-flash 4s infinite both;
          animation: cube-bottom-flash 4s infinite both;
  will-change: transform;
}
@-webkit-keyframes cube-bottom-flash {
  from, 40%, 50%, to {
    opacity: 0;
  }
  45% {
    opacity: 0.9;
  }
}
@keyframes cube-bottom-flash {
  from, 40%, 50%, to {
    opacity: 0;
  }
  45% {
    opacity: 0.9;
  }
}

[class^=shadow] {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  filter: var(--shadow-filter, blur(20px));
}
[class^=shadow], [class^=shadow]:before {
  will-change: transform;
}
[class^=shadow]:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #214354;
  opacity: 0.7;
}

.shadow-y {
  -webkit-animation: shadow-y 4s infinite both;
          animation: shadow-y 4s infinite both;
}
.shadow-y[data-cube^="11"], .shadow-y[data-cube^="21"] {
  left: 10%;
}
.shadow-y[data-cube^="13"], .shadow-y[data-cube^="23"] {
  left: -10%;
}
@-webkit-keyframes shadow-y {
  to, 40%, 60%, 80%, from {
    transform: translateY(-100%) scale(2, 0.75);
  }
  20% {
    transform: scale(2, 1);
  }
}
@keyframes shadow-y {
  to, 40%, 60%, 80%, from {
    transform: translateY(-100%) scale(2, 0.75);
  }
  20% {
    transform: scale(2, 1);
  }
}
.shadow-y:before {
  -webkit-animation: shadow-y-inverse 4s infinite both;
          animation: shadow-y-inverse 4s infinite both;
  transform-origin: top center;
}
@-webkit-keyframes shadow-y-inverse {
  to, 40%, 60%, 80%, from {
    opacity: 0.9;
    transform: scale(2, 1);
  }
  20% {
    opacity: 0;
    transform: translateY(-100%) scale(2, 0.75);
  }
}
@keyframes shadow-y-inverse {
  to, 40%, 60%, 80%, from {
    opacity: 0.9;
    transform: scale(2, 1);
  }
  20% {
    opacity: 0;
    transform: translateY(-100%) scale(2, 0.75);
  }
}

.shadow-flip {
  width: 2vmin;
  height: 50%;
  top: -1vmin;
  left: calc(50% - 1vmin);
  transform-origin: top center;
  filter: var(--shadow-filter, blur(1vmin));
  -webkit-animation: shadow-flip 4s infinite both;
          animation: shadow-flip 4s infinite both;
  overflow: visible;
}
@-webkit-keyframes shadow-flip {
  from, 20%, 40%, 50%, to {
    transform: rotate(90deg);
  }
  45% {
    transform: rotate(270deg);
  }
}
@keyframes shadow-flip {
  from, 20%, 40%, 50%, to {
    transform: rotate(90deg);
  }
  45% {
    transform: rotate(270deg);
  }
}
.shadow-flip:before {
  -webkit-animation: shadow-flip-inverse 4s infinite both;
          animation: shadow-flip-inverse 4s infinite both;
  transform-origin: top center;
  opacity: 0;
}
@-webkit-keyframes shadow-flip-inverse {
  from, 20%, 40%, 50%, to {
    transform: rotate(0deg);
    opacity: 0;
  }
  45% {
    transform: rotate(-180deg);
    opacity: 0.6;
  }
}
@keyframes shadow-flip-inverse {
  from, 20%, 40%, 50%, to {
    transform: rotate(0deg);
    opacity: 0;
  }
  45% {
    transform: rotate(-180deg);
    opacity: 0.6;
  }
}

.shadow-z {
  -webkit-animation: shadow-z 4s infinite both;
          animation: shadow-z 4s infinite both;
  overflow: visible;
  will-change: transform;
  transform-origin: top center;
}
.shadow-z[data-cube^="11"] {
  --shadow-z-left: 50%;
  --shadow-z-top: 50%;
}
.shadow-z[data-cube^="21"], .shadow-z[data-cube^="31"] {
  --shadow-z-left: 50%;
  --shadow-z-top: 0;
}
.shadow-z[data-cube^="32"] {
  --shadow-z-left: 0;
  --shadow-z-top: 0;
  --shadow-x-scale: 2;
}
.shadow-z[data-cube^="33"] {
  --shadow-z-left: -50%;
  --shadow-z-top: 0;
}
@-webkit-keyframes shadow-z {
  from, 40%, 60%, 80%, to {
    transform: scale(var(--shadow-x-scale), 2);
  }
  20% {
    transform: translateX(var(--shadow-z-left)) translateY(var(--shadow-z-top)) scale(calc(var(--shadow-x-scale, 1) / 2), 2);
  }
}
@keyframes shadow-z {
  from, 40%, 60%, 80%, to {
    transform: scale(var(--shadow-x-scale), 2);
  }
  20% {
    transform: translateX(var(--shadow-z-left)) translateY(var(--shadow-z-top)) scale(calc(var(--shadow-x-scale, 1) / 2), 2);
  }
}
.shadow-z:before {
  -webkit-animation: shadow-z-inverse 4s infinite both;
          animation: shadow-z-inverse 4s infinite both;
}
@-webkit-keyframes shadow-z-inverse {
  40%, 60% {
    transform: translateX(var(--shadow-z-left)) translateY(var(--shadow-z-top)) scale(var(--shadow-x-scale, 1), 2);
  }
  45% {
    opacity: 0;
  }
  from, 40%, 55% {
    opacity: 0.5;
  }
  to {
    opacity: 1;
  }
  from, 20%, 80%, to {
    transform: scale(2);
  }
}
@keyframes shadow-z-inverse {
  40%, 60% {
    transform: translateX(var(--shadow-z-left)) translateY(var(--shadow-z-top)) scale(var(--shadow-x-scale, 1), 2);
  }
  45% {
    opacity: 0;
  }
  from, 40%, 55% {
    opacity: 0.5;
  }
  to {
    opacity: 1;
  }
  from, 20%, 80%, to {
    transform: scale(2);
  }
}

.cube[data-cube="111"] > .cube-wrap, .cube[data-cube="111"] > .cube-wrap:before, .cube[data-cube="111"] > .cube-wrap:after, .cube[data-cube="111"] > .cube-wrap > [class^=cube-], .cube[data-cube="111"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="111"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 103ms;
          animation-delay: 103ms;
}
.cube[data-cube="111"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 103ms;
          animation-delay: 103ms;
}

[class^=shadow-][data-cube="111"]:before,
.large-shadow[data-cube="111"] {
  -webkit-animation-delay: 103ms;
          animation-delay: 103ms;
}

.cube[data-cube="112"] > .cube-wrap, .cube[data-cube="112"] > .cube-wrap:before, .cube[data-cube="112"] > .cube-wrap:after, .cube[data-cube="112"] > .cube-wrap > [class^=cube-], .cube[data-cube="112"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="112"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 97ms;
          animation-delay: 97ms;
}
.cube[data-cube="112"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 97ms;
          animation-delay: 97ms;
}

[class^=shadow-][data-cube="112"]:before,
.large-shadow[data-cube="112"] {
  -webkit-animation-delay: 97ms;
          animation-delay: 97ms;
}

.cube[data-cube="113"] > .cube-wrap, .cube[data-cube="113"] > .cube-wrap:before, .cube[data-cube="113"] > .cube-wrap:after, .cube[data-cube="113"] > .cube-wrap > [class^=cube-], .cube[data-cube="113"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="113"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 137ms;
          animation-delay: 137ms;
}
.cube[data-cube="113"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 137ms;
          animation-delay: 137ms;
}

[class^=shadow-][data-cube="113"]:before,
.large-shadow[data-cube="113"] {
  -webkit-animation-delay: 137ms;
          animation-delay: 137ms;
}

.cube[data-cube="121"] > .cube-wrap, .cube[data-cube="121"] > .cube-wrap:before, .cube[data-cube="121"] > .cube-wrap:after, .cube[data-cube="121"] > .cube-wrap > [class^=cube-], .cube[data-cube="121"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="121"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 96ms;
          animation-delay: 96ms;
}
.cube[data-cube="121"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 96ms;
          animation-delay: 96ms;
}

[class^=shadow-][data-cube="121"]:before,
.large-shadow[data-cube="121"] {
  -webkit-animation-delay: 96ms;
          animation-delay: 96ms;
}

.cube[data-cube="122"] > .cube-wrap, .cube[data-cube="122"] > .cube-wrap:before, .cube[data-cube="122"] > .cube-wrap:after, .cube[data-cube="122"] > .cube-wrap > [class^=cube-], .cube[data-cube="122"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="122"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 218ms;
          animation-delay: 218ms;
}
.cube[data-cube="122"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 218ms;
          animation-delay: 218ms;
}

[class^=shadow-][data-cube="122"]:before,
.large-shadow[data-cube="122"] {
  -webkit-animation-delay: 218ms;
          animation-delay: 218ms;
}

.cube[data-cube="123"] > .cube-wrap, .cube[data-cube="123"] > .cube-wrap:before, .cube[data-cube="123"] > .cube-wrap:after, .cube[data-cube="123"] > .cube-wrap > [class^=cube-], .cube[data-cube="123"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="123"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 250ms;
          animation-delay: 250ms;
}
.cube[data-cube="123"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 250ms;
          animation-delay: 250ms;
}

[class^=shadow-][data-cube="123"]:before,
.large-shadow[data-cube="123"] {
  -webkit-animation-delay: 250ms;
          animation-delay: 250ms;
}

.cube[data-cube="131"] > .cube-wrap, .cube[data-cube="131"] > .cube-wrap:before, .cube[data-cube="131"] > .cube-wrap:after, .cube[data-cube="131"] > .cube-wrap > [class^=cube-], .cube[data-cube="131"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="131"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 291ms;
          animation-delay: 291ms;
}
.cube[data-cube="131"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 291ms;
          animation-delay: 291ms;
}

[class^=shadow-][data-cube="131"]:before,
.large-shadow[data-cube="131"] {
  -webkit-animation-delay: 291ms;
          animation-delay: 291ms;
}

.cube[data-cube="132"] > .cube-wrap, .cube[data-cube="132"] > .cube-wrap:before, .cube[data-cube="132"] > .cube-wrap:after, .cube[data-cube="132"] > .cube-wrap > [class^=cube-], .cube[data-cube="132"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="132"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 106ms;
          animation-delay: 106ms;
}
.cube[data-cube="132"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 106ms;
          animation-delay: 106ms;
}

[class^=shadow-][data-cube="132"]:before,
.large-shadow[data-cube="132"] {
  -webkit-animation-delay: 106ms;
          animation-delay: 106ms;
}

.cube[data-cube="133"] > .cube-wrap, .cube[data-cube="133"] > .cube-wrap:before, .cube[data-cube="133"] > .cube-wrap:after, .cube[data-cube="133"] > .cube-wrap > [class^=cube-], .cube[data-cube="133"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="133"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 253ms;
          animation-delay: 253ms;
}
.cube[data-cube="133"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 253ms;
          animation-delay: 253ms;
}

[class^=shadow-][data-cube="133"]:before,
.large-shadow[data-cube="133"] {
  -webkit-animation-delay: 253ms;
          animation-delay: 253ms;
}

.cube[data-cube="211"] > .cube-wrap, .cube[data-cube="211"] > .cube-wrap:before, .cube[data-cube="211"] > .cube-wrap:after, .cube[data-cube="211"] > .cube-wrap > [class^=cube-], .cube[data-cube="211"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="211"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 292ms;
          animation-delay: 292ms;
}
.cube[data-cube="211"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 292ms;
          animation-delay: 292ms;
}

[class^=shadow-][data-cube="211"]:before,
.large-shadow[data-cube="211"] {
  -webkit-animation-delay: 292ms;
          animation-delay: 292ms;
}

.cube[data-cube="212"] > .cube-wrap, .cube[data-cube="212"] > .cube-wrap:before, .cube[data-cube="212"] > .cube-wrap:after, .cube[data-cube="212"] > .cube-wrap > [class^=cube-], .cube[data-cube="212"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="212"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 294ms;
          animation-delay: 294ms;
}
.cube[data-cube="212"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 294ms;
          animation-delay: 294ms;
}

[class^=shadow-][data-cube="212"]:before,
.large-shadow[data-cube="212"] {
  -webkit-animation-delay: 294ms;
          animation-delay: 294ms;
}

.cube[data-cube="213"] > .cube-wrap, .cube[data-cube="213"] > .cube-wrap:before, .cube[data-cube="213"] > .cube-wrap:after, .cube[data-cube="213"] > .cube-wrap > [class^=cube-], .cube[data-cube="213"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="213"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 273ms;
          animation-delay: 273ms;
}
.cube[data-cube="213"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 273ms;
          animation-delay: 273ms;
}

[class^=shadow-][data-cube="213"]:before,
.large-shadow[data-cube="213"] {
  -webkit-animation-delay: 273ms;
          animation-delay: 273ms;
}

.cube[data-cube="221"] > .cube-wrap, .cube[data-cube="221"] > .cube-wrap:before, .cube[data-cube="221"] > .cube-wrap:after, .cube[data-cube="221"] > .cube-wrap > [class^=cube-], .cube[data-cube="221"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="221"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 90ms;
          animation-delay: 90ms;
}
.cube[data-cube="221"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 90ms;
          animation-delay: 90ms;
}

[class^=shadow-][data-cube="221"]:before,
.large-shadow[data-cube="221"] {
  -webkit-animation-delay: 90ms;
          animation-delay: 90ms;
}

.cube[data-cube="222"] > .cube-wrap, .cube[data-cube="222"] > .cube-wrap:before, .cube[data-cube="222"] > .cube-wrap:after, .cube[data-cube="222"] > .cube-wrap > [class^=cube-], .cube[data-cube="222"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="222"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 152ms;
          animation-delay: 152ms;
}
.cube[data-cube="222"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 152ms;
          animation-delay: 152ms;
}

[class^=shadow-][data-cube="222"]:before,
.large-shadow[data-cube="222"] {
  -webkit-animation-delay: 152ms;
          animation-delay: 152ms;
}

.cube[data-cube="223"] > .cube-wrap, .cube[data-cube="223"] > .cube-wrap:before, .cube[data-cube="223"] > .cube-wrap:after, .cube[data-cube="223"] > .cube-wrap > [class^=cube-], .cube[data-cube="223"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="223"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 34ms;
          animation-delay: 34ms;
}
.cube[data-cube="223"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 34ms;
          animation-delay: 34ms;
}

[class^=shadow-][data-cube="223"]:before,
.large-shadow[data-cube="223"] {
  -webkit-animation-delay: 34ms;
          animation-delay: 34ms;
}

.cube[data-cube="231"] > .cube-wrap, .cube[data-cube="231"] > .cube-wrap:before, .cube[data-cube="231"] > .cube-wrap:after, .cube[data-cube="231"] > .cube-wrap > [class^=cube-], .cube[data-cube="231"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="231"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 234ms;
          animation-delay: 234ms;
}
.cube[data-cube="231"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 234ms;
          animation-delay: 234ms;
}

[class^=shadow-][data-cube="231"]:before,
.large-shadow[data-cube="231"] {
  -webkit-animation-delay: 234ms;
          animation-delay: 234ms;
}

.cube[data-cube="232"] > .cube-wrap, .cube[data-cube="232"] > .cube-wrap:before, .cube[data-cube="232"] > .cube-wrap:after, .cube[data-cube="232"] > .cube-wrap > [class^=cube-], .cube[data-cube="232"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="232"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 12ms;
          animation-delay: 12ms;
}
.cube[data-cube="232"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 12ms;
          animation-delay: 12ms;
}

[class^=shadow-][data-cube="232"]:before,
.large-shadow[data-cube="232"] {
  -webkit-animation-delay: 12ms;
          animation-delay: 12ms;
}

.cube[data-cube="233"] > .cube-wrap, .cube[data-cube="233"] > .cube-wrap:before, .cube[data-cube="233"] > .cube-wrap:after, .cube[data-cube="233"] > .cube-wrap > [class^=cube-], .cube[data-cube="233"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="233"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 280ms;
          animation-delay: 280ms;
}
.cube[data-cube="233"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 280ms;
          animation-delay: 280ms;
}

[class^=shadow-][data-cube="233"]:before,
.large-shadow[data-cube="233"] {
  -webkit-animation-delay: 280ms;
          animation-delay: 280ms;
}

.cube[data-cube="311"] > .cube-wrap, .cube[data-cube="311"] > .cube-wrap:before, .cube[data-cube="311"] > .cube-wrap:after, .cube[data-cube="311"] > .cube-wrap > [class^=cube-], .cube[data-cube="311"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="311"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 41ms;
          animation-delay: 41ms;
}
.cube[data-cube="311"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 41ms;
          animation-delay: 41ms;
}

[class^=shadow-][data-cube="311"]:before,
.large-shadow[data-cube="311"] {
  -webkit-animation-delay: 41ms;
          animation-delay: 41ms;
}

.cube[data-cube="312"] > .cube-wrap, .cube[data-cube="312"] > .cube-wrap:before, .cube[data-cube="312"] > .cube-wrap:after, .cube[data-cube="312"] > .cube-wrap > [class^=cube-], .cube[data-cube="312"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="312"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 29ms;
          animation-delay: 29ms;
}
.cube[data-cube="312"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 29ms;
          animation-delay: 29ms;
}

[class^=shadow-][data-cube="312"]:before,
.large-shadow[data-cube="312"] {
  -webkit-animation-delay: 29ms;
          animation-delay: 29ms;
}

.cube[data-cube="313"] > .cube-wrap, .cube[data-cube="313"] > .cube-wrap:before, .cube[data-cube="313"] > .cube-wrap:after, .cube[data-cube="313"] > .cube-wrap > [class^=cube-], .cube[data-cube="313"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="313"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 183ms;
          animation-delay: 183ms;
}
.cube[data-cube="313"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 183ms;
          animation-delay: 183ms;
}

[class^=shadow-][data-cube="313"]:before,
.large-shadow[data-cube="313"] {
  -webkit-animation-delay: 183ms;
          animation-delay: 183ms;
}

.cube[data-cube="321"] > .cube-wrap, .cube[data-cube="321"] > .cube-wrap:before, .cube[data-cube="321"] > .cube-wrap:after, .cube[data-cube="321"] > .cube-wrap > [class^=cube-], .cube[data-cube="321"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="321"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 89ms;
          animation-delay: 89ms;
}
.cube[data-cube="321"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 89ms;
          animation-delay: 89ms;
}

[class^=shadow-][data-cube="321"]:before,
.large-shadow[data-cube="321"] {
  -webkit-animation-delay: 89ms;
          animation-delay: 89ms;
}

.cube[data-cube="322"] > .cube-wrap, .cube[data-cube="322"] > .cube-wrap:before, .cube[data-cube="322"] > .cube-wrap:after, .cube[data-cube="322"] > .cube-wrap > [class^=cube-], .cube[data-cube="322"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="322"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 64ms;
          animation-delay: 64ms;
}
.cube[data-cube="322"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 64ms;
          animation-delay: 64ms;
}

[class^=shadow-][data-cube="322"]:before,
.large-shadow[data-cube="322"] {
  -webkit-animation-delay: 64ms;
          animation-delay: 64ms;
}

.cube[data-cube="323"] > .cube-wrap, .cube[data-cube="323"] > .cube-wrap:before, .cube[data-cube="323"] > .cube-wrap:after, .cube[data-cube="323"] > .cube-wrap > [class^=cube-], .cube[data-cube="323"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="323"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 126ms;
          animation-delay: 126ms;
}
.cube[data-cube="323"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 126ms;
          animation-delay: 126ms;
}

[class^=shadow-][data-cube="323"]:before,
.large-shadow[data-cube="323"] {
  -webkit-animation-delay: 126ms;
          animation-delay: 126ms;
}

.cube[data-cube="331"] > .cube-wrap, .cube[data-cube="331"] > .cube-wrap:before, .cube[data-cube="331"] > .cube-wrap:after, .cube[data-cube="331"] > .cube-wrap > [class^=cube-], .cube[data-cube="331"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="331"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 112ms;
          animation-delay: 112ms;
}
.cube[data-cube="331"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 112ms;
          animation-delay: 112ms;
}

[class^=shadow-][data-cube="331"]:before,
.large-shadow[data-cube="331"] {
  -webkit-animation-delay: 112ms;
          animation-delay: 112ms;
}

.cube[data-cube="332"] > .cube-wrap, .cube[data-cube="332"] > .cube-wrap:before, .cube[data-cube="332"] > .cube-wrap:after, .cube[data-cube="332"] > .cube-wrap > [class^=cube-], .cube[data-cube="332"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="332"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 120ms;
          animation-delay: 120ms;
}
.cube[data-cube="332"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 120ms;
          animation-delay: 120ms;
}

[class^=shadow-][data-cube="332"]:before,
.large-shadow[data-cube="332"] {
  -webkit-animation-delay: 120ms;
          animation-delay: 120ms;
}

.cube[data-cube="333"] > .cube-wrap, .cube[data-cube="333"] > .cube-wrap:before, .cube[data-cube="333"] > .cube-wrap:after, .cube[data-cube="333"] > .cube-wrap > [class^=cube-], .cube[data-cube="333"] > .cube-wrap > [class^=cube-]:before, .cube[data-cube="333"] > .cube-wrap > [class^=cube-]:after {
  -webkit-animation-delay: 245ms;
          animation-delay: 245ms;
}
.cube[data-cube="333"] > .cube-wrap [class^=shadow-] {
  -webkit-animation-delay: 245ms;
          animation-delay: 245ms;
}

[class^=shadow-][data-cube="333"]:before,
.large-shadow[data-cube="333"] {
  -webkit-animation-delay: 245ms;
          animation-delay: 245ms;
}
  </style>
<div class="boodyy">
<div class="cubes">
  <!--   row, column, z -->
  <div class="cube" data-cube="111">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-z" data-cube="112"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="121">
    <div class="cube-wrap">
      <div class="cube-top">
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="131">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-z" data-cube="132"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="211">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="111"></div>
        <div class="shadow-y" data-cube="111"></div>
        <div class="shadow-z" data-cube="212"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="221">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="121"></div>
        <div class="shadow-y" data-cube="121"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="231">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="131"></div>
        <div class="shadow-y" data-cube="131"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="311">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="211"></div>
        <div class="shadow-y" data-cube="211"></div>
        <div class="shadow-z" data-cube="312"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="321">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="221"></div>
        <div class="shadow-y" data-cube="221"></div>
        <div class="shadow-z" data-cube="322"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="331">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="231"></div>
        <div class="shadow-y" data-cube="231"></div>
        <div class="shadow-z" data-cube="332"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>

  <!-- top layer -->
  <div class="cube" data-cube="112">
    <div class="cube-wrap">
      <div class="cube-top">

      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="122">
    <div class="cube-wrap">
      <div class="cube-top">
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="132">
    <div class="cube-wrap">
      <div class="cube-top">
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="212">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="112"></div>
        <div class="shadow-y" data-cube="112"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="222">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="122"></div>
        <div class="shadow-y" data-cube="122"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="232">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="132"></div>
        <div class="shadow-y" data-cube="132"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="312">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="212"></div>
        <div class="shadow-y" data-cube="212"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="322">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="222"></div>
        <div class="shadow-y" data-cube="222"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="332">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="232"></div>
        <div class="shadow-y" data-cube="232"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>

  <!-- bottom layer -->
  <div class="cube" data-cube="113">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-z" data-cube="111"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="123">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-z" data-cube="121"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="133">
    <div class="cube-wrap">
      <div class="cube-top">
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="213">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="113"></div>
        <div class="shadow-y" data-cube="113"></div>
        <div class="shadow-z" data-cube="211"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="223">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-y" data-cube="123"></div>
        <div class="shadow-z" data-cube="221"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="233">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-y" data-cube="133"></div>
        <div class="shadow-z" data-cube="231"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="313">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="213"></div>
        <div class="shadow-y" data-cube="213"></div>
        <div class="shadow-z" data-cube="311"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="323">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="223"></div>
        <div class="shadow-y" data-cube="223"></div>
        <div class="shadow-z" data-cube="321"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  <div class="cube" data-cube="333">
    <div class="cube-wrap">
      <div class="cube-top">
        <div class="shadow-flip" data-cube="233"></div>
        <div class="shadow-y" data-cube="233"></div>
        <div class="shadow-z" data-cube="331"></div>
      </div>
      <div class="cube-bottom"></div>
      <div class="cube-front-left"></div>
      <div class="cube-front-right"></div>
      <div class="cube-back-left"></div>
      <div class="cube-back-right"></div>
    </div>
  </div>
  
  <div class="large-shadows">
    <div class="large-shadow" data-cube="113"></div>
    <div class="large-shadow" data-cube="123"></div>
    <div class="large-shadow" data-cube="133"></div>
    <div class="large-shadow" data-cube="213"></div>
    <div class="large-shadow" data-cube="223"></div>
    <div class="large-shadow" data-cube="233"></div>
    <div class="large-shadow" data-cube="313"></div>
    <div class="large-shadow" data-cube="323"></div>
    <div class="large-shadow" data-cube="333"></div>
  </div>
</div>
</div>


</body>
</html>
