<?php

require_once '../../../../../MODELO/TP2/EJ2/Usuario.php';
require_once '../../../../../CONTROL/TP2/EJ2/EJ6/salidaSaludo.php';

if ($_POST) {
    $nombre = $_POST['Nombre'] ?? '';
    $apellido = $_POST['Apellido'] ?? '';
    $edad = $_POST['Edad'] ?? 0;
    $direccion = $_POST['Direccion'] ?? '';
    $nivelEstudio = null;
    $sexo = $_POST['Sexo'] ?? '';
    $deportes = $_POST['Deportes'] ?? [];
    $direccionNumero = $_POST['numeroDireccion'] ?? '';
} else if ($_GET) {
    $nombre = $_GET['Nombre'] ?? '';
    $apellido = $_GET['Apellido'] ?? '';
    $edad = $_GET['Edad'] ?? 0;
    $direccion = $_GET['Direccion'] ?? '';
    $nivelEstudio = null;
    $sexo = $_GET['Sexo'] ?? '';
    $deportes = $_GET['Deportes'] ?? [];
    $direccionNumero = $_GET['numeroDireccion'] ?? '';
}


$usuario = new Usuario($nombre, $apellido, $edad, $direccion . " " . $direccionNumero, $nivelEstudio, $sexo, $deportes);

//control
echo salidaPersona($usuario) . "<br>";

if (count($usuario->getDeportes()) > 0) {
        echo " Practico los siguientes deportes: ";
        echo "<ul>";
        foreach ($usuario->getDeportes() as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
    }

echo "<a href='../inicio.php'>Volver</a>";
echo "<br><a href='../../../../../../menu.html'>Volver al menú</a>
";
?>
