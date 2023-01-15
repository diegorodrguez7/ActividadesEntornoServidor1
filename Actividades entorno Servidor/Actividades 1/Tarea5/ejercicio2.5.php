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
        <h1>TABLA ELEGIDA: </h1>
        <?php   
           $num1 = $_POST['n1'];
           ?>
           <div>
           <?php  
            echo "Tabla del $num1";
            ?>
            </div>
            <?php
            for ($i =1; $i <= 10; $i++) {
                echo "$num1 x $i = " . ($i * $num1) . "<br>";
            }
            
                   ?>
        </div>
    </body>
</html>
