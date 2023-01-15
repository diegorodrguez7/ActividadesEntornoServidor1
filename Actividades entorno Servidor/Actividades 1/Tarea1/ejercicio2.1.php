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
        
           $n = $_POST['numero'];
           if (($n % 2) == 0) {
            echo "$n es par";
           }
           else {
            echo "$n es impar";
        };
        ?>
        </div>
    </body>
</html>
