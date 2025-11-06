<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros | Panadería ANA</title>
    <link rel="stylesheet" href="assets/css/nosotros.css">
</head>

<body>

    <header class="top-menu">
        <a href="Perfil.html">
            <div class="icon-item">
                <img src="img/perfil.png" alt="Perfil" width="80">
                <p>Mi Perfil</p>
            </div>
        </a> <a href="pasteleria.html">
            <div class="icon-item">
                <img src="img/pasteleria.png" alt="Pasteleria">
                <p>Pasteleria</p>
            </div>
        </a>
        <a href="reposteria.html">

            <div class="icon-item">
                <img src="img/reposteria.png" alt="Repostería">
                <p>Repostería</p>
            </div>
        </a>
        <a href="panaderia.html">

            <div class="icon-item">
                <img src="img/panderia.png" alt="Panadería">
                <p>Panadería</p>
            </div>
        </a>
        <a href="promociones.html">

            <div class="icon-item">
                <img src="img/promociones.png" alt="Promociones">
                <p>Promociones</p>
            </div>
        </a>
    </header>

    <div class="catalogo-layout">


        <aside class="side-bar">
            <a href="recetas.html">
                <div class="side-item">
                    <img src="img/recetasconAmor.png" alt="Recetas">
                    <p>Recetas<br>con Amor</p>
                </div>
            </a>
            <a href="sobreNosotros.html">
                <div class="side-item">
                    <img src="img/sobreNosotros.png" alt="sobreNosotros">
                    <p>Sobre Nosotros</p>
                </div>
            </a>
            <a href="recetas.html">
                <div class="side-item">
                    <img src="img/carrito.png" alt="Carrito">
                    <p>Carrito de<br>compras</p>
                </div>
            </a>
            <a href="recetas.html">
                <div class="side-item">
                    <img src="img/express.png" alt="Express">
                    <p>Pedido<br>Express</p>
                </div>
            </a>
        </aside>

        <main class="catalogo-container">
            <section class="historia">
                <img src="img/nosotros.jpg" alt="Panadería ANA" class="historia-img">
                <div class="historia-texto">
                    <h1>Nuestra Historia</h1>
                    <p>
                        Panadería y Repostería ANA nació hace más de 10 años en el corazón de San José, Costa Rica,
                        con la misión de ofrecer productos elaborados artesanalmente con ingredientes frescos y
                        un sabor casero incomparable. Cada pan, pastel y galleta está hecho con amor, esfuerzo y
                        dedicación, manteniendo viva la tradición panadera que tanto nos caracteriza.
                    </p>
                </div>
            </section>

            <section class="equipo">
                <h2> Nuestro Equipo</h2>
                <div class="equipo-grid">
                    <div class="equipo-card">
                        <img src="img/equipo1.jpg" alt="Ana">
                        <h4>Ana Rodríguez</h4>
                        <p>Fundadora & Maestra Panadera</p>
                    </div>
                    <div class="equipo-card">
                        <img src="img/equipo2.jpg" alt="Carlos">
                        <h4>Carlos Jiménez</h4>
                        <p>Chef Pastelero</p>
                    </div>
                    <div class="equipo-card">
                        <img src="img/equipo1.jpg" alt="Lucía">
                        <h4>Lucía Torres</h4>
                        <p>Atención al Cliente</p>
                    </div>
                </div>
            </section>

            <section class="extras">
                <h2> Encuéntranos y Conéctate</h2>
                <div class="extras-grid">
                    <div class="extra-card">
                        <img src="img/ubicacion.png" alt="Ubicación">
                        <h4>Ubicación</h4>
                        <p>San José, Costa Rica</p>
                    </div>

                    <div class="extra-card">
                        <img src="img/redes.png" alt="Facebook">
                        <h4>Redes Sociales</h4>
                        <p>@PanaderiaANA</p>
                    </div>

                    <div class="extra-card">
                        <img src="img/compartir.png" alt="Compartir">
                        <h4>Comparte Nuestra Página</h4>
                        <button onclick="navigator.share({title: 'Panadería ANA', url: window.location.href})">
                            Compartir
                        </button>
                    </div>
                </div>
            </section>
        </main>

        <aside class="right-panel">
            <h2>Panadería ANA</h2>
            <a href="index.html">
                <img src="img/logo.png" alt="Logo" class="logo-right">
            </a>
            <p class="texto-vertical">Más de una década compartiendo dulzura</p>
            <div class="contacto">
                <img src="img/telefono.png" alt="Teléfono">
                <p>Contáctenos</p>
            </div>
        </aside>

    </div>

  

    <script src="assets/js/main.js"></script>
</body>

</html>