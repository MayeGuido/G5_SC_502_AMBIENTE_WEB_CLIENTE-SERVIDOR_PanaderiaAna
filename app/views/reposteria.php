<?php
require_once __DIR__ . '/../controllers/ReposteriaController.php';
$controller = new ReposteriaController();
$productos = $controller->mostrarReposteria();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repostería - Panadería ANA</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../publics/css/stylesPanaderia.css">
</head>

<body class="catalogo-body">

<header class="top-menu">

    <a href="../../index.php">
        <div class="icon-item">
            <img src="../../publics/img/logo_registro.png" alt="Perfil" class="perfil-icon">
            <p>Inicio</p>
        </div>
    </a>

    <div class="top-icons">

        <a href="pasteleria.php">
            <div class="icon-item">
                <img src="../../publics/img/pasteleria.png" alt="Pastelería">
                <p>Pastelería</p>
            </div>
        </a>

        <a href="reposteria.php">
            <div class="icon-item">
                <img src="../../publics/img/reposteria.png" alt="Repostería">
                <p>Repostería</p>
            </div>
        </a>

        <a href="panaderia.php">
            <div class="icon-item">
                <img src="../../publics/img/panderia.png" alt="Panadería">
                <p>Panadería</p>
            </div>
        </a>

        <a href="promociones.php">
            <div class="icon-item">
                <img src="../../publics/img/promociones.png" alt="Promociones">
                <p>Promociones</p>
            </div>
        </a>

    </div>
</header>

<main class="catalogo-layout">

    <aside class="side-bar">

        <a href="recetas.php">
            <div class="side-item">
                <img src="../../publics/img/recetasconAmor.png" alt="Recetas">
                <p>Recetas<br>con Amor</p>
            </div>
        </a>

        <a href="sobreNosotros.php">
            <div class="side-item">
                <img src="../../publics/img/sobreNosotros.png" alt="Sobre Nosotros">
                <p>Sobre Nosotros</p>
            </div>
        </a>

        <a href="carrito.php">
            <div class="side-item">
                <img src="../../publics/img/carrito.png" alt="Carrito">
                <p>Carrito de<br>compras</p>
            </div>
        </a>

        <a href="express.php">
            <div class="side-item">
                <img src="../../publics/img/express.png" alt="Express">
                <p>Pedido<br>Express</p>
            </div>
        </a>

    </aside>

    <section class="catalogo-container">

        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $p): ?>
                <div class="fila-producto">

                    <img src="../../<?= $p['imagen']; ?>" 
                         alt="<?= $p['nombre']; ?>" 
                         class="img-producto">

                    <div class="producto-card">
                        <h3><?= $p['nombre']; ?></h3>
                        <p><?= $p['descripcion']; ?></p>

                        <div class="estrellas"></div>

                        <div class="precio">
                            <?= number_format($p['precio'], 2); ?> colones
                        </div>

                        <div class="acciones">

                            <a href="carrito.php?accion=agregar&id=<?= $p['id']; ?>" 
                               class="btn-agregar">
                               <img src="../../publics/img/carrito.png" width="25">
                               Añadir al carrito
                            </a>

                            <div class="cantidad">
                                <input type="number" min="1" value="1">
                            </div>

                            <button class="btn-express">
                                <img src="../../publics/img/express.png" width="25">
                                Envío Express
                            </button>

                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p class="no-productos">No hay productos disponibles en esta categoría.</p>
        <?php endif; ?>

    </section>

    <aside class="right-panel">
        <div class="right-overlay">

            <h2>Panadería ANA</h2>

            <a href="../../index.php">
                <img src="../../publics/img/logo.png" class="logo-right" alt="Logo ANA">
            </a>

            <p class="texto-vertical">
                Más de 10 años de pasión, esfuerzo y dulzura en cada creación
            </p>

            <div class="contacto">
                <img src="../../publics/img/contactenos.png" alt="Contacto">
                <p>Contáctenos</p>
            </div>

        </div>
    </aside>

</main>

<script src="../../publics/js/main.js"></script>

</body>
</html>
