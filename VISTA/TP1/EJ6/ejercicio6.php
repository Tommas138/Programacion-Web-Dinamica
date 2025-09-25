<html>
    <head>
        <title>FORMULARIO</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <?php
        require_once '../../estructura/head.php';
        ?>
    </head>
    <body>
        <?php
            require_once '../../estructura/header.php';
        ?>
    <a href="../../../menu.php">Volver al menú</a><br><br>
        <form id="form6" name="form6" method="POST" action="accion/destino.php">
            Nombre: <input name="nombre_form" type="text" id="nombre_form"> <br> <br>
            Apellido: <input name="apellido_form" type="text" id="apellido_form"> <br> <br>
            Edad: <input name="edad_form" type="text" id="edad_form"> <br> <br>
            Direccion: <input name="direccion_form" type="text" id="direccion_form"> <br> <br>

            <h3>Nivel de estudios</h3>
            <input name="estudios" type="radio" value="1"> No tiene estudios <br>
            <input name="estudios" type="radio" value="2"> Estudios primarios <br>
            <input name="estudios" type="radio" value="3"> Estudios secundarios <br>

            <h3>Sexo</h3>
            <input name="sexo" type="radio" value="M"> Masculino <br>
            <input name="sexo" type="radio" value="F"> Femenino <br>
            <input name="sexo" type="radio" value="O"> Otro <br>

            <h3>Deportes</h3>
            <input name="deportes[]" type="checkbox" value="Futbol"> Futbol <br>
            <input name="deportes[]" type="checkbox" value="Basquet"> Basquet <br>
            <input name="deportes[]" type="checkbox" value="Tenis"> Tenis <br>
            <br>
            <br>
                        <input name="submit" type="submit" value="Aceptar">

        </form>
        <?php
    require_once '../../estructura/footer.php';
    ?>
    </body>
</html>