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
    <a href="../../../../menu.php">Volver al menú</a>
    <form id="formularioCalculadora" method="get" action="ACCION/calculadora.php">
        <input type="number" name="operandoUno">
        <input type="number" name="operandoDos">
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <script src="validacion1.js"></script>
    <?php
    include_once '../../../estructura/footer.php';
    ?>
</body>

</html>
