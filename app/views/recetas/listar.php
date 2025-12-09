<?php
require_once __DIR__ . '/../../controllers/RecetaController.php';
$controller = new RecetaController();
$recetas = $controller->index();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Recetas</title>
    <link rel="stylesheet" href="/Panaderia/publics/css/admin.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<h1>Gestión de Recetas</h1>

<a href="crear.php" class="btn-agregar">+ Agregar Nueva Receta</a>

<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Ingredientes</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($recetas as $r): ?>
        <tr>
            <td><?= $r["id"] ?></td>
            <td><img src="<?= $r["imagen"] ?>" width="80"></td>
            <td><?= $r["nombre"] ?></td>
            <td><?= $r["descripcion"] ?></td>
            <td><?= $r["ingredientes"] ?></td>
            <td>
                <a href="editar.php?id=<?= $r['id'] ?>" class="btn-editar">Editar</a>

                <button class="btn-eliminar"
                    data-id="<?= $r['id'] ?>"
                >Eliminar</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<script>
// Confirmar eliminación
document.querySelectorAll(".btn-eliminar").forEach(btn => {
    btn.addEventListener("click", () => {
        let id = btn.dataset.id;

        Swal.fire({
            title: "¿Eliminar receta?",
            text: "Esta acción no se puede deshacer",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e00064",
            cancelButtonColor: "#555",
            confirmButtonText: "Sí, eliminar"
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = "procesarEliminar.php?id=" + id;
            }
        });
    });
});
</script>

</body>
</html>
