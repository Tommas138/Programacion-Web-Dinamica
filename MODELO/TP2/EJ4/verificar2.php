<?php

Class validar {

    public function validador($tipo) {
        $titulo = $tipo['titulo_form'];
        $actores = $tipo['actores_form'];
        $director = $tipo['director_form'];
        $guion = $tipo['guion_form'];
        $produccion = $tipo['produccion_form'];
        $anio = $tipo['anio_form'];
        $nacionalidad = $tipo['nacionalidad_form'];
        $genero = $tipo['genero_form'];
        $duracion = $tipo['duracion_form'];
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