<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panadería y Repostería ANA</title>

  <!-- CSS -->
  <link rel="stylesheet" href="publics/css/styles.css">
</head>

<body>

  <header class="hero">

    <!-- LOGO -->
    <a href="index.php" class="no-link">
      <img src="publics/img/logo.png" alt="Logo" class="logo">
    </a>

    <!-- PERFIL -->
    <a href="app/views/Perfil.php" class="no-link">
      <div class="icon-item">
        <img src="publics/img/perfil.png" alt="Perfil" width="80">
        <p>Mi Perfil</p>
      </div>
    </a>

    <!-- MENÚ SUPERIOR -->
    <div class="hero-top-icons">

      <a href="app/views/pasteleria.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/pasteleria.png" alt="Pastelería">
          <p>Pastelería</p>
        </div>
      </a>

      <a href="app/views/reposteria.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/reposteria.png" alt="Repostería">
          <p>Repostería</p>
        </div>
      </a>

      <a href="app/views/panaderia.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/panderia.png" alt="Panadería">
          <p>Panadería</p>
        </div>
      </a>

      <a href="app/views/promociones.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/promociones.png" alt="Promociones">
          <p>Promociones</p>
        </div>
      </a>

      <a href="app/views/login.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/login.png" alt="Login">
          <p>Login</p>
        </div>
      </a>

    </div>

    <h1 class="titulo">Panadería y Repostería ANA</h1>

    <!-- BOTONES GRANDES -->
    <div class="hero-buttons">

      <a href="app/views/recetas.php" class="no-link">
        <div class="btn-item">
          <img src="publics/img/recetasconAmor.png" alt="Recetas">
          <p>Recetas con Amor</p>
        </div>
      </a>

      <a href="app/views/sobreNosotros.php" class="no-link">
        <div class="btn-item">
          <img src="publics/img/sobreNosotros.png" alt="Sobre Nosotros">
          <p>Sobre Nosotros</p>
        </div>
      </a>

      <a href="app/views/carrito.php" class="no-link">
        <div class="btn-item carrito-btn">
          <img src="publics/img/carrito.png" alt="Carrito">
          <p>Carrito de Compras</p>
        </div>
      </a>

      <a href="app/views/express.php" class="no-link">
        <div class="btn-item carrito-btn">
          <img src="publics/img/express.png" alt="Express">
          <p>Pedido Express</p>
        </div>
      </a>

    </div>

    <!-- BUSCADOR -->
    <div class="buscador">
      <input type="text" placeholder="Buscar...">
      <button><img src="publics/img/buscar.png" alt="Buscar"></button>
    </div>

  </header>

  <main>

    <h2 class="titulo-vendidos">Lo más vendido</h2>

    <section class="productos">

      <div class="producto">
        <img src="publics/img/bonetesdulces.png" alt="Bonetes Dulces">
        <div class="info">
          <h3>Bonetes Dulces</h3>
          <p>Con crema pastelera y azúcar encima</p>
          <div class="precio">
            100₡ <img src="publics/img/carrito.png" class="add-cart-index">
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/dona.png" alt="Dona">
        <div class="info">
          <h3>Dona de Chocolate</h3>
          <p>Rellena de dulce de leche</p>
          <div class="precio">
            500₡ <img src="publics/img/carrito.png" class="add-cart-index">
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/tamalasado.png" alt="Tamal Asado">
        <div class="info">
          <h3>Tamal Asado</h3>
          <p>Cremoso y delicioso</p>
          <div class="precio">
            100₡ <img src="publics/img/carrito.png" class="add-cart-index">
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/piña.png" alt="Piña">
        <div class="info">
          <h3>Piña de Pan</h3>
          <p>Pan tipo baguette con queso encima</p>
          <div class="precio">
            100₡ <img src="publics/img/carrito.png" class="add-cart-index">
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/tresleches.png" alt="Tres Leches">
        <div class="info">
          <h3>Tres Leches</h3>
          <p>Chantilly + cereza</p>
          <div class="precio">
            1200₡ <img src="publics/img/carrito.png" class="add-cart-index">
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/baguet.png" alt="Baguette">
        <div class="info">
          <h3>Baguette</h3>
          <p>Con queso encima</p>
          <div class="precio">
            500₡ <img src="publics/img/carrito.png" class="add-cart-index">
          </div>
        </div>
      </div>

    </section>

  </main>

  <footer>
    <div class="footer-icons">

      <a href="app/views/contactenos.php" class="no-link">
        <div class="footer-btn" id="btnContactenosIndex">
          <img src="publics/img/contactenos.png" alt="Contáctenos">
          <p>Contáctenos</p>
        </div>

        <a href="app/views/preguntas.php" class="no-link">
          <div class="footer-btn" id="btnPreguntasIndex">
            <img src="publics/img/preguntas.png" alt="Preguntas">
            <p>Preguntas</p>
          </div>

          <a href="app/views/resenas.php" class="no-link">
            <div class="footer-btn">
              <img src="publics/img/reseñas.png" alt="Reseñas">
              <p>Reseñas</p>
            </div>
          </a>


    </div>

    <p class="footer-text">
      Más de 10 años de pasión, esfuerzo y dulzura en cada creación
    </p>
  </footer>

  <script src="publics/js/main.js"></script>

</body>

</html>