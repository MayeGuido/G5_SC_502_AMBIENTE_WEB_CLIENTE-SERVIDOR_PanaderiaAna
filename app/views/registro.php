<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Panadería ANA</title>

    <!-- RUTA CORRECTA AL CSS -->
    <link rel="stylesheet" href="../..//publics/css/registro.css">
</head>

<body>

    <div class="registro">

        <div class="registro-container">

            <div class="logo-container">
                <a href="../..//index.php">
                    <img src="../..//publics/img/logo_registro.png" alt="Logo">
                </a>
            </div>

            <h4>SIGN UP</h4>

            <form id="form">

                <div>
                    <label class="labels">Nombre Completo</label>
                    <input class="inputs" type="text" placeholder="Name">
                </div>

                <div>
                    <label class="labels">Usuario</label>
                    <input class="inputs" type="text" placeholder="User">
                </div>

                <div>
                    <label class="labels">Correo</label>
                    <input class="inputs" type="email" placeholder="Email">
                </div>

                <div>
                    <label class="labels">Contraseña</label>
                    <input class="inputs" type="password" placeholder="Password">
                </div>

                <div>
                    <label class="labels">Teléfono</label>
                    <input class="inputs" type="text" placeholder="8569-1475">
                </div>

                <div>
                    <label class="labels">Dirección</label>
                    <input class="inputs" type="text" placeholder="Address">
                </div>

                <div class="button">
                    <button type="button" class="button" onclick="window.location.href='../../index.php'">
                        Sign up
                    </button>
                </div>

            </form>

        </div>

    </div>

</body>
</html>
