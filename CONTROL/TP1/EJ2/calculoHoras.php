<?php

class Calculo {

    public function calcularHoras($arregloHoras) {
        $total = 0;
        foreach ($arregloHoras as $hora) {
            $total += $hora;
        }

        return $total;
    }
}