<!DOCTYPE html>

<html>

    <head>

    </head>


    <body>
    
    <?php

include_once('../../../../../CONTROL/TP2/EJ2/EJ5/calculos.php');


    if ($_POST) {
        $nombre = $_POST['nombre_form'];
        $apellido = $_POST['apellido_form'];
        $edad = $_POST['edad_form'];
        $direccion = $_POST['direccion_form'];
        $nivelEstudios = $_POST['estudios'];
        $tipoSexo = $_POST['sexo'];
        
        $persona = new Persona();
        $cadena = $persona->salidaPersona($nombre, $apellido, $edad, $direccion, $nivelEstudios, $tipoSexo);

        echo "<h3>$cadena </h3>";
    }
    ?>
    </body>
    </html>