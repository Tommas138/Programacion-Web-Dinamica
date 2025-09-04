<?php

include_once '../../../MODELO/TP2/EJ6/Usuario.php';

$nombre = $_GET['Nombre'] ?? '';
$apellido = $_GET['Apellido'] ?? '';
$edad = $_GET['Edad'] ?? 0;
$direccion = $_GET['Direccion'] ?? '';
$nivelEstudio = null;
$sexo = $_GET['Sexo'] ?? '';
$deportes = $_GET['Deportes'] ?? [];
$direccionNumero = $_GET['numeroDireccion'] ?? '';

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
    echo "Hola, yo soy $nombre $apellido, soy mayor de edad, tengo $edad años, vivo en $direccion, tengo $nivelEstudio y mi sexo es $sexo.";
} else {
    echo "Hola, yo soy $nombre $apellido, tengo $edad años, vivo en $direccion $direccionNumero , mi nivel de estudio es $nivelEstudio y mi sexo es $sexo.";
}

if (count($usuario->getDeportes()) > 0) {
    echo " Practico los siguientes deportes: ";
    echo "<ul>";
    foreach ($usuario->getDeportes() as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

echo "<a href='./inicio.php'>Volver</a>";
?>
