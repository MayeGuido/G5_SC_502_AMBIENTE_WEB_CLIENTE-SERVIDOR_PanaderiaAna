<?php
// Cargar el controlador
require_once __DIR__ . '/../controllers/PasteleriaController.php';
$controller = new PasteleriaController();

// Obtener productos categoría Pastelería desde la BD
$productos = $controller->pasteleria();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastelería | Panadería ANA</title>

    <!-- CSS corregido -->
    <link rel="stylesheet" href="../../publics/css/pasteleria.css">
</head>

<body>

    <!-- MENÚ SUPERIOR -->
    <header class="top-menu">

        <a href="../../index.php">
            <div class="icon-item">
                <img src="../../publics/img/logo_registro.png" alt="Perfil" width="80">
                <p>Inicio</p>
            </div>
        </a>

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

    </header>

    <div class="catalogo-layout">

        <!-- BARRA LATERAL -->
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

            <h1 class="titulo">Pasteles disponibles</h1>

            <section class="catalogo-pasteles">

                <?php if (!empty($productos)): ?>
                    <?php foreach ($productos as $p): ?>

                        <div class="pastel-card">

                            <!-- Imagen desde BD -->
                            <img src="../../<?= $p['imagen']; ?>" alt="<?= $p['nombre']; ?>">

                            <h3><?= $p['nombre']; ?></h3>

                            <p><?= $p['descripcion']; ?></p>

                            <p class="precio">₡<?= number_format($p['precio'], 2); ?></p>

                            <div class="card-buttons">
                                <button class="btn-detalles">Detalles</button>

                                <button class="btn-personalizar"
                                    data-sabor="vainilla"
                                    data-relleno="crema"
                                    data-color="#ffb6c1"
                                    data-precio="<?= $p['precio']; ?>"
                                    data-forma="redondo">
                                    Personalizar
                                </button>
                            </div>

                        </div>

                    <?php endforeach; ?>
                <?php else: ?>

                    <p class="no-productos">No hay pasteles disponibles en la base de datos.</p>

                <?php endif; ?>

            </section>

            <!-- FORMULARIO DE PERSONALIZACIÓN -->
            <form class="form-pastel" id="formPastel">

                <h2>Personaliza tu pastel</h2>

                <div class="form-group">
                    <label for="forma">Forma del pastel:</label>
                    <select id="forma" name="forma" required>
                        <option value="">Seleccione una forma</option>
                        <option value="redondo">Redondo</option>
                        <option value="cuadrado">Cuadrado</option>
                        <option value="corazón">Corazón</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sabor">Sabor del bizcocho:</label>
                    <select id="sabor" name="sabor" required>
                        <option value="">Seleccione un sabor</option>
                        <option value="vainilla">Vainilla</option>
                        <option value="chocolate">Chocolate</option>
                        <option value="red velvet">Red Velvet</option>
                        <option value="limón">Limón</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="color">Color del betún:</label>
                    <input type="color" id="color" name="color" value="#ffb6c1">
                </div>

                <div class="form-group">
                    <label for="relleno">Tipo de relleno:</label>
                    <select id="relleno" name="relleno">
                        <option value="">Seleccione un relleno</option>
                        <option value="crema pastelera">Crema pastelera</option>
                        <option value="nata">Nata</option>
                        <option value="chocolate">Chocolate</option>
                        <option value="frutas">Frutas naturales</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Textura del pastel:</label>
                    <label><input type="radio" name="textura" value="húmedo" required> Húmedo</label>
                    <label><input type="radio" name="textura" value="seco"> Seco</label>
                </div>

                <div class="form-group">
                    <label>Decoración:</label>
                    <label><input type="radio" name="decoracion" value="panaderia" required> Que la panadería la decore</label>
                    <label><input type="radio" name="decoracion" value="propia"> Yo añadiré la decoración</label>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje en el pastel:</label>
                    <input type="text" id="mensaje" name="mensaje" placeholder="Escriba un mensaje">
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen de referencia:</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*">
                    <img id="preview" class="preview" alt="Vista previa">
                </div>

                <div class="form-group">
                    <label for="detalles">Detalles adicionales:</label>
                    <textarea id="detalles" name="detalles" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="precio">Precio estimado:</label>
                    <input type="number" id="precio" name="precio" min="5000" step="100" placeholder="₡" required>
                </div>

                <div class="form-group fecha-hora">
                    <div>
                        <label for="fecha">Fecha de entrega:</label>
                        <input type="date" id="fecha" name="fecha" required>
                    </div>

                    <div>
                        <label for="hora">Hora de entrega:</label>
                        <input type="time" id="hora" name="hora" required>
                    </div>
                </div>

                <button type="submit" class="btn-enviar">Enviar pedido</button>

            </form>
        </main>

        <!-- PANEL DERECHO -->
        <aside class="right-panel">

            <h2>Pastelería ANA</h2>

            <a href="../../index.php">
                <img src="../../publics/img/logo.png" alt="Logo" class="logo-right">
            </a>

            <p class="texto-vertical">Cada pastel cuenta una historia</p>

            <div class="contacto">
                <img src="../../publics/img/telefono.png" alt="Teléfono">
                <p>Contáctenos</p>
            </div>

        </aside>

    </div>

    <!-- JS -->
    <script src="../../publics/js/main.js"></script>

</body>

</html>
