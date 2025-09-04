<?php
include_once('../../../../../CONTROL/TP2/EJ2/EJ7/operacion.php');

    if(!empty($_GET["operandoUno"]) && !empty($_GET["operandoDos"]) && !empty($_GET["operacion"])){
        $resultado = 0;
        $operandoUno = $_GET["operandoUno"];
        $operandoDos = $_GET["operandoDos"];
        $operacion = $_GET['operacion'];
       $calculadora = new Calculadora();
       $resultado = $calculadora->realizarCalculos($operandoUno, $operandoDos, $operacion);


        echo $resultado;
    } else {
        echo "SYNTAX ERROR";
    }
?>