<!DOCTYPE html>

<html>

    <head>

    </head>


    <body>
    
    <?php

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
        if ($edad>= 18) {
        $cadena = (
            "
            $nombre $apellido, que vive en $direccion de $edad años es mayor de edad
            "
        );
        } else {
          $cadena = (
            "
            $nombre $apellido, que vive en $direccion de $edad años es menor de edad
            "
        );  
        }

        switch ($nivelEstudios) {
            case 1:
                $cadena .= " no posee estudios\n";
            break;
            case 2:
                $cadena .= " posee estudios primarios\n";
            break;
            case 3:
                $cadena .= " posee estudios secundarios\n";
            break;
        } 

        switch ($tipoSexo) {
            case 'M':
                $cadena .= " y su sexo es masculino";
            break;
            case 'F':
                $cadena .= " y su sexo es femenino";
            break;
            case 'O':
                $cadena .= " y su sexo es otro";
            break;
        }

        $cadena .= " practica $cantDeportes deportes, tales como: ";
        foreach ($deporte as $cadaDeporte) {
            $cadena .= " $cadaDeporte";
        }
        echo "<h3>$cadena </h3>";
    }
    ?>
    </body>
    </html>