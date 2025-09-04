<?php


Class Calculadora {

    public function realizarCalculos($operandoUno, $operandoDos, $operacion) {

         switch($operacion){
            case "suma": $resultado = $operandoUno." + ".$operandoDos." = ".($operandoUno + $operandoDos);break;
            case "resta": $resultado = $operandoUno." - ".$operandoDos." = ".($operandoUno - $operandoDos);break;
            case "multiplicacion": $resultado = $operandoUno." * ".$operandoDos." = ".($operandoUno * $operandoDos);break;
            case "division": $resultado = $operandoUno." / ".$operandoDos." = ".($operandoUno / $operandoDos);break;
        }

        return $resultado;
    }
}