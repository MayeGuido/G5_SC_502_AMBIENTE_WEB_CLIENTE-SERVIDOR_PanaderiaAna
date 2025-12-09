<?php
require_once __DIR__ . '/../../controllers/RecetaController.php';
$controller = new RecetaController();

// Si envió formulario:
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $data = [
        "nombre" => $_POST["nombre"],
        "descripcion" => $_POST["descripcion"],
        "ingredientes" => $_POST["ingredientes"],
        "imagen" => $_POST["imagen"] // aquí pones URL o ruta local
    ];

    $controller->crear($data);

    header("Location: listar.php?msg=creado");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Receta</title>
    <link rel="stylesheet" href="/Panaderia/publics/css/admin.css">
</head>

<body>

<h1>Agregar Receta</h1>

<form method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <label>Ingredientes:</label>
    <textarea name="ingredientes" required></textarea>

    <label>URL de Imagen:</label>
    <input type="text" name="imagen" required>

    <button type="submit" class="btn-agregar">Guardar</button>
    <a href="listar.php" class="btn-volver">Volver</a>

</form>

</body>
</html>
