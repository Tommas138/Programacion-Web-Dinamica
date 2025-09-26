<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../CSS/stylesNuevaPersona.css">
</head>
<body style="margin-top: -19px;">
    <?php
    require_once('../../estructura/header.php');
    ?>
    <div class="container py-5">
        <div class="form-container">
            <form class="needs-validation" id="formPersona" action="ACCION/accionNuevaPersona.php" method="POST" novalidate>
                <div class="form-group" id="dniInput">
                    <label for="nroDni">DNI <span class="required">*</span></label>
                    <input type="text" id="nroDni" name="nroDni" required>
                    <div class="error-message" id="errorDni">El DNI debe contener solo números y tener entre 7 y 8 dígitos</div>
                </div>

                <div class="form-group" id="apellidoInput">
                    <label for="apellido">Apellido <span class="required">*</span></label>
                    <input type="text" id="apellido" name="apellido" required>
                    <div class="error-message" id="errorApellido">El apellido debe contener solo letras y espacios</div>
                </div>

                <div class="form-group" id="nombreInput">
                    <label for="nombre">Nombre <span class="required">*</span></label>
                    <input type="text" id="nombre" name="nombre" required>
                    <div class="error-message" id="errorNombre">El nombre debe contener solo letras y espacios</div>
                </div>

                <div class="form-group" id="fechaNacInput">
                    <label for="fechaNac">Fecha de Nacimiento <span class="required">*</span></label>
                    <input type="date" id="fechaNac" name="fechaNac" required>
                    <div class="error-message" id="errorFecha">La fecha de nacimiento es obligatoria</div>
                </div>

                <div class="form-group" id="telInput">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono">
                    <div class="error-message" id="errorTelefono">El teléfono debe contener solo números, espacios y guiones</div>
                </div>

                <div class="form-group" id="domicilioInput">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" id="domicilio" name="domicilio">
                </div>

                <button href="ACCION/accionNuevaPersona.php" type="submit" class="btn-submit">Registrar Persona</button>
                <a class="btn btn-primary my-3" style="background-color: #006efdff; border-color: #006efdff;" href="../../../menu.php">Volver al menú</a>
            </form>
        </div>
    </div>
    <script src="../JS/validacionNuevaPersona.js"></script>
    <?php

require_once('../../estructura/footer.php');

?>
</body>



</html>