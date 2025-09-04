<?php
    if(isset($_POST["edad"]) && isset($_POST["ocupacion"]) && !empty($_POST["edad"]) && !empty($_POST["ocupacion"])){
        $edad = $_POST["edad"];
        $ocupacion = $_POST["ocupacion"];
        $precio = 300;
        if($edad<12 && strtolower( $ocupacion)=="estudiante"){
            $precio = 160;
        } else if($edad>=12 && strtolower( $ocupacion)=="estudiante"){
            $precio = 180;
        }
        echo($precio);
    }
?>  