<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acordeón Mejorado</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .accordion {
            width: 100%;
            max-width: 600px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .accordion-item {
            border-bottom: 1px solid #e0e0e0;
        }

        .accordion-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            color: #333;
            transition: all 0.3s ease;
        }

        .accordion-header:hover {
            background-color: #f9f9f9;
        }

        .accordion-header::after {
            content: '\002B';
            font-size: 24px;
            transition: transform 0.3s ease;
        }

        .accordion-item.active .accordion-header::after {
            transform: rotate(45deg);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0, 1, 0, 1);
            background-color: #f9f9f9;
        }

        .accordion-item.active .accordion-content {
            max-height: 1000px;
            transition: max-height 1s ease-in-out;
        }

        .accordion-content p {
            padding: 20px;
            color: #666;
            line-height: 1.6;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .accordion-item.active .accordion-content p {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</head>
<body>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header">Diseño</div>
            <div class="accordion-content">
                <p>Explora nuestro innovador enfoque de diseño que combina estética y funcionalidad. Creamos soluciones visuales que no solo son atractivas, sino que también mejoran la experiencia del usuario.</p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header">Colaborar para recolectar</div>
            <div class="accordion-content">
                <p>Únete a nuestra iniciativa de colaboración para la recolección de datos. Juntos, podemos crear un impacto significativo y desarrollar soluciones más efectivas basadas en información precisa y actualizada.</p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header">Objetivo para empaques</div>
            <div class="accordion-content">
                <p>Nuestro objetivo es revolucionar la industria del empaquetado con soluciones sostenibles y eficientes. Trabajamos en la creación de empaques que no solo protegen los productos, sino que también cuidan nuestro planeta.</p>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header">Objetivo para recolección</div>
            <div class="accordion-content">
                <p>Optimizamos los procesos de recolección para maximizar la eficiencia y minimizar el impacto ambiental. Nuestro objetivo es implementar sistemas inteligentes que mejoren la logística y reduzcan los desperdicios.</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.accordion-header').forEach(button => {
            button.addEventListener('click', () => {
                const accordionItem = button.parentElement;
                
                document.querySelectorAll('.accordion-item').forEach(item => {
                    if (item !== accordionItem && item.classList.contains('active')) {
                        item.classList.remove('active');
                    }
                });
                
                accordionItem.classList.toggle('active');
            });
        });
    </script>
</body>
</html>