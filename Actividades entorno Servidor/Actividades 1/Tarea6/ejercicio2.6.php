<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylephp.css">
</head>
    <body>
        <div class="volver">
        <a href="index.html">Volver</a>
        </div>
        <div class="contenedor">
        <h1>EL RESULTADO ES: </h1>
        <?php   
        $ncol = $_POST['columnas'];
        $nfil = $_POST['filas'];
        $ni = $_POST['numElegido'];
        $inter = $_POST['intervalo'];

         echo "<table border='4' style='background-color:#ccc;border-collapse:collapse;border:2px solid #243939;color:#243939;width:400'>";
        for ($i = 1; $i <= $ncol ; $i++) {
            echo "<tr>";
             for ($f =1; $f <= $nfil; $f++) {
                echo"<td> $ni </td>";
                $ni+=$inter;
             }   
             echo "</tr>";
        }
        echo "</table>";
                   ?>
        </div>
    </body>
</html>
