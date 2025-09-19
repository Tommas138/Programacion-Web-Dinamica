<!DOCTYPE html>
<html> 
    <head></head>
    <body>
        <?php
        if($_GET) {
            $edad = $_GET ['edad_form'];
            
        } else if ($_POST) {
            $edad = $_POST['edad_form'];
        }
        if ($edad >= 18) {
                echo "Usted es mayor de edad";
            } else {
                echo "Usted es menor de edad";
            }
        ?>
        <br/>
        <a href='../ej4.html'>Volver</a>
    </body>
</html>