<!DOCTYPE html>

<html>

    <head>
    </head>

    <body>
    <?php

        if ($_POST) {
            $primerValor = $_POST['primer_valor'];
            $segundoValor = $_POST['segundo_valor'];
            $seleccion = $_POST['operacion'];
            $resultado = 0;
            switch ($seleccion) {
                case 'suma':
                    $resultado = $primerValor + $segundoValor;
                break;
                case 'resta':
                    $resultado = $primerValor - $segundoValor;
                break;
                case 'multiplicacion':
                    $resultado = $primerValor * $segundoValor;
                break;
                case 'division':
                    $resultado = $primerValor / $segundoValor;
                break;
            }

            echo "<h3>El resultado es $resultado </h3>";
        }
    ?>
    </body>
</html>