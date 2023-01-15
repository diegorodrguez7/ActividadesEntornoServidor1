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
        <h1>RESULTADOS: </h1>
        <?php   
           $name = $_POST['nombre'];
           $age = $_POST['edad'];
           $a = 5;
           $num1 = $_POST['num1'];
           $num2 = $_POST['num2'];
           echo "Tu nombre es: " . $name . ". </br>  Tienes " . $age . " años. </br>";
           if  ($num2 == 0) {
            echo "La / de " . $num1 . " entre " . $num2 . " es " . "Infinito" . ".</br>"; 
           }
           else {
           echo "La / de " . $num1 . " entre " . $num2 . " es " . ($num1 / $num2) . ".</br>";
           }
           echo "La + de " . $num1 . " mas " . $num2 . " es " . ($num1 + $num2) . ".</br>";
           echo "La - de " . $num1 . " menos " . $num2 . " es " . ($num1 - $num2) . ".</br>";
           echo "La * de " . $num1 . " por " . $num2 . " es " . ($num1 * $num2) . ".</br>";
           echo "En cinco años tendrás " . ($age + $a) . ".</br>";
                   ?>
        </div>
    </body>
</html>
