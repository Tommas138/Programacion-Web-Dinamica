
<!DOCTYPE html>

<html> 

    <head>
    </head>


    <body>

    <?php
    
    $dirDestino = "archivos/";
    $tam_max = 2 * 1024 * 1024;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_FILES['miArchivo']['error'] <= 0 ) {
        $nombre_archivo = $_FILES['miArchivo']['name'];
        $tam = $_FILES['miArchivo']['size'];
        $rutaTemp = $_FILES['miArchivo']['tmp_name'];
        $ext = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));


        if ($ext != 'pdf' && $ext != 'doc') {
            echo "ERROR: solo se permiten archivos .doc o .pdf <br>";
        } 
        elseif ($tam > $tam_max) {
            echo "ERROR: el tamaño del archivo excede los 2MB <br>";
        } else {
            $ruta_destino = $dirDestino . $nombre_archivo;
            if (move_uploaded_file($rutaTemp, $ruta_destino)) {
                echo "El archivo " . htmlspecialchars($nombre_archivo) . " se ha subido con exito <br>";
                echo "<a href='" . $ruta_destino . "'>Ver el archivo </a>";
            } else {
                echo "ERROR: no se puede guardar el archivo.";
            }
        }
    } else {
        echo "ERROR: no se pudo cargar el archivo. Intente de nuevo";
    }
      }
    ?>
    </body>
</html>