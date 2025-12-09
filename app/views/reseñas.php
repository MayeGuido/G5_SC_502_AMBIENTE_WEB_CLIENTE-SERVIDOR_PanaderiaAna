<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reseñas - Panadería y Repostería ANA</title>
  <link rel="stylesheet" href=" /Panaderia/publics/css/styles.css" />
  <link rel="stylesheet" href=" /Panaderia/publics/css/estrellas.css" />
</head>

<body>

  <header class="hero">
    <a href=" /Panaeria/index.php" class="no-link">
      <img src=" /Panaderia/publics/img/logo.png" alt="Logo" class="logo" />
    </a>

    <a href=" Perfil.php">
      <div class="icon-item">
        <img src=" /Panaderia/publics/img/perfil.png" alt="Perfil" width="80">
        <p>Mi Perfil</p>
      </div>
    </a>
    <div class="hero-top-icons">
      <a href=" pasteleria.php" class="no-link">
        <div class="icon-item">
          <img src=" /Panaderia/publics/img/pasteleria.png" alt="Pasteleria" />
          <p>Pastelería</p>
        </div>
      </a>
      <a href=" reposteria.php" class="no-link">
        <div class="icon-item">
          <img src=" /Panaderia/publics/img/reposteria.png" alt="Repostería" />
          <p>Repostería</p>
        </div>
      </a>
      <a href=" panaderia.php" class="no-link">
        <div class="icon-item">
          <img src=" /Panaderia/publics/img/panderia.png" alt="Panadería" />
          <p>Panadería</p>
        </div>
      </a>
      <a href=" promociones.php" class="no-link">
        <div class="icon-item">
          <img src=" /Panaderia/publics/img/promociones.png" alt="Promociones" />
          <p>Promociones</p>
        </div>
      </a>
    </div>

    <h1 class="titulo">Reseñas de Clientes</h1>

    <div class="hero-buttons">
      <a href=" recetas.php" class="no-link">
        <div class="btn-item">
          <img src=" /Panaderia/publics/img/recetasconAmor.png" alt="Recetas" />
          <p>Recetas con Amor</p>
        </div>
      </a>

      <a href=" sobreNosotros.php" class="no-link">
        <div class="btn-item">
          <img src=" /Panaderia/publics/img/sobreNosotros.png" alt="Sobre Nosotros" />
          <p>Sobre Nosotros</p>
        </div>
      </a>

      <div class="btn-item carrito-btn" id="btnCarritoIndex">
        <img src=" /Panaderia/publics/img/carrito.png" alt="Carrito de Compras" />
        <p>Carrito de Compras</p>
      </div>

      <div class="btn-item">
        <img src=" /Panaderia/publics/img/express.png" alt="Pedido Express" />
        <p>Pedido Express</p>
      </div>
    </div>

    <div class="buscador">
      <input type="text" placeholder="Buscar..." />
      <button><img src=" /Panaderia/publics/img/icono-buscar.png" alt="Buscar" /></button>
    </div>
  </header>

  <main>
    <h2 class="titulo-vendidos">Reseñas Recientes</h2>
    <section class="productos" id="listaResenas">
    </section>

    <h2 class="titulo-vendidos">Deja tu Reseña</h2>
    <section class="productos">
      <div class="producto">
        <form id="formResena">
          <div class="info">
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4"
              placeholder="Escribe tu opinión sobre nuestros productos..." required></textarea>

            <label>Calificación:</label>
            <div class="estrellas">
              <input type="radio" id="estrella1" name="calificacion" value="1"><label for="estrella1">★</label>
              <input type="radio" id="estrella2" name="calificacion" value="2"><label for="estrella2">★</label>
              <input type="radio" id="estrella3" name="calificacion" value="3"><label for="estrella3">★</label>
              <input type="radio" id="estrella4" name="calificacion" value="4"><label for="estrella4">★</label>
              <input type="radio" id="estrella5" name="calificacion" value="5"><label for="estrella5">★</label>
            </div>

            <button type="submit" class="btn-submit">Enviar Reseña</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-icons">
      <div class="footer-btn" id="btnContactenosIndex">
        <img src=" /Panaderia/publics/img/contactenos.png" alt="Contáctenos" />
        <p>Contáctenos</p>
      </div>
      <div class="footer-btn" id="btnPreguntasIndex">
        <img src=" /Panaderia/publics/img/preguntas.png" alt="Preguntas" />
        <p>Preguntas</p>
      </div>
      <div class="footer-btn" id="btnResenasIndex">
        <img src=" /Panaderia/publics/img/reseñas.png" alt="Reseñas" />
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

  <script src=" /Panaderia/publics/js/main.js"></script>
</body>

</html>