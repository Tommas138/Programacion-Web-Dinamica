<?php

include_once '../../../../../CONTROL/TP2/EJ2/EJ6/Usuario.php';
include_once '../../../../../CONTROL/TP2/EJ2/EJ6/salidaSaludo.php';
$nombre = $_GET['Nombre'] ?? '';
$apellido = $_GET['Apellido'] ?? '';
$edad = $_GET['Edad'] ?? 0;
$direccion = $_GET['Direccion'] ?? '';
$nivelEstudio = null;
$sexo = $_GET['Sexo'] ?? '';
$deportes = $_GET['Deportes'] ?? [];
$direccionNumero = $_GET['numeroDireccion'] ?? '';

$usuario = new Persona();

$salida = $usuario->salidaPersona($nombre, $apellido, $edad, $direccion, $nivelEstudio, $sexo, $deportes);

echo $salida;

echo "<a href='../inicio.php'>Volver</a>";
?>
