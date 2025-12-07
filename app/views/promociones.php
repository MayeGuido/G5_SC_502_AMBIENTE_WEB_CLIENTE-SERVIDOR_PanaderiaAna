<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería | Catálogo de productos</title>
    <link rel="stylesheet" href="publics/css/promociones.css">
</head>

<body>

    <header class="top-menu">
        <a href="Perfil.php">
            <div class="icon-item">
                <img src="publics/img/perfil.png" alt="Perfil" width="80">
                <p>Mi Perfil</p>
            </div>
        </a>
        <div class="top-icons">
            <a href="pasteleria.php">
                <div class="icon-item">
                    <img src="publics/img/pasteleria.png" alt="Pasteleria">
                    <p>Pasteleria</p>
                </div>
            </a>
            <a href="reposteria.php">

                <div class="icon-item">
                    <img src="publics/img/reposteria.png" alt="Repostería">
                    <p>Repostería</p>
                </div>
            </a>
            <a href="panaderia.php">

                <div class="icon-item">
                    <img src="publics/img/panderia.png" alt="Panadería">
                    <p>Panadería</p>
                </div>
            </a>
            <a href="promociones.php">

                <div class="icon-item">
                    <img src="publics/img/promociones.png" alt="Promociones">
                    <p>Promociones</p>
                </div>
            </a>

        </div>
    </header>

    <div class="catalogo-layout">

        <aside class="side-bar">
            <a href="recetas.php">
                <div class="side-item">
                    <img src="publics/img/recetasconAmor.png" alt="Recetas">
                    <p>Recetas<br>con Amor</p>
                </div>
            </a>
            <a href="sobreNosotros.php">
                <div class="side-item">
                    <img src="publics/img/sobreNosotros.png" alt="sobreNosotros">
                    <p>Sobre Nosotros</p>
                </div>
            </a>
            <a href="recetas.php">
                <div class="side-item">
                    <img src="publics/img/carrito.png" alt="Carrito">
                    <p>Carrito de<br>compras</p>
                </div>
            </a>
            <a href="recetas.php">
                <div class="side-item">
                    <img src="publics/img/express.png" alt="Express">
                    <p>Pedido<br>Express</p>
                </div>
            </a>

        </aside>


        <main class="catalogo-container">

            <h1 class="titulo-promos"> Promociones Especiales </h1>

            <div class="promo-card">
                <img src="publics/img/baguet.png" alt="Baguette" class="promo-img">
                <div class="promo-info">
                    <h3>Combo Baguette + Café</h3>
                    <p>Disfrutá tu café favorito con una baguette recién horneada.</p>
                    <p class="precio"><span class="antes">₡2500</span> ₡1800</p>
                    <button class="btn-promo">Aprovechar promoción</button>
                </div>
            </div>

            <div class="promo-card">
                <img src="publics/img/quequeChocolate.png" alt="Pastel de chocolate" class="promo-img">
                <div class="promo-info">
                    <h3>2x1 en Pastel de Chocolate</h3>
                    <p>Solo por esta semana. ¡El postre favorito al doble de amor!</p>
                    <p class="precio"><span class="antes">₡4000</span> ₡2000</p>
                    <button class="btn-promo">Aprovechar promoción</button>
                </div>
            </div>

            <div class="promo-card">
                <img src="publics/img/galletas.jpg" alt="Galletas" class="promo-img">
                <div class="promo-info">
                    <h3>Pack de Galletas Artesanales</h3>
                    <p>Llévate 3 paquetes y pagá solo 2. ¡Crocantes y deliciosas!</p>
                    <p class="precio"><span class="antes">₡3000</span> ₡2000</p>
                    <button class="btn-promo">Aprovechar promoción</button>
                </div>
            </div>

        </main>

        <aside class="right-panel">
            <h2>Promociones</h2>
            <a href="index.php">
                <img src="publics/img/logo.png" alt="Logo" class="logo-right">
            </a>
            <p class="texto-vertical">Más de 10 años de pasión, esfuerzo y dulzura en cada creación</p>

            <div class="contacto">
                <img src="publics/img/contactenos.png" alt="Teléfono">
                <p>Contáctenos</p>
            </div>
        </aside>
    </div>

    <script src="publics/js/main.js"></script>


</body>

</html>