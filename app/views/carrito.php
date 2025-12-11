<?php
session_start();

require_once __DIR__ . '/../controllers/CarritoController.php';
require_once __DIR__ . '/../controllers/PedidosController.php';

$carritoController = new CarritoController();
$pedidosController = new PedidosController();

$accion       = $_GET['accion'] ?? ($_POST['accion'] ?? null);
$idProducto   = $_GET['id'] ?? ($_POST['id'] ?? null);
$mensajeExito = '';
$mensajeError = '';

try {
    switch ($accion) {
        case 'agregar':
            if ($idProducto) {
                $cantidad = isset($_POST['cantidad']) ? (int)$_POST['cantidad'] : 1;
                $carritoController->agregarProducto($idProducto, $cantidad);
            }
            break;

        case 'eliminar':
            if ($idProducto) {
                $carritoController->eliminarProducto($idProducto);
            }
            break;

        case 'actualizar':
            if (!empty($_POST['cantidades']) && is_array($_POST['cantidades'])) {
                foreach ($_POST['cantidades'] as $id => $cant) {
                    $carritoController->actualizarCantidad($id, $cant);
                }
            }
            break;

        case 'vaciar':
            $carritoController->vaciar();
            break;

        case 'crear_pedido':
            $itemsCarrito = $carritoController->obtenerCarrito();
            if (empty($itemsCarrito)) {
                throw new Exception('No puede generar un pedido con el carrito vacío.');
            }

            $datosCliente = [
                'nombre_cliente' => $_POST['nombre_cliente'] ?? '',
                'telefono'       => $_POST['telefono'] ?? '',
                'direccion'      => $_POST['direccion'] ?? ''
            ];

            $usuarioId = $_SESSION['usuario_id'] ?? null;

            $pedidoId = $pedidosController->guardarPedido($datosCliente, $itemsCarrito, $usuarioId);
            $carritoController->vaciar();

            $mensajeExito = "¡Gracias! Su pedido #{$pedidoId} fue registrado correctamente.";
            break;
    }
} catch (Exception $e) {
    $mensajeError = $e->getMessage();
}

$items = $carritoController->obtenerCarrito();
$total = $carritoController->calcularTotal();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de compras - Panadería ANA</title>
    <link rel="stylesheet" href="../../publics/css/styles.css">
</head>

<body>

<header class="hero">
    <a href="../../index.php" class="no-link">
        <img src="../../publics/img/logo.png" alt="Logo" class="logo" />
    </a>
    <h1 style="color:white;">Carrito de compras</h1>
</header>

<main class="contenedor" style="max-width: 900px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 15px;">

<?php if ($mensajeExito): ?>
    <p style="color: green; font-weight:bold;"><?= htmlspecialchars($mensajeExito) ?></p>
<?php endif; ?>

<?php if ($mensajeError): ?>
    <p style="color: red; font-weight:bold;"><?= htmlspecialchars($mensajeError) ?></p>
<?php endif; ?>

<?php if (empty($items)): ?>
    <p>El carrito está vacío.</p>
    <p><a href="panaderia.php">Volver al catálogo de Panadería</a></p>

<?php else: ?>

<form action="carrito.php" method="post">
    <input type="hidden" name="accion" value="actualizar">

    <table border="0" width="100%" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio (₡)</th>
                <th>Cantidad</th>
                <th>Subtotal (₡)</th>
                <th>Quitar</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td>
                    <img src="../../<?= htmlspecialchars($item['imagen']) ?>" alt="" style="width:60px; vertical-align:middle;">
                    <?= htmlspecialchars($item['nombre']) ?>
                </td>

                <td><?= number_format($item['precio'], 2) ?></td>

                <td>
                    <input type="number"
                        name="cantidades[<?= (int)$item['id'] ?>]"
                        value="<?= (int)$item['cantidad'] ?>"
                        min="1"
                        style="width:60px;">
                </td>

                <td><?= number_format($item['precio'] * $item['cantidad'], 2) ?></td>

                <td>
                    <a href="carrito.php?accion=eliminar&id=<?= (int)$item['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p style="text-align:right; font-size:18px; margin-top:10px;">
        <strong>Total: ₡<?= number_format($total, 2) ?></strong>
    </p>

    <div style="display:flex; justify-content:space-between; margin-top:15px;">
        <button type="submit">Actualizar cantidades</button>
        <a href="carrito.php?accion=vaciar" style="color:red;">Vaciar carrito</a>
    </div>
</form>

<hr style="margin:25px 0;">

<h2>Datos para el pedido</h2>

<form action="carrito.php" method="post">
    <input type="hidden" name="accion" value="crear_pedido">

    <label>Nombre completo</label><br>
    <input type="text" name="nombre_cliente" required style="width:100%; margin-bottom:10px;"><br>

    <label>Teléfono</label><br>
    <input type="text" name="telefono" required style="width:100%; margin-bottom:10px;"><br>

    <label>Dirección de entrega</label><br>
    <textarea name="direccion" rows="3" required style="width:100%;"></textarea><br><br>

    <button type="submit">Confirmar pedido</button>
</form>

<?php endif; ?>

</main>

<footer class="footer">
    <p>Panadería y Repostería ANA &copy; <?= date('Y') ?></p>
</footer>

</body>
</html>
