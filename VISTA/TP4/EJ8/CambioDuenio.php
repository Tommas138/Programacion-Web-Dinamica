
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CambioDuenio</title>
</head>
<body>
    <h2>Cambio de Dueño</h2>
    <form action="ACCION/accionCambioDuenio.php" method="post">
        <label for="patente">Patente: </label>    
        <input type="text" name="patente" id="inputPatente">
        <label for="nroDni">DNI del dueño: </label>    
        <input type="text" name="nroDni" id="inputDni">
        <input type="submit" value="Enviar">
    </form>
    
    <script src="JS/verificacionCambioDuenio.js"></script>
</body>
</html>