<html>

<head>
    <title>Tarea 4 - Diccionario</title>
</head>

<body>
    <div>
        <h1>DICCIONARIO ESPAÑOL[INGLÉS, FRANCÉS, ITALIANO]</h1>
    </div>
    <div>
        <form action="" method="POST">
            <table border=1>
                <tr>
                    <td>
                        Elige el día a traducir -->
                    </td>
                    <td>
                        Lunes<input type="radio" name="dia" value=0><br>
                        Martes<input type="radio" name="dia" value=1><br>
                        Miércoles<input type="radio" name="dia" value=2><br>
                        Jueves<input type="radio" name="dia" value=3><br>
                        Viernes<input type="radio" name="dia" value=4><br>
                        Sábado<input type="radio" name="dia" value=5><br>
                        Domingo<input type="radio" name="dia" value=6>
                    </td>
                </tr>
                <tr>
                    <td>
                        Indique el idioma -->
                    </td>
                    <td>
                        INGLÉS<input type="radio" name="idioma" value="Ingles"><br>
                        FRANCÉS<input type="radio" name="idioma" value="Francés"><br>
                        ITALIANO<input type="radio" name="idioma" value="Italiano">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div>
                            <input type="submit" value="Enviar">
                            <input type="reset" value="Borrar">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    error_reporting(0);

    $dia = $_POST["dia"];
    $idioma = $_POST["idioma"];
    $dias = array("lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    $diccionario = array(
        array("Ingles" => "Monday", "Francés" => "lundi", "Italiano" => "Lunedì"),
        array("Ingles" => "Tuesday", "Francés" => "Mardi", "Italiano" => "Martedì"),
        array("Ingles" => "Wednesday", "Francés" => "Mercredi", "Italiano" => "Mercoleì"),
        array("Ingles" => "Thursday", "Francés" => "Jeudi", "Italiano" => "Giovedì"),
        array("Ingles" => "Friday", "Francés" => "Vendredi", "Italiano" => "Venerdí"),
        array("Ingles" => "Saturday", "Francés" => "Samedi", "Italiano" => "Sabato"),
        array("Ingles" => "Sunday", "Francés" => "Dimanche", "Italiano" => "Domenica")
    );
    if (isset($dia) && isset($idioma)) {
        echo "El día ".$dias[$dia]." en " . $idioma . " se traduce a " . $diccionario[$dia][$idioma];
    }

    ?>
</body>

</html>