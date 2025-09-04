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

        if ($restricciones == 1) {
        $restricciones = "Todo publico";
    } else if ($restricciones == 2) {
        $restricciones = "Mayores de 7";
    } else if ($restricciones == 3){
        $restricciones = "Mayores de 18";
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
        $restricciones
    );

    return $arregloDatos;
}
}