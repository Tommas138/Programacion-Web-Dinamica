<!DOCTYPE html>

<html>
    <head>
    </head>

    <body>

    <?php
    if ($_GET) {
        $nombre = $_GET['nombre_form'];
        $apellido = $_GET['apellido_form'];
        $edad= $_GET['edad_form'];
        $direccion = $_GET['direccion_form'];
        $cadena = (
            "
            Hola yo soy $nombre, $apellido tengo $edad años y vivo en $direccion
            "
        );
        echo "<h3>$cadena</h3>";
    } else if ($_POST) {
        $nombre = $_POST['nombre_form'];
        $apellido = $_POST['apellido_form'];
        $edad= $_POST['edad_form'];
        $direccion = $_POST['direccion_form'];
        $cadena = (
            "
            Hola yo soy $nombre, $apellido tengo $edad años y vivo en $direccion
            "
        );
        echo "<h3>$cadena</h3>";
    } else {
 echo "No se encontraron datos";
    }

    
    ?>


    </body>


</html>