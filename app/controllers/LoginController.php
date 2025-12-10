<?php
session_start();
require_once __DIR__ . '../../models/UsuarioModel.php';

$model = new UsuarioModel();

$correo = $_POST['correo'] ?? '';
$password = $_POST['password'] ?? '';

if ($correo === '' || $password === '') {
    $_SESSION['error'] = "Debe completar todos los campos.";
    header("Location: ../../app/views/login.php");
    exit;
}

$usuario = $model->buscarPorCorreo($correo);

if (!$usuario || $usuario['password'] !== $password) {
    $_SESSION['error'] = "Credenciales incorrectas.";
    header("Location: ../../app/views/login.php");
    exit;
}

$_SESSION['usuario_id'] = $usuario['id'];
$_SESSION['usuario_nombre'] = $usuario['nombre'];
$_SESSION['usuario_rol'] = $usuario['rol'];

header("Location: ../../index.php");
exit;
