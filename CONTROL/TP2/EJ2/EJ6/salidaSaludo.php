<?php
include_once '../../../../MODELO/TP2/EJ2/Usuario.php';

$nombre = $_POST['Nombre'] ?? '';
$apellido = $_POST['Apellido'] ?? '';
$edad = $_POST['Edad'] ?? 0;
$direccion = $_POST['Direccion'] ?? '';
$nivelEstudio = $_POST['NivelEstudio'] ?? '';
$sexo = $_POST['Sexo'] ?? '';
$deportes = $_POST['Deportes'] ?? [];
$direccionNumero = $_POST['numeroDireccion'] ?? '';
$stringEstudio = '';
$usuario = new Usuario($nombre, $apellido, $edad, $direccion . $direccionNumero, $nivelEstudio, $sexo, $deportes);

function salidaPersona($usuario) {
    switch ($usuario->getNivelEstudio()) {
    case "1":
        $stringEstudio = "mi nivel de estudio es primario incompleto";
        break;
    case "2":
        $stringEstudio = "mi nivel de estudio es primario completo";
        break;
    case "3":
        $stringEstudio = "mi nivel de estudio es secundaria terminada";
        break;

}  
    if ($usuario->getEdad() > 18) {
        $salida = "Hola, yo soy " . $usuario->getNombre() . " " . $usuario->getApellido() . ", soy mayor de edad, tengo " . $usuario->getEdad() . " años, vivo en " . $usuario->getDireccion() . ", tengo " . $stringEstudio . " y mi sexo es " . $usuario->getSexo() . ".";
    } else {
        $salida = "Hola, yo soy " . $usuario->getNombre() . " " . $usuario->getApellido() . ", tengo " . $usuario->getEdad() . " años, vivo en " . $usuario->getDireccion()  . " y mi sexo es " . $usuario->getSexo() . ".";
    }
    return $salida;
}

$usuario = new Usuario($nombre, $apellido, $edad, $direccion, $nivelEstudio, $sexo, $deportes);
$salida = salidaPersona($usuario);

?>