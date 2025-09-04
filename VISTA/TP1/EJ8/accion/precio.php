<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información sobre Entrada</title>
</head>
<body>
    <?php
    include_once '../../../../CONTROL/TP1/EJ8/Cine.php';
    $cine = new Cine();
    $cine->calcularEntrada();
    $precio = $cine->getPrecio();
    if ($precio) {
        echo "<h1>El precio de su entrada es: $" . $precio . "</h1>";
    } else {
        echo "<h1>No se ha podido calcular el precio.</h1>";
    }
    ?>
</body>
</html>