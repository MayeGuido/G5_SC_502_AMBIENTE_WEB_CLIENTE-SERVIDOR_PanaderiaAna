<?php
require_once __DIR__ . '/../controllers/ContactenosController.php';

// Cuando se envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ContactenosController();
    $controller->enviar();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contáctenos</title>

    <!-- Nuevo CSS Premium -->
    <link rel="stylesheet" href="/G5_SC_502_AMBIENTE_WEB_CLIENTE-SERVIDOR_PanaderiaAna/publics/css/contactenos.css">
    <!-- Fuente Poppins (opcional para mejor estilo) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- TÍTULO PRINCIPAL -->
    <h1 class="titulo-contacto">Contáctenos</h1>

    <!-- INFORMACIÓN DE CONTACTO -->
    <div class="info-contacto">
        <h2>Información de Contacto</h2>

        <p><strong>📧 Correo:</strong> panaderiaana@gmail.com</p>
        <p><strong>📞 Teléfono:</strong> +506 8888-8888</p>
        <p>Estamos disponibles para ayudarte con cualquier consulta.</p>
    </div>

    <!-- MENSAJES -->
    <?php if (isset($_GET['exito'])): ?>
        <p class="mensaje-exito">¡Mensaje enviado correctamente!</p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p class="mensaje-error">No se pudo enviar el mensaje, inténtelo nuevamente.</p>
    <?php endif; ?>

    <!-- FORMULARIO PREMIUM -->
    <form action="" method="POST" class="formulario-contacto">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" required>

        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" rows="6" required></textarea>

        <button type="submit" class="btn-enviar">Enviar mensaje</button>
    </form>

</body>
</html>
