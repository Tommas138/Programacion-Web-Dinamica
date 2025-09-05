<?php

include('../../../../MODELO/TP2/EJ2/Usuario.php');
include('../../../../CONTROL/TP2/EJ2/EJ6/salidaSaludo.php');

echo $salida;

if (count($usuario->getDeportes()) > 0) {
        echo " Practico los siguientes deportes: ";
        echo "<ul>";
        foreach ($usuario->getDeportes() as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
    }


echo "<a href='./inicio.php'>Volver</a>";
echo "<br><a href='../../../../menu.html'>Volver al menú</a>";
?>
