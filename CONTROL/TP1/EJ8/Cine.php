<?php

Class Cine {

private $precio;
  
public function __construct() {
    $this->precio = 0;
}

public function getPrecio() {
    return $this->precio;
}

public function setPrecio($precio) {
    $this->precio = $precio;
}

public function calcularEntrada(){
    $precio = 0;
    $edad = $_POST['edad'];
    $estudiante = $_POST['estudiante'];
    if(!$estudiante ){
        $estudiante = 0;
    }
    if ($edad < 12) {
        $precio = 160;
    } elseif ($estudiante == 1 && $edad >= 12) {
        $precio = 180;
    } else {
        $precio = 300;
    }

    $this->setPrecio($precio);}
}

