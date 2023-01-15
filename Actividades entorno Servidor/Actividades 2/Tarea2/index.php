<html>

<head>
    <title>Tarea 2 - Cuántos Pares</title>
</head>

<body>
    <div>
        <h1>CUÁNTOS PARES</h1>
    </div>
    <div>
        <form action="" method="POST">
            <input type="number" name="pares" value="" placeholder="Introduce la cantidad de pares: ">
            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </div>
        </form>
    </div>
    <?php
    $numeros = array("0", "2", "4", "6", "8", "10", "12", "14", "16", "18", "20", "22", "24", "26", "28");

    if (isset($_POST["pares"])) {
        if ($_POST["pares"] <= 15) {
            $arrlength = $_POST["pares"];
            for ($x = 0; $x < $arrlength; $x++) {
                echo "En la posición " . $x . " está el valor: " . $numeros[$x] . ".<br>";
            }
        } else {
            echo "Solo está disponible hasta el 15.";
        }
    }

    ?>
</body>

</html>