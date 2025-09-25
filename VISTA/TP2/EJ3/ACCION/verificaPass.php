<?php

require_once('../../../../CONTROL/TP2/EJ3/calculo.php');
require_once('../../../../CONTROL/TP2/EJ3/Usuario.php');
require_once('../../../../MODELO/TP2/EJ3/BDUsuarios.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        $cadena = verificarPass($user, $pass);
    } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $user = $_GET['usuario'];
        $pass  = $_GET['password'];
        $cadena = verificarPass($user, $pass);

    } else {
        $cadena =  "<h2>Faltan datos</h2>";
    }

    echo  $cadena;
?>