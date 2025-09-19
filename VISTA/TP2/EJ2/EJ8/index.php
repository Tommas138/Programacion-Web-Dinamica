<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include_once '../../estructura/head.php';
    ?>
</head>
<body>
    <?php
        include_once '../../estructura/header.php';
    ?>
    <form id="formularioEntradas" method="post" action="ACCION/precio.php">
        <label for="edad">Edad</label>
        <input type="number" name="edad">
        <label for="ocupacion">Ocupacion</label>
        <input type="text" name="ocupacion">
        <input type="submit" value="Verificar">
        <a class="btn btn-success p-2" style="background-color: #42d665; border-color: #42d665;" href="../../../menu.php">Volver al menú</a>
    </form>
    
    <script src="validacion2.js"></script>
    <?php
    include_once '../../../estructura/footer.php';
    ?>
</body>

</html>
