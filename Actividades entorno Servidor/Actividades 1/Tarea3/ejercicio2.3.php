<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="volver">
        <a href="index.html">Volver</a>
    </div>
    <div class="contenedor">
        <h1>EL RESULTADO ES: </h1>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];

        switch ($op) {
            case "suma":
                echo "La suma de " . $num1 . " mas " . $num2 . " es " . ($num1 + $num2) . ".</br>";
                break;
            case "resta":
                echo "La resta de " . $num1 . " menos " . $num2 . " es " . ($num1 - $num2) . ".</br>";
                break;
            case "multi":
                echo "La multiplicación de " . $num1 . " por " . $num2 . " es " . ($num1 * $num2) . ".</br>";
                break;
            case "division":
                echo "La division de " . $num1 . " entre " . $num2 . " es " . ($num1 / $num2) . ".</br>";
                break;
        }
        ?>
    </div>
</body>
</html>