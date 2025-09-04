
<!DOCTYPE html>

<html> 

    <head>
    </head>


    <body>

    <?php
    include_once('../../../../CONTROL/TP3/EJ1/tipo.php');
    $dirDestino = "../../../../MODELO/TP3/EJ1/";
    $tam_max = 2 * 1000 * 1000;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['miArchivo']['error'] <= 0 ) {
        $nombre_archivo = $_FILES['miArchivo']['name'];
        $tam = $_FILES['miArchivo']['size'];
        $rutaTemp = $_FILES['miArchivo']['tmp_name'];
        $ext = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        $salida = tipoExtension($nombre_archivo, $tam, $rutaTemp, $ext, $tam_max, $dirDestino);
       
       
    } else {
        $salida = "ERROR: no se pudo cargar el archivo. Intente de nuevo";
    }
     echo $salida;
      }
    ?>
    </body>

</html>
