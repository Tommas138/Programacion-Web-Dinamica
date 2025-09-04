<!DOCTYPE html>

<html>

    <head>

    </head>


    <body>
    
    <?php

    include_once('../../../../CONTROL/TP1/EJ6/calculos.php');

    if ($_GET) {
        $nombre = $_GET['nombre_form'];
        $apellido = $_GET['apellido_form'];
        $edad = $_GET['edad_form'];
        $direccion = $_GET['direccion_form'];
        $nivelEstudios = $_GET['estudios'];
        $tipoSexo = $_GET['sexo'];
        $deporte = [];
        $deporte = $_GET['deportes'];
        $cantDeportes = count($deporte);
        
        $persona = new Persona();
        $salida = $persona->Mensaje($nombre, $apellido, $edad, $direccion, $nivelEstudios, $tipoSexo, $cantDeportes);

        echo $salida;

    }
    ?>
    </body>
    </html>