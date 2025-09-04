<?php


    function datosValidar($restricciones, $ext, $nombre_archivo, $dir, $rutaTemp, $esValido) {
    if ($restricciones == 1) {
        $restricciones = "Todo publico";
    } else if ($restricciones == 2) {
        $restricciones = "Mayores de 7";
    } else if ($restricciones == 3){
        $restricciones = "Mayores de 18";
    }

    $salida = "";
    
        //extensiones permitidas
        $permitidas = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($ext, $permitidas)) {
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $rutaDestino = $dir . $nombre_archivo;
            if (!move_uploaded_file($rutaTemp, $rutaDestino)) {
                $salida =  "El archivo se ha subido con exito <br>";
                $esValido = false;
            }
        } else {
            $esValido = false;
        }

        $datos = array($restricciones, $salida, $rutaDestino);
        return $datos;
    }

 
