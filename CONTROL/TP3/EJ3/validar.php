<?php

Class validar {

    public function validador($tipo) {
        $titulo = $tipo['titulo'];
        $actores = $tipo['actores'];
        $director = $tipo['director'];
        $guion = $tipo['guion'];
        $produccion = $tipo['produccion'];
        $anio = $tipo['anio'];
        $nacionalidad = $tipo['nacionalidad'];
        $genero = $tipo['genero'];
        $duracion = $tipo['duracion'];
        $restricciones = $tipo['radio'];
        $dir = '../../../MODELO/TP3/EJ3';
        $esValido = true;

        if ($restricciones == 1) {
        $restricciones = "Todo publico";
    } else if ($restricciones == 2) {
        $restricciones = "Mayores de 7";
    } else if ($restricciones == 3){
        $restricciones = "Mayores de 18";
    }

    if ($_FILES['miArchivo']['error'] <= 0) {
        $nombre_archivo = basename($_FILES['miArchivo']['name']);
        $tam = $_FILES['miArchivo']['size'];
        $rutaTemp = $_FILES['miArchivo']['tmp_name'];
        $ext =  strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        //extensiones permitidas
        $permitidas = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($ext, $permitidas)) {
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $rutaDestino = $dir . $nombre_archivo;
            if (!move_uploaded_file($rutaTemp, $rutaDestino)) {
                echo "El archivo se ha subido con exito <br>";
                $esValido = false;
            }
        } else {
            $esValido = false;
        }
    }

    $arregloDatos = array (
        $titulo,
        $actores,
        $director,
        $guion,
        $produccion,
        $anio,
        $nacionalidad,
        $genero,
        $duracion,
        $restricciones,
        $rutaDestino,
        $esValido
    );

    return $arregloDatos;
}
}