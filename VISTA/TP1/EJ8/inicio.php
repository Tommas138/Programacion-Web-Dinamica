<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Entradas - Cinem@s</title>
</head>
<body>
    <h2>Calcula el valor de tu entrada</h2>
    <form method="post" action="accion/precio.php">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="0" max="120" required><br><br>
        <label for="estudiante">
            <input type="checkbox" name="estudiante" value="1">Soy estudiante
        </label><br><br>
        <button type="submit" name="calcular">Calcular precio</button>
    </form>
</body>
</html>