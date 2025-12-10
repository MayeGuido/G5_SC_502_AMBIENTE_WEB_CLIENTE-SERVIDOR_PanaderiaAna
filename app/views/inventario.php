<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inventario | Panadería ANA</title>
    <link rel="stylesheet" href="publics/css/inventario.css">
</head>

<body>

<header class="header-inventario">
    Inventario de Productos <br>
    <a href="app/views/Perfil.php" class="btn-volver">Volver</a>
</header>

<main class="contenedor-inventario">

    <table class="tabla-inventario">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($productos as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>

                    <td>
                        <img src="<?= $p['imagen'] ?>" alt="<?= $p['nombre'] ?>">
                    </td>

                    <td><?= $p['nombre'] ?></td>

                    <td><?= $p['categoria'] ?></td>

                    <td>₡<?= number_format($p['precio'], 2) ?></td>

                    <td><?= $p['existencia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</main>

</body>
</html>