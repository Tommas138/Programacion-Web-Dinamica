<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Operaciones Matemáticas</title>
    <?php
    include_once '../../estructura/head.php';
    ?>
</head>
<body>
    <?php
        include_once '../../estructura/header.php';
    ?>
    <a href="../../../menu.php">Volver al menú</a>
    <h2>Calculadora Simple</h2>
    <form action="accion/resultado.php" method="post">
        <label for="num1">Primer número:</label>
        <input type="text" id="num1" name="num1" required><br><br>

        <label for="num2">Segundo número:</label>
        <input type="text" id="num2" name="num2" required><br><br>

        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma (+)</option>
            <option value="resta">Resta (-)</option>
            <option value="multiplicacion">Multiplicación (x)</option>
            <option value="division">División (÷)</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
    <?php
    include_once '../../estructura/footer.php';
    ?>
</body>
</html>