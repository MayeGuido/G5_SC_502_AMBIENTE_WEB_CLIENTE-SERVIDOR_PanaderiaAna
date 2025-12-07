<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería | Recetas con Amor</title>
    <link rel="stylesheet" href="publics/css/stylesPanaderia.css">
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
                    <img src="publics/img/pasteleria.png" alt="Pastelería">
                    <p>Pastelería</p>
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
                    <img src="publics/img/sobreNosotros.png" alt="Sobre Nosotros">
                    <p>Sobre Nosotros</p>
                </div>
            </a>

            <a href="#">
                <div class="side-item">
                    <img src="publics/img/carrito.png" alt="Carrito">
                    <p>Carrito de<br>compras</p>
                </div>
            </a>

            <a href="#">
                <div class="side-item">
                    <img src="publics/img/express.png" alt="Pedido Express">
                    <p>Pedido<br>Express</p>
                </div>
            </a>
        </aside>


        <main class="catalogo-container">

            <div class="fila-producto">
                <img src="publics/img/quequeChocolate.png" alt="Pastel de chocolate" class="img-producto">
                <div class="producto-card">
                    <h3>Pastel de chocolate</h3>
                    <p>Bizcocho húmedo con cobertura de cacao y relleno de crema.</p>
                    <div class="estrellas"></div>
                    <button class="btn-ver">Ver Receta</button>
                </div>
            </div>

            <div class="fila-producto">
                <img src="publics/img/quequeSeco.png" alt="Queque seco" class="img-producto">
                <div class="producto-card">
                    <h3>Queque seco</h3>
                    <p>Receta clásica, esponjosa y con toques de vainilla.</p>
                    <div class="estrellas"></div>
                    <button class="btn-ver">Ver Receta</button>
                </div>
            </div>

            <div class="fila-producto">
                <img src="publics/img/pizzita.png" alt="Pizzita" class="img-producto">
                <div class="producto-card">
                    <h3>Pizzita</h3>
                    <p>Mini pizzas de masa artesanal con salsa casera.</p>
                    <div class="estrellas"></div>
                    <button class="btn-ver">Ver Receta</button>
                </div>
            </div>

        </main>

        <aside class="right-panel">
            <h2>Recetas con Amor</h2>
            <a href="index.php">
                <img src="publics/img/logo.png" alt="Logo" class="logo-right">
            </a>
            <p class="texto-vertical">
                Más de 10 años de pasión, esfuerzo y dulzura en cada creación
            </p>

            <div class="contacto">
                <img src="publics/img/contactenos.png" alt="Teléfono">
                <p>Contáctenos</p>
            </div>
        </aside>




   

            <div id="modalReceta" class="modal-receta">
                <div class="modal-contenido">
                    <span class="cerrar-modal">&times;</span>
                    <h2 id="tituloReceta"></h2>
                    <img id="imgReceta" src="" alt="Imagen de la receta">
                    <p id="descripcionReceta"></p>
                    <p id="ingredientesReceta"></p>
                </div>
            </div>


            <script src="publics/js/main.js">

            </script>

</body>

</html>