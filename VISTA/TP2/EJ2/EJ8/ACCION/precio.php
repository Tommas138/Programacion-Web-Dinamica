<?php
include_once('../../../../../CONTROL/TP2/EJ2/EJ8/calcularEntrada.php');
Class Calculo {

    public function precioEntrada($ocupacion, $edad) {
        $precio = 300;
if($edad<12 && strtolower( $ocupacion)=="estudiante"){
            $precio = 160;
        } else if($edad>=12 && strtolower( $ocupacion)=="estudiante"){
            $precio = 180;
        }
        return $precio;

    }
}