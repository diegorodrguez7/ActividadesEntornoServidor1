<?php
error_reporting(0);
include('Cabecera_Footer/cabecera.inc');
include('Variables/variables.php');

//FUNCIÓN PARA LIMPIAR TEXTO
function limpiar($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//NOMBRE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = limpiar($_POST["nombre"]);
    if (empty($nombre)) {
        $nombreError = "<p style='color:red'>*NOMBRE REQUERIDO.</p>";
        echo "<br>";
    } else {
        $nombrePasa = "<p>Tu nombre es: " . $nombre . "</p>";
        echo "<br>";
    }
}

//APELLIDOS
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $apellidos = limpiar($_POST["apellidos"]);
    if (empty($apellidos)) {
        $apellidosError = "<p style='color:red;'>*APELLIDOS REQUERIDOS.</p>";
        echo "<br>";
    } else {
        $apellidosPasa =  "<p>Tus apellidos son: " . $apellidos . "</p>";
        echo "<br>";
    }
}

//EDAD
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = limpiar($_POST["edad"]);
    if (empty($edad)) {
        $edadError = "<p style='color:red;'>*EDAD REQUERIDA.</p>";
        echo "<br>";
    } else {
        $edadPasa =  "<p>Tu edad es: " . $edad . " años.</p>";
        echo "<br>";
    }
}

//CORREO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = limpiar($_POST["correo"]);
    $correoDos = limpiar($_POST["correoDos"]);
    if (!empty($correo) && !empty($correoDos) && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        if ($correo == $correoDos) {
            $correoPasa =  "<p>Tu correo es: " . $correo . "</p>";
            echo "<br>";
        } else {
            $correoError = "<p style='color:red;'>*CAMPOS NO IGUALES.</p>";
            echo "<br>";
        }
    } else {
        $correoError = "<p style='color:red;'>*CORREO REQUERIDO.</p>";
        echo "<br>";
    }
}

//NOTIFICACIONES
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $notificaciones = limpiar($_POST["notificaciones"]);
    if (empty($notificaciones)) {
        $notificacionesError =  "<p style='color:red;'>*CAMPO VACÍO.</p>";
    } else {
        $notificacionesPasa =  "<p>Has elegido: " . $notificaciones . " recibir correos.</p>";
        echo "<br>";
    }
}

//PESO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = limpiar($_POST["peso"]);
    if ((is_numeric($peso)) && ($peso >= 50 && $peso <= 250)) {
        $pesoPasa =  "<p>Tu peso es: " . $peso . " Kg.</p>";
        echo "<br>";
    } else {
        $pesoError = "<p style='color:red;'>*Peso fuera de rango(KG).</p>";
        echo "<br>";
    }
}

//TELEFONO
function validarTelefono($numero)
{
    $reg = '/^[0-9]{3}[0-9]{3}[0-9]{3}$/';
    return preg_match($reg, $numero);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telefono = limpiar($_POST["telefono"]);
    if (!empty($telefono)) {
        if (validarTelefono($telefono)) {
            $telefonoPasa =  "<p>Tu teléfono es: " . $telefono . "</p>";
            echo "<br>";
        } else {
            $telefonoError = "<p style='color:red;'>*NO has introducido un teléfono válido.</p>";
            echo "<br>";
        }
    } else {
        $telefonoError = "<p style='color:red;'>*TELEFONO REQUERIDO.</p>";
        echo "<br>";
    }
}

//URL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pagina = limpiar($_POST["pagina"]);
    if (filter_var($pagina, FILTER_VALIDATE_URL)) {
        $paginaPasa =  "<p>Tu URL es: " . $pagina . "</p>";
        echo "<br>";
    } else {
        $paginaError = "<p style='color:red;'>*URL INVÁLIDA.</p>";
        echo "<br>";
    }
}

//COMENTARIO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = limpiar($_POST["area"]);
    if (empty($area)) {
        $areaError = "<p style='color:red'>*COMENTARIO VACÍO.</p>";
        echo "<br>";
    } else {
        $areaPasa = "<p>Has comentado: " . $area . "</p>";
        echo "<br>";
    }
}

//HIDDEN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = limpiar($_POST["usuario"]);
    if (empty($usuario)) {
        $usuarioError = "<p style='color:red'>*USUARIO NO DETECTADO.</p>";
        echo "<br>";
    } else {
        $usuarioPasa = "<p>Hola " . $nombre . ". Eres un usuario " . $usuario . "</p>";
        echo "<br>";
    }
}


?>
<!-- Empieza formulario -->
<div class="cajaformulario">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <fieldset>
            <legend>Datos Personales</legend>
            <label for=""><b>Nombre:*</b></label>
            <input type="text" name="nombre" id=""><br>
            <?php echo $nombreError; ?>
            <label for=""><b>Apellidos:*</b></label>
            <input type="text" name="apellidos" id=""><br>
            <?php echo $apellidosError; ?>
            <label for=""><b>Edad:</b></label>
            <select name="edad" id="">
                <option name="edad" selected disabled>...</option>
                <?php
                for ($i = 18; $i <= 65; $i++) {
                    echo "<option value='$i'> $i años.</option>";
                }
                ?>
                <option name="edad" value="No quiero contestar sobre mis ">No sabe / No contesta</option>
            </select><br>
            <?php echo $edadError; ?>
            <label for=""><b>Correo:*</b></label>
            <input type="text" name="correo" id="" placeholder="'bob@example.com'"><br>
            <label for=""><b>Confirme su correo:*</b></label>
            <input type="text" name="correoDos" id="" placeholder="'bob@example.com'"><br>
            <?php echo $correoError; ?>
            <label for=""><b>Indique si quiere recibir correos nuestros:</b></label>
            <select name="notificaciones" id="">
                <option name="notificaciones" selected disabled>...</option>
                <option name="notificaciones">Si</option>
                <option name="notificaciones">No</option>
            </select><br>
            <?php echo $notificacionesError; ?>
            <label for=""><b>Peso:</b></label>
            <input type="text" name="peso" id="">Kg<br>
            <?php echo $pesoError; ?>
            <label for=""><b>Teléfono:*</b></label>
            <input type="tel" name="telefono" id="" placeholder="_ _ _ _ _ _ _ _ _"><br>
            <?php echo $telefonoError; ?>
            <label for=""><b>Página Web:</b></label>
            <input type="text" name="pagina" id="" placeholder="like http://www.example.com">
            <?php echo $paginaError; ?>
            <fieldset>
                <legend>Otros Datos</legend>
                <label for=""><b>Aficiones:</b></label>
                <input type="checkbox" name="aficiones[]" value="Cine">
                <label for="">Cine</label>
                <input type="checkbox" name="aficiones[]" value="Literatura">
                <label for="">Literatura</label>
                <input type="checkbox" name="aficiones[]" value="Tebeos">
                <label for="">Tebeos</label>
                <input type="checkbox" name="aficiones[]" value="Deporte">
                <label for="">Deporte</label>
                <input type="checkbox" name="aficiones[]" value="Música">
                <label for="">Música</label>
                <input type="checkbox" name="aficiones[]" value="Televisión">
                <label for="">Televisión</label><br>
                <?php echo $aficionesError; ?>
                <label for=""><b>Indique su fruta preferida:</b></label><br>
                <input type="radio" name="fruta" id="1" value="cerezas"><label for="">Cerezas</label><br>
                <input type="radio" name="fruta" id="2" value="fresa"><label for="">Fresas</label><br>
                <input type="radio" name="fruta" id="3" value="limon"><label for="">Limón</label><br>
                <input type="radio" name="fruta" id="4" value="manzana"><label for="">Manzana</label><br>
                <input type="radio" name="fruta" id="5" value="naranja"><label for="">Naranja</label><br>
                <input type="radio" name="fruta" id="6" value="pera"><label for="">Pera</label><br>
                <!-- METER OTRA FRUTA CON  -->
                <form enctype="multipart/form-data" action="uploader.php" method="POST">
                    <input name="uploadedfile" type="file" />
                    <input type="submit" value="Subir archivo" />
                </form>
                <?php echo $frutaError; ?>
                <label for=""><b>Cambiar estilo de la página:</b></label><br>
                <input type="checkbox" name="colores" value="orange">
                <label for="">Color de fondo de la página</label><br>
                <input type="checkbox" name="colores2" value="green">
                <label for="">Color de la letra de la página</label><br>
                <?php echo $coloresError; ?>
                <textarea name="area" cols="50" rows="10" placeholder="Escribe algo aqui..."></textarea><br>
                <input name="usuario" type="hidden" value="REGISTRADO">
            </fieldset>
            <span>*Campos obligatorios.</span><br>
            <input type="submit" value="ENVIAR">
            <input type="reset" value="BORRAR">
        </fieldset>
    </form>
</div>
<div class="cajaResultados">
    <?php
    error_reporting(0);
    echo $nombrePasa;
    echo $apellidosPasa;
    echo $edadPasa;
    echo $correoPasa;
    echo $notificacionesPasa;
    echo $pesoPasa;
    echo $telefonoPasa;
    echo $paginaPasa;

    //AFICIONES
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['aficiones'])) {
            $aficiones = $_POST['aficiones'];
            // Contando el numero de input seleccionados "checked" checkboxes.
            $checked_contador = count($_POST['aficiones']);
            echo "<p>Has seleccionado las siguientes " . $checked_contador . " aficione(s):</p>";
            // Bucle para almacenar y visualizar valores activados checkbox.
            foreach ($_POST['aficiones'] as $seleccion) {
                echo "<p>" . $seleccion . "</p>";
            }
        } else {
            $aficionesError = "<p style='color:red;'>*NO HAS ELEGIDO AFICIONES.</p>";
            echo "<br>";
        }
    }

    //FRUTAS
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['fruta'])) {
            $fruta = $_POST["fruta"];
            echo "<br>";
            switch ($fruta) {
                case 'manzana':
                    echo "<p>Tu <b>fruta preferida</b> es: </p>";
                    echo '<img src="svg/manzana.svg">';
                    break;
                case 'cerezas':
                    echo "<p>Tu <b>fruta preferida</b> es: </p>";
                    echo '<img src="svg/cerezas.svg">';
                    break;
                case 'fresa':
                    echo "<p>Tu <b>fruta preferida</b> es: </p>";
                    echo '<img src="svg/fresa.svg">';
                    break;
                case 'limon':
                    echo "<p>Tu <b>fruta preferida</b> es: </p>";
                    echo '<img src="svg/limon.svg">';
                    break;
                case 'naranja':
                    echo "<p>Tu <b>fruta preferida</b> es: </p>";
                    echo '<img src="svg/naranja.svg">';
                    break;
                case 'pera':
                    echo "<p>Tu <b>fruta preferida</b> es: </p>";
                    echo '<img src="svg/manzana.svg">';
                    break;
            }
        } else {
            $frutaError = "<p style='color:red;'>*SELECCIONA AL MENOS UNA.</p>";
            echo "<br>";
        }
    }

    //COLORES
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['colores']) or isset($_POST['colores2'])) {
            $colores = $_POST['colores'];
            $colores2 = $_POST['colores2'];
            if ($colores == 'orange' and $colores2 == "green") {
                echo '<body style="color:green;background-color:orange;">';
            } elseif ($colores2 == "green") {
                echo '<body style="color:green">';
            } elseif ($colores == 'orange') {
                echo '<body style="background-color:orange">';
            }
        } else {
            $coloresError = "<p style='color:red;'>*NO HAS ELEGIDO ALGÚN CAMBIO.</p>";
            echo "<br>";
        }
    }

    echo $areaPasa;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        if (!empty($usuario)) {
            echo $usuarioPasa;
        } else {
            return;
        }
    }

    ?>
</div>
<?php
include('Cabecera_Footer/pie.inc');
?>
</body>

</html>