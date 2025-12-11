<?php
require_once __DIR__ . '/../controllers/PreguntasController.php';

$controller = new PreguntasController();

// Si envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->guardar();
}

$faq = $controller->listarFAQ();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preguntas Frecuentes</title>

  <link rel="stylesheet" href="/G5_SC_502_AMBIENTE_WEB_CLIENTE-SERVIDOR_PanaderiaAna/publics/css/preguntas.css">
  
</head>

<body>

    <!-- Título -->
    <h1 class="titulo-preguntas">Ingrese su pregunta</h1>

    <!-- Mensajes -->
    <?php if (isset($_GET['exito'])): ?>
        <p class="mensaje-exito">¡Tu pregunta fue enviada correctamente!</p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p class="mensaje-error">Ocurrió un error al enviar la pregunta.</p>
    <?php endif; ?>

    <!-- FORMULARIO ESTILIZADO -->
    <form action="" method="POST" class="formulario-preguntas">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" required>

        <label for="pregunta">Pregunta</label>
        <textarea id="pregunta" name="pregunta" rows="5" required></textarea>

        <button type="submit" class="btn-enviar-pregunta">Enviar pregunta</button>
    </form>

    <!-- PREGUNTAS FRECUENTES -->
    <div class="faq">
        <h2 class="faq-titulo">Preguntas Frecuentes</h2>

        <?php foreach ($faq as $item): ?>
            <div class="faq-item">
                <h3><?= htmlspecialchars($item['pregunta']) ?></h3>
                <p><?= htmlspecialchars($item['respuesta']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
