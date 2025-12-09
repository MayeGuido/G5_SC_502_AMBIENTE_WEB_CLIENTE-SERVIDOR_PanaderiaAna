<?php
require_once __DIR__ . '/../../controllers/RecetaController.php';
$controller = new RecetaController();

$id = $_GET["id"];
$receta = $controller->ver($id);

if (!$receta) {
    die("Receta no encontrada");
}

// procesar actualización
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $data = [
        "nombre" => $_POST["nombre"],
        "descripcion" => $_POST["descripcion"],
        "ingredientes" => $_POST["ingredientes"],
        "imagen" => $_POST["imagen"]
    ];

    $controller->actualizar($id, $data);

    header("Location: listar.php?msg=actualizado");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Receta</title>
    <link rel="stylesheet" href="/Panaderia/publics/css/admin.css">
</head>

<body>

<h1>Editar Receta</h1>

<form method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $receta['nombre'] ?>" required>

    <label>Descripción:</label>
    <textarea name="descripcion"><?= $receta['descripcion'] ?></textarea>

    <label>Ingredientes:</label>
    <textarea name="ingredientes"><?= $receta['ingredientes'] ?></textarea>

    <label>URL de Imagen:</label>
    <input type="text" name="imagen" value="<?= $receta['imagen'] ?>" required>

    <button type="submit" class="btn-editar">Actualizar</button>
    <a href="listar.php" class="btn-volver">Volver</a>

</form>

</body>
</html>
