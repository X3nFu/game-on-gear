<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenamiento de Golf</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos para el menú desplegable */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: white;
            font-size: 24px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

    <!-- Barra de navegación -->

    <header>
        <nav class="navbar">
            <div class="dropdown">   

                <button>
                    <i class="fas fa-user"></i>
                </button>
                <div class="dropdown-content">
                    <a href="perfil.html">Perfil</a>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#categorias">Categorías</a></li>
                <li><a href="#acerca">Acerca de</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>   


    <!-- Sección principal -->
    <section id="inicio" class="hero">
        <h1>Almacen de Golf</h1>
        <p>Descubre todo lo que necesitas para almacenar y cuidar tu equipo de golf.</p>
        <!-- Sección de carrusel -->
   <div class="carrusel">
        <div class="carrusel-container">
            <div class="carrusel-slide active">
                <img src="assets/golf_ball.png" alt="Imagen 1">
            </div>
            <div class="carrusel-slide">
                <img src="assets/talega.png" alt="Imagen 2">
            </div>
            <div class="carrusel-slide">
                <img src="assets/palos.png" alt="Imagen 3">
            </div>
            <div class="carrusel-slide">
                <img src="assets/ropa.png" alt="Imagen 4">
            </div>
        </div>
        <button class="carrusel-btn prev" onclick="cambiarSlide(-1)">&#10094;</button>
        <button class="carrusel-btn next" onclick="cambiarSlide(1)">&#10095;</button>
    </div>

    <a href="#categorias" class="btn">Explorar Categorías</a>
    </section>
    </section>

    <!-- Sección de categorías -->
    <section id="categorias" class="categorias">
        <h2>Categorías de Productos</h2>
        <div class="categorias-grid">
            <a href="bolsas-de-golf.html" class="categoria-item">
                <h3>Bolsas de Golf</h3>
                <p>Encuentra la bolsa perfecta para almacenar y transportar tus palos.</p>
            </a>
            <a href="palos-de-golf.html" class="categoria-item">
                <h3>Palos de Golf</h3>
                <p>Palos de alta calidad para todos los niveles y estilos de juego.</p>
            </a>
            <a href="bolas-y-tees.html" class="categoria-item">
                <h3>Bolas y Tees</h3>
                <p>Accesorios esenciales para cada ronda de golf.</p>
            </a>
            <a href="ropa-y-calzado.html" class="categoria-item">
                <h3>Ropa y Calzado</h3>
                <p>Equipamiento de golf cómodo y de alta calidad.</p>
            </a>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="contacto">
        <h2>Contáctanos</h2>
        <p>¿Tienes alguna pregunta sobre nuestros productos? ¡Estamos aquí para ayudarte!</p>
        <a href="mailto:info@almacendegolf.com" class="btn">Escríbenos</a>
    </section>

    <!-- Vinculación del archivo JavaScript -->
    <script src="carrusel.js"></script>

</body>
</html>
