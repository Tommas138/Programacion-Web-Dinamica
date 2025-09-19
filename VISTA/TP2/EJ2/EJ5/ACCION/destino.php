<!DOCTYPE html>

<html>

    <head>

    </head>


    <body>
    
    <?php

include_once('../../../../../CONTROL/TP2/EJ2/EJ5/Calculos.php');


    if ($_POST) {
        $nombre = $_POST['nombre_form'];
        $apellido = $_POST['apellido_form'];
        $edad = $_POST['edad_form'];
        $direccion = $_POST['direccion_form'];
        $nivelEstudios = $_POST['estudios'];
        $tipoSexo = $_POST['sexo'];
    } else if ($_GET) {
        $nombre = $_GET['nombre_form'];
        $apellido = $_GET['apellido_form'];
        $edad = $_GET['edad_form'];
        $direccion = $_GET['direccion_form'];
        $nivelEstudios = $_GET['estudios'];
        $tipoSexo = $_GET['sexo'];
    }
        $persona = new Persona();
        $cadena = $persona->salidaPersona($nombre, $apellido, $edad, $direccion, $nivelEstudios, $tipoSexo);

        echo "<h3>$cadena </h3>";
    
    ?>
    </body>
    </html>