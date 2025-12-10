<?php
require_once __DIR__ . '/../controllers/PromocionesController.php';
$controller = new PromocionesController();

// Obtener productos categoría Promociones desde la BD
$promos = $controller->mostrarPromociones();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería | Promociones</title>

    <!-- CSS corregido -->
    <link rel="stylesheet" href="../../publics/css/promociones.css">
</head>

<body>

    <!-- HEADER -->
    <header class="top-menu">

        <a href="../../index.php">
            <div class="icon-item">
                <img src="../../publics/img/logo_registro.png" alt="Inicio" width="80">
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

    <div class="catalogo-layout">

        <!-- SIDE BAR -->
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

        <!-- CONTENIDO PRINCIPAL -->
        <main class="catalogo-container">

            <h1 class="titulo-promos">Promociones Especiales</h1>

            <?php if (!empty($promos)): ?>
                <?php foreach ($promos as $p): ?>
                    <div class="promo-card">

                        <!-- Imagen desde BD -->
                        <img src="../../<?= $p['imagen']; ?>"
                             alt="<?= $p['nombre']; ?>"
                             class="promo-img">

                        <div class="promo-info">

                            <h3><?= $p['nombre']; ?></h3>
                            <p><?= $p['descripcion']; ?></p>

                            <p class="precio">

                                <?php if (!empty($p['precio_original'])): ?>
                                    <span class="antes">
                                        ₡<?= number_format($p['precio_original'], 2); ?>
                                    </span>
                                <?php endif; ?>

                                ₡<?= number_format($p['precio'], 2); ?>

                            </p>

                            <button class="btn-promo">Aprovechar promoción</button>

                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>

                <p style="text-align:center; font-size:22px;">
                    No hay promociones activas en este momento.
                </p>

            <?php endif; ?>

        </main>

        <!-- PANEL DERECHO -->
        <aside class="right-panel">

            <h2>Promociones</h2>

            <a href="../../index.php">
                <img src="../../publics/img/logo.png" alt="Logo" class="logo-right">
            </a>

            <p class="texto-vertical">
                Más de 10 años de pasión, esfuerzo y dulzura en cada creación
            </p>

            <div class="contacto">
                <img src="../../publics/img/contactenos.png" alt="Teléfono">
                <p>Contáctenos</p>
            </div>

        </aside>

    </div>

    <script src="../../publics/js/main.js"></script>

</body>

</html>
