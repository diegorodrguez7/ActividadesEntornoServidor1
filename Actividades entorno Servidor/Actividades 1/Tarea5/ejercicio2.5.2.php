<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylephp2.css">
</head>
<body>
    <div class="volver">
        <a href="index.html">Volver</a>
    </div>
    <h1>TODAS LAS TABLAS: </h1>
    <?php
    echo "<div class='flexboxCajasUnion'>";
    for ($e = 1; $e <= 10; $e++) {
        echo "<div class='contenedor'>";
    ?>
        <div class="estiloTabla">
            <?php
            echo "Tabla del $e </br>";
            ?>
        </div>
    <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "$e x $i = " . ($i * $e) . "<br>";
        }
        echo "</div>";
    }
    echo "</div>"
    ?>

</body>
</html>