<!DOCTYPE html>
<html>

<head>

    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
    include_once 'VISTA/estructura/head.php';
    ?>
</head>

<body>
    <?php
    include_once 'VISTA/estructura/header.php';
    ?>
<form method="post" action="ACCION/accion.php" enctype="multipart/form-data">
    <a href="../../../menu.php">Volver al menú</a><br><br> 
    Ingresa el archivo: <input name="miArchivo" id="miArchivo" type="file">

    <input type="submit" value="Enviar">
</form>

<?php
    include_once '../../estructura/footer.php';
?>
</body>
</html>
