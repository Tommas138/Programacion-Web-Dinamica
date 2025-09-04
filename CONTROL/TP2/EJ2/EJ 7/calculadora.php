<?php
    if(!empty($_GET["operandoUno"]) && !empty($_GET["operandoDos"]) && !empty($_GET["operacion"])){
        $resultado = 0;
        $operandoUno = $_GET["operandoUno"];
        $operandoDos = $_GET["operandoDos"];
        switch($_GET["operacion"]){
            case "suma": $resultado = $operandoUno." + ".$operandoDos." = ".($operandoUno + $operandoDos);break;
            case "resta": $resultado = $operandoUno." - ".$operandoDos." = ".($operandoUno - $operandoDos);break;
            case "multiplicacion": $resultado = $operandoUno." * ".$operandoDos." = ".($operandoUno * $operandoDos);break;
            case "division": $resultado = $operandoUno." / ".$operandoDos." = ".($operandoUno / $operandoDos);break;
        }
        echo $resultado;
    } else {
        echo "SYNTAX ERROR";
    }
?>