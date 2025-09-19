<?php
    
    if(isset($_POST["edad"]) && isset($_POST["ocupacion"]) && !empty($_POST["edad"]) && !empty($_POST["ocupacion"])){
        $edad = $_POST["edad"];
        $ocupacion = $_POST["ocupacion"];   
    } else if (isset($_GET["edad"]) && isset($_GET["ocupacion"]) && !empty($_GET["edad"]) && !empty($_GET["ocupacion"])) {
        $edad = $_GET["edad"];
        $ocupacion = $_GET["ocupacion"];
    }
    $precio = 300;
    $calculo = new Calculo;
    $precio = $calculo->precioEntrada($ocupacion, $edad);
    echo($precio);
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