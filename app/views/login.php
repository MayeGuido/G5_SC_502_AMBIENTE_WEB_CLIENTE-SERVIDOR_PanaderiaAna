<?php
session_start();
$mensajeError = "";

if (isset($_SESSION['error'])) {
    $mensajeError = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Panadería ANA</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../publics/css/registro.css">

    <!-- POPUP STYLE -->
    <style>
        .popup-bg {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            width: 320px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            animation: popupAnim 0.25s ease-out;
        }

        @keyframes popupAnim {
            from { transform: scale(0.7); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .popup-box h3 {
            color: red;
            margin-bottom: 15px;
        }

        .popup-btn {
            background-color: #ff5050;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            margin-top: 10px;
        }

        .popup-btn:hover {
            background-color: #e64545;
        }
    </style>
</head>

<body>

    <!-- POPUP -->
    <div class="popup-bg" id="popupError">
        <div class="popup-box">
            <h3>Error</h3>
            <p id="popupMensaje"></p>
            <button class="popup-btn" onclick="cerrarPopup()">Cerrar</button>
        </div>
    </div>

    <div class="login">
        <div class="login-container">

            <!-- LOGO -->
            <div class="logo-container">
                <a href="../../index.php">
                    <img src="../../publics/img/logo_registro.png" alt="Logo">
                </a>
            </div>

            <h4>LOGIN</h4>

            <!-- FORMULARIO -->
            <form action="../../app/controllers/LoginController.php" method="POST">

                <div>
                    <label class="labels">Correo electrónico</label>
                    <input class="inputs" type="email" name="correo" required placeholder="ejemplo@gmail.com">
                </div>

                <div>
                    <label class="labels">Contraseña</label>
                    <input class="inputs" type="password" name="password" required placeholder="******">
                </div>

                <!-- BOTÓN SIGN UP -->
                <div class="button" style="margin-top: 20px;">
                    <button type="button" class="button" onclick="window.location.href='registro.php'">
                        Sign up
                    </button>
                </div>

                <!-- BOTÓN LOGIN -->
                <div class="button" style="margin-top: 15px;">
                    <button type="submit" class="button">Log in</button>
                </div>

            </form>

        </div>
    </div>

    <!-- POPUP SCRIPT -->
    <script>
        let error = <?= json_encode($mensajeError); ?>;

        if (error && error.trim() !== "") {
            document.getElementById("popupMensaje").textContent = error;
            document.getElementById("popupError").style.display = "flex";
        }

        function cerrarPopup() {
            document.getElementById("popupError").style.display = "none";
        }
    </script>

</body>

</html>
