
<!DOCTYPE html>

<html> 

    <head>
    </head>


    <body>

    <?php
    
    $dirDestino = "../../../MODELO/TP3/EJ2/archivos/";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_FILES['miArchivo']['error'] <= 0 ) {
        $nombre_archivo = $_FILES['miArchivo']['name'];
        $tam = $_FILES['miArchivo']['size'];
        $rutaTemp = $_FILES['miArchivo']['tmp_name'];
        $ext = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));


        if ($ext != 'txt') {
            echo "ERROR: solo se permiten archivos txt <br>";
        } else {
            $ruta_destino = $dirDestino . $nombre_archivo;
            if (move_uploaded_file($rutaTemp, $ruta_destino)) {
                echo "El archivo " . htmlspecialchars($nombre_archivo) . " se ha subido con exito <br>";
                echo "Contenido del archivo: <br>";
                $contenido = file_get_contents($ruta_destino);
                echo "<textarea style= 'width: 100%; height: 300px;'>" . htmlspecialchars($contenido) . "</textarea>";
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
