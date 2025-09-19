<!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <?php
            include_once '../../estructura/header.php';
        ?>
        <a href="../../../menu.php">Volver al menú</a>
        <h1>Ingrese un numero: </h1>
        <form action="accion/vernumero.php" method="POST">
            <label for="numero">Numero:</label>
            <input type="number" id="numero" name="numero">
            <button type="submit">Enviar</button>
        </form>
    <?php
    include_once '../../estructura/footer.php';
    ?>
    </body>
</html>
