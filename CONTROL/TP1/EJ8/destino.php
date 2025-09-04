<html>

<head>
</head>

<body>

        <?php
        if ($_GET) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $edad = $_GET['edad_form'];
            $esEstudiante = $_GET['estudiante'];
            $valor = 0;

            if ($esEstudiante == 1 && $edad >= 12) {
                $valor = 180;
            }
             else if ($esEstudiante == 1 || $edad < 12) {
                $valor = 160;
            } else {
                $valor = 300;
            }

            echo "<h3>Hola, $nombre $apellido, el valor de tu entrada es de $valor </h3>";
            echo '<a href="ejercicio8.html">Volver al formulario </a>';
        } else {
            echo "Faltan datos\n";
        }

        ?>
</body>


</html>