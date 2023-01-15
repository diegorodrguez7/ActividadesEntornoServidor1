<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>REGISTRARSE: </h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="user" value="user">
        <input type="password" name="pass" value="pass">
        <input type="submit" value="Entrar">
        <input type="reset" value="Borrar">
    </form>
    <?php
    session_start();
    error_reporting(1);

    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $listado = $_SESSION["users"];
    $nuevoUsuario = array($user, $pass, "usuario");

    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        if (array_push($listado, $nuevoUsuario)) {

            session_destroy();
            header("refresh:4;url=index.html");
        }
    }

    ?>
</body>

</html>