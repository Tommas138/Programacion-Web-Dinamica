<!DOCTYPE html> 
<html>
    
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title> Formulario ej2</title>
<?php
require_once '../../estructura/head.php';
?>
</head>
    <body> 
        <?php
            require_once '../../estructura/header.php';
        ?>
    <a href="../../../menu.php">Volver al menú</a>
    <form id= "form2" name= "form2" method="GET" action="accion/destino.php">
        Lunes: <input name="horario_lunes" type="number" min="0" id="horario_lunes"> <br/> <br>
        Martes: <input name="horario_martes" type="number" min="0" id="horario_martes"> <br/> <br>
        Miercoles: <input name="horario_miercoles" type="number" min="0" id="horario_miercoles"> <br/> <br>
        Jueves: <input name="horario_jueves" type="tex" id="horario_jueves"> <br/> <br>
        Viernes: <input name="horario_viernes" type="number" min="0" id="horario_viernes"> <br/> <br>
        <input name="submit" type="submit" value="ACEPTAR">
    </form>
    <?php
    require_once '../../estructura/footer.php';
    ?>
    </body>
</html>