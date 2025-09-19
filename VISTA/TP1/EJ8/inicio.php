<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Calculadora de Entradas - Cinem@s</title>
    <?php
    include_once '../../estructura/head.php';
    ?>
</head>
<body>
    <?php
        include_once '../../estructura/header.php';
    ?>
    <a href="../../../menu.php">Volver al menú</a>
    <h2>Calcula el valor de tu entrada</h2>
    <form method="post" action="accion/precio.php">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="0" max="120" required><br><br>
        <label for="estudiante">
            <input type="checkbox" name="estudiante" value="1">Soy estudiante
        </label><br><br>
        <button type="submit" name="calcular">Calcular precio</button>
    </form>
    <?php
    include_once '../../estructura/footer.php';
    ?>
</body>
</html>