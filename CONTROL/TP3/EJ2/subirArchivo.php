<?php


    function validacion($ext, $dirDestino, $nombre_archivo, $rutaTemp) {
    if ($ext != 'txt') {
            $salida = "ERROR: solo se permiten archivos txt <br>";
        } else {
            $ruta_destino = $dirDestino . $nombre_archivo;
            if (move_uploaded_file($rutaTemp, $ruta_destino)) {
                $salida = "El archivo " . htmlspecialchars($nombre_archivo) . " se ha subido con exito <br>";
                $salida .= "Contenido del archivo: <br>";
                $contenido = file_get_contents($ruta_destino);
                $salida .= "<textarea style= 'width: 100%; height: 300px;'>" . htmlspecialchars($contenido) . "</textarea>";
            } else {
                $salida = "ERROR: no se puede guardar el archivo.";
            }
        }

        return $salida;
        }