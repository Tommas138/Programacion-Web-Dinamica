<?php
include_once '../../EJ5/Usuario.php';

Class Persona {


    public function salidaPersona($nombre, $apellido, $edad, $direccion, $nivelEstudio, $sexo, $deportes) {

        $usuario = new Usuario($nombre, $apellido, $edad, $direccion, $nivelEstudio, $sexo, $deportes);
if (isset($_GET['NivelEstudio'])) {
    switch ($_GET['NivelEstudio']) {
        case 1:
            $nivelEstudio = "estudios incompletos";
            break;
        case 2:
            $nivelEstudio = "primaria terminada";
            break;
        case 3:
            $nivelEstudio = "secundaria terminada";
            break;
        default:
            $nivelEstudio = "No especificado";
            break;
    }
} else {
    $nivelEstudio = "No especificado";
}

if ($usuario->getEdad() > 18) {
    $salida = "Hola, yo soy ".$nombre . " " .$apellido.", soy mayor de edad, tengo  ". $edad ." años, vivo en ".$direccion. ", tengo " .$nivelEstudio." y mi sexo es ".$sexo;
} else {
    $salida = "Hola, yo soy ".$nombre. " ". $apellido. ", tengo ".$edad. "años, vivo en ".$direccion. " ".$direccionNumero." , mi nivel de estudio es ".$nivelEstudio. "y mi sexo es " .$sexo.";
}
if (count($usuario->getDeportes()) > 0) {
    $salida .=  Practico los siguientes deportes: ";
    $salida .= " ";
    foreach ($usuario->getDeportes() as $value) {
        $salida .= " " .$value. " ";
    }
    $salida .= "";
}

return $salida;
}
}
?>
