<?php
require_once __DIR__ . '/../controllers/RecetaController.php';

$controller = new RecetaController();
$recetas = $controller->index(); // traer todas las recetas
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería | Recetas con Amor</title>
    <link rel="stylesheet" href="../../publics/css/stylesPanaderia.css">
</head>

<body>

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

            <a href="#">
                <div class="side-item">
                    <img src="../../publics/img/carrito.png" alt="Carrito">
                    <p>Carrito de<br>compras</p>
                </div>
            </a>

            <a href="#">
                <div class="side-item">
                    <img src="../../publics/img/express.png" alt="Pedido Express">
                    <p>Pedido<br>Express</p>
                </div>
            </a>
        </aside>


        <main class="catalogo-container">

            <?php if (!empty($recetas)): ?>
            <?php foreach ($recetas as $r): ?>
            <div class="fila-producto">
                <img src="../../<?= $r['imagen']; ?>" alt="<?= $r['nombre']; ?>" class="img-producto">

                <div class="producto-card">
                    <h3>
                        <?= $r['nombre']; ?>
                    </h3>
                    <p>
                        <?= $r['descripcion']; ?>
                    </p>
                    <div class="estrellas"></div>

                    <!-- Botón para abrir modal -->
                    <button class="btn-ver" data-nombre="<?= htmlspecialchars($r['nombre']); ?>"
                        data-descripcion="<?= htmlspecialchars($r['descripcion']); ?>"
                        data-ingredientes="<?= htmlspecialchars($r['ingredientes']); ?>"
                        data-imagen="<?= $r['imagen']; ?>">Ver Receta</button>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>No hay recetas disponibles por el momento.</p>
            <?php endif; ?>

        </main>

        <aside class="right-panel">
            <h2>Recetas con Amor</h2>
            <a href="index.php">
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


    <!-- MODAL -->
    <div id="modalReceta" class="modal-receta">
        <div class="modal-contenido">
            <span class="cerrar-modal">&times;</span>
            <h2 id="tituloReceta"></h2>
            <img id="imgReceta" src="" alt="Imagen de la receta">
            <p id="descripcionReceta"></p>
            <p id="ingredientesReceta"></p>
        </div>
    </div>


    <script>
        // Manejo del modal con recetas dinámicas
        const botones = document.querySelectorAll(".btn-ver");
        const modal = document.getElementById("modalReceta");
        const cerrar = document.querySelector(".cerrar-modal");

        const titulo = document.getElementById("tituloReceta");
        const descripcion = document.getElementById("descripcionReceta");
        const ingredientes = document.getElementById("ingredientesReceta");
        const imagen = document.getElementById("imgReceta");

        botones.forEach(btn => {
            btn.addEventListener("click", () => {
                titulo.textContent = btn.dataset.nombre;
                descripcion.textContent = btn.dataset.descripcion;
                ingredientes.textContent = "Ingredientes: " + btn.dataset.ingredientes;
                imagen.src = btn.dataset.imagen;

                modal.style.display = "flex";
            });
        });

        cerrar.addEventListener("click", () => modal.style.display = "none");
        modal.addEventListener("click", e => {
            if (e.target === modal) modal.style.display = "none";
        });
    </script>

</body>

</html>