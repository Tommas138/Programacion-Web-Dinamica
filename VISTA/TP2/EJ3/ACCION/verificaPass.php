<html>

    <head>
    </head>

    <body>

    <?php

include_once('../../../../CONTROL/TP2/EJ3/calculo.php');
include_once('../../../../CONTROL/TP2/EJ3/Usuario.php');
include_once('../../../../MODELO/TP2/EJ3/BDUsuarios.php');


    if ($_POST['usuario'] && $_POST['password']) {
        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        
        $cadena = verificarPass($user, $pass);
        echo $cadena;
    } else {
        echo "<h2>Faltan datos</h2>";
    }

    ?>
    </body>
</html>