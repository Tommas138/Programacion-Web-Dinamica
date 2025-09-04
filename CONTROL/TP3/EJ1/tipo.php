
<?php


function tipoExtension($nombre_archivo, $tam, $rutaTemp, $ext, $tam_max, $dirDestino) {
if ($ext != 'pdf' && $ext != 'doc') {
            $salida =  "ERROR: solo se permiten archivos .doc o .pdf <br>";
        } 
        elseif ($tam > $tam_max) {
            $salida =  "ERROR: el tamaño del archivo excede los 2MB <br>";
        } else {
            $ruta_destino = $dirDestino . $nombre_archivo;

            if (move_uploaded_file($rutaTemp, $ruta_destino)) {
                $salida =  "El archivo " . htmlspecialchars($nombre_archivo) . " se ha subido con exito <br>";
                $salida .=  "<a href='" . $ruta_destino . "'>Ver el archivo </a>";
            } else {
                $salida =  "ERROR: no se puede guardar el archivo.";
            }
        }

    return $salida;    
    }
