<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="volver">
        <a href="index.html">Volver</a>
    </div>
    <div class="cuerpo">
        <h1>ESTADO DE SESIÓN:</h1>

        <?php
        session_start();
        error_reporting(0);
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $control = false;

        $_SESSION['users'] = array(
            array("diego", "1111", "usuario"),
            array("admin", "admin", "admin", "correo@gmail.com"),
            array("admin2", "admin", "admin", "correo@gmail.com"),
            array("admin3", "admin", "admin", "correo@gmail.com"),
            array("admin4", "admin", "admin", "correo@gmail.com")
        );

        $contar = count($_SESSION['users']);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($user) && empty($pass)) {
                echo "No ha introducido credenciales ninguna.";
            } elseif (empty($user)) {
                echo "No ha introducido credenciales de usuario.";
            } elseif (empty($pass)) {
                echo "No ha introducido credenciales de contraseña requeridos.";
            } else {
                echo "";
            }
        }

        function admin($nombre)
        {
            echo "Hola, bievenid@ $nombre, veo que eres ADMINISTRADOR y te voy a permitir ver todos los ejercicios.<br>";
            echo '<a href="listatareas.html"> VER EJERCICIOS </a><br>';
        }
        function usuario($nombre, $array)
        {

            echo "Hola, bievenid@ $nombre, veo que eres USUARIO REGISTRADO por lo que NO te
            voy a permitir ver todo los ejercicios, solamente podrás ver el ejercicio ‘Traductor’<br>";
            echo '<a href="Tarea4/index.php"> VER EJERCICIO </a><br>';
            echo "Si quieres saber más ponte en contacto con: ";
            echo "<table border=1>";
            for ($i = 0; $i < 5; $i++) {
                if ($array[$i][2] == "admin") {
                    echo "<tr>";
                    echo "<th>";
                    echo $array[$i][0];
                    echo "</th>";
                    echo "<td>";
                    echo $array[$i][3];
                    echo "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        }

        if (isset($user) && isset($pass)) {
            for ($i = 0; $i < $contar; $i++) {
                if ($user == $_SESSION['users'][$i][0] && $pass == $_SESSION['users'][$i][1] && $_SESSION['users'][$i][2] == "admin") {
                    admin($_SESSION['users'][$i][0]);
                    $control = true;
                    break;
                } elseif ($user == $_SESSION['users'][$i][0] && $pass == $_SESSION['users'][$i][1] && $_SESSION['users'][$i][2] == "usuario") {
                    usuario($_SESSION['users'][$i][0], $_SESSION['users']);
                    $control = true;
                    break;
                }
            }
            if (!$control) {
                echo "No estás registrado. Redirigiéndote a loguearte.";
                header("refresh:1.5;url=logeo.php");
            }
        }

        ?>
    </div>
</body>

</html>