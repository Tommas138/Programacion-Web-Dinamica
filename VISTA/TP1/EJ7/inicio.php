<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones Matemáticas</title>
</head>
<body>
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
</body>
</html>