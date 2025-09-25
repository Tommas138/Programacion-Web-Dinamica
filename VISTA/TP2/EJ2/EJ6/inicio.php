<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="js/validacion.js"></script>
    <?php
    require_once '../../../estructura/head.php';
    ?>
</head>
<body>
    <?php
        require_once '../../../estructura/header.php';
    ?>
    <a href="../../../../menu.php">Volver al menú</a>
    <h2>Ingrese sus datos</h2>
    <form method="post" action="./ACCION/saludo.php">
        <label>Nombre: <input type="" name="Nombre" required></label><br>
        <label>Apellido: <input type="text" name="Apellido" required></label><br>
        <label>Edad: <input type="number" name="Edad" min="12" max="120" required></label><br>
        <div>
            <label>Direccion: <input type="text" name="Direccion" required></label><br>
            <label>Numero: <input type="number" name="numeroDireccion" required></label><br>
        </div>
        
        <label>Nivel de estudio:</label><br>
        <input type="radio" name="NivelEstudio" value="1"> No tiene estudios<br>
        <input type="radio" name="NivelEstudio" value="2"> Estudios primarios<br>
        <input type="radio" name="NivelEstudio" value="3"> Estudios secundarios<br>
        
        <label>Sexo:</label>
        <select name="Sexo" required>
            <option value="">Seleccione...</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select><br>

        <label>Deportes que practica:</label><br>
        <input type="checkbox" name="Deportes[]" value="Futbol"> Futbol<br>
        <input type="checkbox" name="Deportes[]" value="Basket"> Basket<br>
        <input type="checkbox" name="Deportes[]" value="Tennis"> Tennis<br>
        <input type="checkbox" name="Deportes[]" value="Voley"> Voley<br>
        
        <input type="submit" value="Enviar">
    </form>
    <?php
    require_once '../../../estructura/footer.php';
    ?>
</body>
</html>