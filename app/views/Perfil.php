<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil del Usuario | Panadería ANA</title>
    <link rel="stylesheet" href="publics/css/Perfil.css" />
</head>

<body>
    <header class="perfil-header">
        <img src="publics/img/logo.png" alt="Logo" class="logo" />
        <h1>Perfil del Usuario</h1>
        <a href="index.php" class="btn-home"><img src="publics/img/inicio.png" alt="" width="30px"></a>
    </header>

    <main class="perfil-container">
        <aside class="perfil-menu">
            <h2>Mi Panel</h2>
            <ul>
                <li data-section="favoritos"> Favoritos</li>
                <li data-section="pedidos"> Pedidos</li>
                <li data-section="carrito"> Carrito</li>
                <li data-section="metodosPago"> Métodos de Pago</li>
                <li data-section="historialPagos"> Historial</li>
                <li data-section="productos"> Productos</li>
                <li data-section="inventario"> Inventario</li>
                <li data-section="admin"> Administración</li>
                <li data-section="contacto"> Contacto y Soporte</li>
            </ul>
        </aside>

        <section class="perfil-contenido" id="perfil-contenido">
            <h2>Bienvenido(a) a tu perfil</h2>
            <p>Selecciona una opción del menú para comenzar a gestionar tu cuenta.</p>
            <img src="publics/img/fondo.png" alt="Decoración" class="decor-img" />
        </section>


        <section id="favoritos" class="perfil-section" style="display:none;">
            <div class="favoritos-container">
                <h1 class="titulo-fav"> Tus Favoritos</h1>
                <div class="fav-grid">
                    <div class="fav-card">
                        <img src="publics/img/trensa_dulce.png" alt="Trenza dulce" class="fav-img" />
                        <div class="fav-info">
                            <h3>Trenza dulce</h3>
                            <p>Deliciosa trenza elaborada con masa suave y crema pastelera.</p>
                            <p class="precio">₡2,000</p>
                            <div class="botones">
                                <button class="btn-fav eliminar"> Eliminar</button>
                                <button class="btn-fav comprar"> Añadir al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="metodosPago" class="perfil-section" style="display:none;">
            <div class="metodo-pago-container">
                <h2 class="titulo-pago"> Métodos de Pago</h2>
                <div class="tarjetas-pago">
                    <div class="metodo-card">
                        <img src="publics/img/Tarjeta.png" alt="Pago con tarjeta" class="img-metodo" />
                        <h3>Pago con Tarjeta</h3>
                        <button class="btn-pago" data-metodo="Tarjeta">Seleccionar</button>
                    </div>
                    <div class="metodo-card">
                        <img src="publics/img/sinpe-movil.png" alt="Pago por SINPE" class="img-metodo" />
                        <h3>SINPE Móvil</h3>
                        <button class="btn-pago" data-metodo="SINPE">Seleccionar</button>
                    </div>
                    <div class="metodo-card">
                        <img src="publics/img/Efectivo.png
                        " alt="Pago en efectivo" class="img-metodo" />
                        <h3>Pago en Efectivo</h3>
                        <button class="btn-pago" data-metodo="Efectivo">Seleccionar</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="historialPagos" class="perfil-section" style="display:none;">
            <div class="historial-container">
                <h2 class="titulo-historial"> Historial de Pagos</h2>
                <div class="historial-lista">
                    <div class="historial-card">
                        <p><strong>Fecha:</strong> 03/11/2025</p>
                        <p><strong>Método:</strong> Tarjeta de Crédito</p>
                        <p><strong>Monto:</strong> ₡5,000</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="productos" class="perfil-section" style="display:none;">
            <div class="inventario-container">
                <h2 class="titulo-inventario"> Productos</h2>
                <div class="producto-card">
                    <img src="publics/assets/img/galleta.png" alt="Galleta" />
                    <h3>Galletas con Chips</h3>
                    <p>Deliciosas galletas artesanales con trocitos de chocolate.</p>
                    <p class="precio">₡1,200</p>
                </div>
            </div>
        </section>

        <div id="carrito" class="perfil-section">
            <main class="carrito-layout">
                <section class="carrito-izquierda">
                    <div class="carrito-header">
                        <h1> Carrito de Compras</h1>
                    </div>

                    <div class="carrito-productos">
                        <div class="producto">
                            <div class="imagen"><img src="publics/img/pizzita.png"></div>
                            <div class="info">
                                <p class="nombre">Pizzita</p>
                                <p class="precio">₡1000</p>
                                <div class="cantidad">
                                    <button class="btn-up">+</button>
                                    <span>1</span>
                                    <button class="btn-down">-</button>
                                </div>
                            </div>
                        </div>

                        <div class="producto">
                            <div class="imagen"><img src="publics/img/tresleches.png"></div>
                            <div class="info">
                                <p class="nombre">Tres leches</p>
                                <p class="precio">₡1200</p>
                                <div class="cantidad">
                                    <button class="btn-up">+</button>
                                    <span>1</span>
                                    <button class="btn-down">-</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="resumen-compra">
                        <button class="btn-comprar">Comprar (2 productos) – Total ₡2200</button>
                    </div>
                </section>

                <aside class="carrito-derecha">
                    <div class="overlay">
                        <h2>Recetas con Amor</h2>
                        <img src="publics/img/logo.png" alt="Logo" class="logo">
                        <p class="texto-vertical">
                            Más de 10 años de pasión, esfuerzo y dulzura en cada creación 
                        </p>
                    </div>
                </aside>
            </main>
        </div>

        <div id="pedidos" class="perfil-section">
            <div class="pedidos-wrapper">
                <h1 class="titulo-pedidos"> Gestión de Pedidos</h1>

                <table class="tabla-pedidos">
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Cliente</th>
                            <th>Productos</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#001</td>
                            <td>María López</td>
                            <td>Dona, Baguette</td>
                            <td>₡1500</td>
                            <td><span class="estado pendiente">Pendiente</span></td>
                            <td><button class="btn-actualizar"> Actualizar</button></td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>Carlos Jiménez</td>
                            <td>Pastel de Chocolate</td>
                            <td>₡2000</td>
                            <td><span class="estado entregado">Entregado</span></td>
                            <td><button class="btn-editar"> Editar</button></td>
                        </tr>
                        <tr>
                            <td>#003</td>
                            <td>Andrea Ramírez</td>
                            <td>Tamal asado</td>
                            <td>₡600</td>
                            <td><span class="estado en-proceso">En proceso</span></td>
                            <td><button class="btn-ver"> Ver</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


       
        <section id="inventario" class="perfil-section" style="display:none;">
            <h2 class="titulo-inventario"> Registro de Inventario</h2>
            <form class="form-registroInventario">
                <label for="codigo">Código del producto</label>
                <input type="text" id="codigo" placeholder="Ej: 89s74" />
                <button type="submit" class="button">Registrar producto</button>
            </form>
        </section>

        
        <div id="admin" class="perfil-section">
            <div class="admin-wrapper">
                <h1 class="titulo-admin"> Panel de Administración</h1>

                <div class="admin-grid">
                    <div class="admin-card">
                        <img src="publics/img/gestionUsuarios.png" alt="Gestión de usuarios" class="admin-icon">
                        <h3>Gestión de Usuarios</h3>
                        <p>Administra los usuarios del sistema, agrega nuevos y gestiona sus permisos y roles.</p>
                        <button class="btn-admin usuarios"> Entrar</button>
                    </div>

                    <div class="admin-card">
                        <img src="publics/img/gestionProductos.png" alt="Gestión de productos" class="admin-icon">
                        <h3>Gestión de Productos</h3>
                        <p>Agrega, modifica o elimina productos del inventario y mantén actualizado el catálogo.</p>
                        <button class="btn-admin productos"> Entrar</button>
                    </div>

                    <div class="admin-card">
                        <img src="publics/img/reporteVentas.png" alt="Reportes de ventas" class="admin-icon">
                        <h3>Reportes de Ventas</h3>
                        <p>Consulta las estadísticas y resultados de ventas por día, semana o mes.</p>
                        <button class="btn-admin reportes"> Ver Reportes</button>
                    </div>

                    <div class="admin-card">
                        <img src="publics/img/configuracion.png" alt="Configuración del sistema" class="admin-icon">
                        <h3>Configuración del Sistema</h3>
                        <p>Ajusta parámetros generales, seguridad, apariencia y funcionamiento del sistema.</p>
                        <button class="btn-admin configuracion"> Configurar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="admin-usuarios" class="admin-subseccion perfil-section">
            <button class="btn-volver"> Volver</button>
            <h2> Gestión de Usuarios</h2>
            <p>Lista de usuarios registrados en el sistema:</p>
            <table class="tabla-admin">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Ana Rodríguez</td>
                        <td>ana@gmail.com</td>
                        <td>Admin</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="admin-productos" class="admin-subseccion perfil-section">
            <button class="btn-volver"> Volver</button>
            <h2> Gestión de Productos</h2>
            <p>Agrega, modifica o elimina productos del inventario.</p>
        </div>

        <div id="admin-reportes" class="admin-subseccion perfil-section">
            <button class="btn-volver"> Volver</button>
            <h2> Reportes de Ventas</h2>
            <p>Resumen mensual de ventas.</p>
        </div>

        <div id="admin-config" class="admin-subseccion perfil-section">
            <button class="btn-volver">⬅ Volver</button>
            <h2> Configuración del Sistema</h2>
            <p>Ajusta parámetros del sistema.</p>
        </div>

        <div id="contacto" class="perfil-section">
            <div class="contacto-container">
                <h1 class="titulo-contacto"> Contacto y Soporte</h1>

                <div class="contacto-grid">
                    <div class="contacto-form">
                        <h2>Formulario de Contacto</h2>
                        <form id="form-contacto">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" required>

                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" required>

                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" rows="5" required></textarea>

                            <button type="submit" class="btn-enviar"> Enviar mensaje</button>
                        </form>
                    </div>

                    <div class="contacto-info">
                        <h2>Otras formas de contacto</h2>
                        <p><strong> Dirección:</strong> Cartago, Costa Rica</p>
                        <p><strong> Teléfono:</strong> +506 8888-7777</p>
                        <p><strong> Email:</strong> soporte@panaderiaana.com</p>

                        <div class="botones-contacto">
                            <a href="https://wa.me/50688887777" target="_blank" class="btn-whatsapp"> WhatsApp</a>
                            <a href="mailto:soporte@panaderiaana.com" class="btn-email"> Correo</a>
                        </div>

                        <div class="mapa">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.2395406569595!2d-83.919444!3d9.863611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3d56dabcdd1%3A0x5b4e6f80b19e25d3!2sCartago!5e0!3m2!1ses!2scr!4v1700000000000!5m2!1ses!2scr"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="perfil-footer">
        <p>Panadería y Repostería ANA © 2025 — Hecho con amor </p>
    </footer>

    <script src="publics/js/perfil.js"></script>

    <script src="publics/js/admin.js"></script>
</body>

</html>