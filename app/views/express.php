<?php
require_once __DIR__ . '/../controllers/ExpressController.php';

$controller = new ExpressController();
$productos = $controller->listarProductos();
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cliente = $_POST['cliente'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $producto_id = $_POST['producto_id'];
    $cantidad = $_POST['cantidad'];

    if ($controller->guardarPedidoExpress($cliente, $telefono, $direccion, $producto_id, $cantidad)) {
        $mensaje = "¡Pedido Express enviado correctamente!";
    } else {
        $mensaje = "Error al enviar el pedido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pedido Express | Panadería ANA</title>

    <link rel="stylesheet" href="../../publics/css/express.css">
</head>

<body>

<header class="express-header">
    <a href="../../index.php">
        <img src="../../publics/img/logo.png" class="logo">
    </a>
    <h1>Pedido Express</h1>
</header>

<main class="express-container">

    <?php if (!empty($mensaje)): ?>
        <p class="mensaje"><?= $mensaje ?></p>
    <?php endif; ?>

    <form class="express-form" method="POST">

        <h2>Datos del Cliente</h2>

        <label>Nombre completo:</label>
        <input type="text" name="cliente" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required>

        <label>Dirección:</label>
        <textarea name="direccion" required></textarea>

        <h2>Seleccionar Producto</h2>

        <label>Producto:</label>
        <select name="producto_id" required>
            <option value="">Seleccione un producto</option>
            <?php foreach ($productos as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= $p['nombre'] ?> - ₡<?= number_format($p['precio'], 2) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" min="1" value="1" required>

        <button type="submit" class="btn-enviar">Realizar Pedido Express</button>

    </form>

    <aside class="express-side">
        <h2>Servicio Express</h2>
        <p>Entrega rápida directo a tu hogar.</p>
        <img src="../../publics/img/express.png" class="side-img">
        <p>Disponible todos los días de 7 a.m. a 8 p.m.</p>
    </aside>

</main>

</body>
</html>
