<?php
    if(isset($_POST["edad"]) && isset($_POST["ocupacion"]) && !empty($_POST["edad"]) && !empty($_POST["ocupacion"])){
        $edad = $_POST["edad"];
        $ocupacion = $_POST["ocupacion"];
        $precio = 300;
        $calculo = new Calculo;
        $precio = $calculo->precioEntrada($ocupacion, $edad);
        echo($precio);
    }
?>  