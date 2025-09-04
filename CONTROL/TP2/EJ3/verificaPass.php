<html>

    <head>
    </head>

    <body>

    <?php

    $usuario1 = [
        "usuario" => "Tomas",
        "clave" => "Tomas2025"
    ];

    $datosUsuarios = [$usuario1];

    if ($_POST['usuario'] && $_POST['password']) {
        $user = $_POST['usuario'];
        $pass = $_POST['password'];

        $cantUsuarios = count($datosUsuarios);
        $encontrado = false;
        $cadena = '';
        $i = 0;

        while ($i < $cantUsuarios && !$encontrado) {
            $usuarioActual = $datosUsuarios[$i];
            $userAct = $usuarioActual['usuario'];
            $passAct = $usuarioActual['clave'];

            if ($user == $userAct && $pass == $passAct) {
                $encontrado = true;
                $cadena = "<h2>Bienvenido $userAct</h2>";
            }

            $i++;
        }

        if (!$encontrado) {
            $cadena = "<h2>Usuario o clave incorrectas</h2>";
        }

        echo $cadena;
    } else {
        echo "<h2>Faltan datos</h2>";
    }

    ?>
    </body>
</html>