
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Header del Formulario</title>
</head>

<body>
    <header>
        <h1 style="text-align: center;">FORMULARIO</h1>
        <?php
        setlocale(LC_TIME, 'es_ES.UTF-8');
        // echo 'Después de setlocale es_ES.UTF-8 date devuelve: '.date("l, d-m-Y (H:i:s)", $miFecha).'<br/>';
        // echo strftime("%A, %d de %B de %Y");
        // setlocale(LC_TIME, 'es_CO.UTF-8');
        echo "<h1 style='text-align: center;'>".date('l d \d\e F \d\e Y')."</h1>";
        ?>
    </header>
