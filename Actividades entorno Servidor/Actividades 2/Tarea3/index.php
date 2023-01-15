<html>

<head>
    <title>Tarea 3 - Días de cada mes.</title>
</head>

<body>
    <div>
        <h1>VALORES ASOCIATIVOS: </h1>
    </div>
    <?php
    $v[1] = 90;
    $v[30] = 7;
    $v["e"] = 99;
    $v["hola"] = 43;
    foreach ($v as $indice => $valor) {
        echo "El elemento de índice " . $indice . " vale " . $valor . ".<br>";
    }
    ?>

</body>

</html>