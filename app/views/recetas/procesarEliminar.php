<?php
require_once __DIR__ . '/../../controllers/RecetaController.php';

$controller = new RecetaController();

$id = $_GET["id"];
$controller->eliminar($id);

header("Location: listar.php?msg=eliminado");
exit;
