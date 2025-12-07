<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Panadería y Repostería ANA</title>
  <link rel="stylesheet" href="publics/css/styles.css" />
</head>

<body>

  <header class="hero">
    <a href="app/views/index.php" class="no-link">
      <img src="publics/img/logo.png" alt="Logo" class="logo" />
    </a>

    <a href="app/views/Perfil.php" class="no-link">
      <div class="icon-item">
        <img src="publics/img/perfil.png" alt="Perfil" width="80" >
        <p >Mi Perfil</p>
      </div>
    </a>
  


    <div class="hero-top-icons">
      <a href="app/views/pasteleria.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/pasteleria.png" alt="Pasteleria" />
          <p>Pastelería</p>
        </div>
      </a>
      <a href="app/views/reposteria.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/reposteria.png" alt="Repostería" />
          <p>Repostería</p>
        </div>
      </a>
      <a href="app/views/panaderia.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/panderia.png" alt="Panadería" />
          <p>Panadería</p>
        </div>
      </a>
      <a href="app/views/promociones.php" class="no-link">
        <div class="icon-item">
          <img src="publics/img/promociones.png" alt="Promociones" />
          <p>Promociones</p>
        </div>
      </a>
        <a href="app/views/login.php" class="no-link">
      <div class="icon-item">
        <img src="publics/img/login.png" alt="login">
        <p>Login</p>
      </div>
    </a>
    </div>

    <h1 class="titulo">Panadería y Repostería ANA</h1>

    <div class="hero-buttons">
      <a href="app/views/recetas.php" class="no-link">
        <div class="btn-item">
          <img src="publics/img/recetasconAmor.png" alt="Recetas" />
          <p>Recetas con Amor</p>
        </div>
      </a>

      <a href="app/views/sobreNosotros.php" class="no-link">
        <div class="btn-item">
          <img src="publics/img/sobreNosotros.png" alt="Sobre Nosotros" />
          <p>Sobre Nosotros</p>
        </div>
      </a>

      <div class="btn-item carrito-btn" id="btnCarritoIndex">
        <img src="publics/img/carrito.png" alt="Carrito de Compras" />
        <p>Carrito de Compras</p>
      </div>

      <div class="btn-item">
        <img src="publics/img/express.png" alt="Pedido Express" />
        <p>Pedido Express</p>
      </div>
    </div>

    <div class="buscador">
      <input type="text" placeholder="Buscar..." />
      <button><img src="publics/img/buscar.png" alt="Buscar" /></button>
    </div>
  </header>

  <main>
    <h2 class="titulo-vendidos">Lo más vendido</h2>
    <section class="productos">
      <div class="producto">
        <img src="publics/img/bonetesdulces.png" alt="Bonetes Dulces" />
        <div class="info">
          <h3>Bonetes Dulces</h3>
          <p>Con crema pastelera en el centro y azúcar encima</p>
          <div class="precio">
            100₡ <img src="publics/img/carrito.png" alt="Carrito" class="add-cart-index" />
          </div>
        </div>
      </div>
      <div class="producto">
        <img src="publics/img/dona.png" alt="Dona" />
        <div class="info">
          <h3>Dona de Chocolate</h3>
          <p>Bañada de delicioso chocolate oscuro con chispas encima y rellena de dulce de leche</p>
          <div class="precio">
            500₡ <img src="publics/img/carrito.png" alt="Carrito" class="add-cart-index" />
          </div>
        </div>
      </div>
      <div class="producto">
        <img src="publics/img/tamalasado.png" alt="tamal" />
        <div class="info">
          <h3>Tamal Asado</h3>
          <p>Cremoso y simplemente delicioso</p>
          <div class="precio">
            100₡ <img src="publics/img/carrito.png" alt="Carrito" class="add-cart-index" />
          </div>
        </div>
      </div>
      <div class="producto">
        <img src="publics/img/piña.png" alt="Bonetes Dulces" />
        <div class="info">
          <h3>Piña de Pan</h3>
          <p>10 bollitos de pan hecha de masa tipo baguette, con queso en polvo encima</p>
          <div class="precio">
            100₡ <img src="publics/img/carrito.png" alt="Carrito" class="add-cart-index" />
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/tresleches.png" alt="Tres leches" />
        <div class="info">
          <h3>Tres leches</h3>
          <p>Cubierta de chantilly, chispas y cereza</p>
          <div class="precio">
            1200₡ <img src="publics/img/carrito.png" alt="Carrito" class="add-cart-index" />
          </div>
        </div>
      </div>

      <div class="producto">
        <img src="publics/img/baguet.png" alt="Baguette" />
        <div class="info">
          <h3>Baguette</h3>
          <p>Con queso esparcido por encima</p>
          <div class="precio">
            500₡ <img src="publics/img/carrito.png" alt="Carrito" class="add-cart-index" />
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-icons">
      <div class="footer-btn" id="btnContactenosIndex">
        <img src="publics/img/contactenos.png" alt="Contáctenos" />
        <p>Contáctenos</p>
      </div>
      <div class="footer-btn" id="btnPreguntasIndex">
        <img src="publics/img/preguntas.png" alt="Preguntas" />
        <p>Preguntas</p>
      </div>
      <div class="footer-btn" id="btnResenasIndex">
        <img src="publics/img/reseñas.png" alt="Reseñas" />
        <p>Reseñas</p>
      </div>
    </div>
    <p class="footer-text">
      Más de 10 años de pasión, esfuerzo y dulzura en cada creación
    </p>
  </footer>

  <div id="modalInfoIndex" class="modal">
    <div class="modal-content">
      <span class="cerrar">&times;</span>
      <h3 id="modalTituloIndex"></h3>
      <p id="modalTextoIndex"></p>
    </div>
  </div>

  <script src="publics/js/main.js"></script>
</body>

</html>