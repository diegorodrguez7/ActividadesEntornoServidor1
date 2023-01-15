<html>
<head>
    <title>Tarea 1 - Días de cada mes.</title>
</head>
<body>
    <div>
        <h1>DÍAS DE CADA MES</h1>
    </div>
    <div>
        <form action="" method="POST">
            <select name="mes">
                <option disabled selected>Seleciona uno</option>
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Deciembre">Deciembre</option>
            </select>
            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </div>
        </form>
    </div>
    <?php
    $meses = array("Enero" => "31", "Febrero" => "29", "Marzo" => "31", "Abril" => "30", 
    "Mayo" => "31", "Junio" => "30", "Juilo" => "31", "Agosto" => "31", "Septiembre" => "30", 
    "Octubre" => "31", "Noviembre" => "30", "Diciembre" => "31");
    if (isset($_POST["mes"])) {
        echo "<h1>RESULTADO: </h1>";
        echo "Este mes tiene: " . $meses[$_POST["mes"]] . " días.";
    }
    ?>
</body>
</html>