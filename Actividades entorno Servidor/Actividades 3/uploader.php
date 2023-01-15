<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $uploadedfileload = "true";
    $uploadedfile_size = $_FILES['uploadedfile']["size"];
    echo $_FILES["uploadedfile"]["name"];
    if ($_FILES["uploadedfile"]["size"] > 200000) {
        $msg = $msg . "El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
        $uploadedfileload = "false";
    }

    if (!($_FILES["uploadedfile"]["type"] == "image/pjpeg" or $_FILES["uploadedfile"]["type"] == "image/gif")) {
        $msg = $msg . " Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
        $uploadedfileload = "false";
    }

    $file_name = $_FILES[uploadedfile][name];
    $add = "uploads/$file_name";
    if ($uploadedfileload == "true") {

        if (move_uploaded_file($_FILES[uploadedfile][tmp_name], $add)) {
            echo " Ha sido subido satisfactoriamente";
        } else {
            echo "Error al subir el archivo";
        }
    } else {
        echo $msg;
    }
    ?>
</body>

</html>