<!DOCTYPE html>

<html> 

    <head>
    </head>

    <body>
    <?php
    require_once('../../../../CONTROL/TP3/EJ2/subirArchivo.php');
    $dirDestino = "../../../../MODELO/TP3/EJ2";

    if ($_FILES['miArchivo']['error'] <= 0 ) {
        $nombre_archivo = $_FILES['miArchivo']['name'];
        $tam = $_FILES['miArchivo']['size'];
        $rutaTemp = $_FILES['miArchivo']['tmp_name'];
        $ext = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
        $salida = validacion($ext, $dirDestino, $nombre_archivo, $rutaTemp);
    } else {
        $salida =  "ERROR: no se pudo cargar el archivo. Intente de nuevo";
    }
    echo $salida;
    ?>
    </body>

</html>
