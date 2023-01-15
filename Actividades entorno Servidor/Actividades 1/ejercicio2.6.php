<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/stylephp.css">
</head>
<body>
    <div class="volver">
        <a href="index.html">Volver</a>
    </div>
    <div class="cuerpo">
        <h1>ESTADO DE SESIÓN:</h1>
        <?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == 'diego') {
            if ($pass == '1111') {
                header("location: lista.html");
            } else {
                echo "La contraseña es incorrecta.";
            }
        } else {
            echo "El usuario es incorrecto.";
        }

        ?>
    </div>
</body>

</html>