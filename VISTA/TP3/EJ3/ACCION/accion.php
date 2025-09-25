<?php

    require_once("../../../CONTROL/TP3/EJ3/validar.php");

    function validador($tipo) {
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
        $dir = '../../../../MODELO/TP3/EJ3';
        $esValido = true;

        
    if ($_FILES['miArchivo']['error'] <= 0) {
        $nombre_archivo = basename($_FILES['miArchivo']['name']);
        $tam = $_FILES['miArchivo']['size'];
        $rutaTemp = $_FILES['miArchivo']['tmp_name'];
        $ext =  strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));
    }

    $datos = datosValidar($restricciones, $ext, $nombre_archivo, $dir, $rutaTemp, $esValido);

    $restricciones = $datos[0];
    $salida = $datos[1];
    $rutaDestino = $datos[2];

    echo $salida;

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
