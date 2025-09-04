<?php



function verificarPass($user, $pass) {
    global $usuarios;
    $cantUsuarios = count($usuarios);
    
    $encontrado = false;
    $cadena = '';
    $i = 0;
    
    while ($i < $cantUsuarios && !$encontrado) {
        
        $usuarioActual = $usuarios[$i];
        $userAct = $usuarioActual['Nombre'];
        $passAct = $usuarioActual['Contraseña'];

        if ($user == $userAct && $pass == $passAct) {
            $encontrado = true;
            $cadena = "<h2>Bienvenido $userAct</h2>";
        }

        $i++;
    }

    if (!$encontrado) {
        $cadena = "<h2>Usuario o clave incorrectas</h2>";
    }

    return $cadena;
    }
?>