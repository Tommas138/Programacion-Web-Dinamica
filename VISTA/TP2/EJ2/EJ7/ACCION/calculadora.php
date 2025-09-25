<?php
require_once('../../../../../CONTROL/TP2/EJ2/EJ7/Calculadora.php');

    if(!empty($GET["operandoUno"]) && !empty($_GET["operandoDos"]) && !empty($_GET["operacion"])){
        $resultado = 0;
        $operandoUno = $_GET["operandoUno"];
        $operandoDos = $_GET["operandoDos"];
        $operacion = $_GET['operacion'];

    } else if (!empty($_POST["operandoUno"]) && !empty($_POST["operandoDos"]) && !empty($_POST["operacion"])) {
        $resultado = 0;
        $operandoUno = $_POST["operandoUno"];
        $operandoDos = $_POST["operandoDos"];
        $operacion = $_POST['operacion'];
    } else {
        echo "SYNTAX ERROR";
    }
       $calculadora = new Calculadora();
       $resultado = $calculadora->realizarCalculos($operandoUno, $operandoDos, $operacion);


        echo $resultado;
     
?>