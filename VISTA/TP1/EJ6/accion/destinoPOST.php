<!DOCTYPE html>

<html>

    <head>

    </head>


    <body>
    
    <?php

    require_once('../../../../CONTROL/TP1/EJ6/calculos.php');

    if ($_POST) {
        $nombre = $_POST['nombre_form'];
        $apellido = $_POST['apellido_form'];
        $edad = $_POST['edad_form'];
        $direccion = $_POST['direccion_form'];
        $nivelEstudios = $_POST['estudios'];
        $tipoSexo = $_POST['sexo'];
        $deporte = [];
        $deporte = $_POST['deportes'];
        $cantDeportes = count($deporte);
        
        $persona = new Persona();
        $salida = $persona->Mensaje($nombre, $apellido, $edad, $direccion, $nivelEstudios, $tipoSexo, $cantDeportes, $deporte);

        echo $salida;

    }
    ?>
    </body>
    </html>