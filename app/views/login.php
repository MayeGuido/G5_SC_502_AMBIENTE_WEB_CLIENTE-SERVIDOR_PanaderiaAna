<?php
session_start();
if (isset($_SESSION['error'])) {
    echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Panaderia/publics/css/registro.css" />
</head>

<body>

</body>
<div class="login">

    <div class="login-container">
        <div class="logo-container">
            <a href="/Panaderia/index.php">
                <img src="/Panaderia/publics/img/logo_registro.png" alt="Logo">
            </a>
        </div>
        <h4>LOGIN</h4>

        <form action="/Panaderia/app/controllers/LoginController.php" method="POST">
            <div>
                <label class="labels">Correo electrónico</label>
                <input class="inputs" type="email" name="correo" required placeholder="anabakery@gmail.com">
            </div>

            <div>
                <label class="labels">Contraseña</label>
                <input class="inputs" type="password" name="password" required placeholder="******">
            </div>

            <div class="h3-container">
                <h3><a href="registro.php">Sign up</a></h3>
            </div>

            <div class="button">
                <button type="submit" class="button">Log in</button>
            </div>
        </form>

    </div>














</html>