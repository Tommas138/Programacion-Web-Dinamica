<?php
 //agregar head y footer
require_once('Estructura/Utilidades/links.php');
require_once('Estructura/Utilidades/funciones.php');
?>

<div class="container-md justify-content-center" style="height: 80vh;">
    <div class="text-center mt-3">
        <h1>Agregar Auto</h1>
    </div>

    <form action="ACCION/accionNuevoAuto.php" class="needs-validation m-3" novalidation id="form-nuevoAuto" name="form-nuevoAuto" method="post">
        <div class="row gap-2 justify-content-center">
            <div class="form-floating col-6 col-lg-4">
                <input type="text" class="form-control" id="marca" name="marca" pattern="[a-zA-Z]+\s?[a-zA-Z]*" required>
                <label for="floatingInput">Marca</label>
                <div class="invalid-feedback">
                    Debe ingresar una marca.
                </div>
                <div class="valid-feedback">
                    Todo esta correcto!
                </div>
            </div>
        </div>
        <div class="form-floating col-6 col-lg-4">
            <input type="text" class="form-control" id="modelo" name="modelo" pattern="[0-9]{1,10}" required>
            <label for="floatingInput">Modelo</label>
            <div class="invalid-feedback">
                Debe ingresar un modelo valido (solo números hasta 11 carácteres).
            </div>
            <div class="valid-feedback">
                Todo esta correcto!
            </div>
        </div>
        <div class="form-floating col-6 col-lg-4">
            <input type="text" class="form-control" id="patente" name="patente" pattern="[A-Z]{3}\s[0-9]{3}" required>
            <label for="floatingInput">Patente</label>
            <div class="invalid-feedback">
                Debe ingresar una patente válida (3 mayúsculas y 3 números separados por un espacio)
            </div>
            <div class="valid-feedback">
                Todo esta correcto!
            </div>
        </div>
        <div class="form-floating col-6 col-lg-4">
            <input type="text" class="form-control" id="dniDuenio" name="dniDuenio" pattern="[0-9]{3,10}$" required>
            <label for="floatingInput">Documento del dueño</label>
            <div class="invalid-feedback">
                Debe ingresar un documento valido (solo números hasta 10 carácteres).
            </div>
            <div class="valid-feedback">
                Todo esta correcto!
            </div>
        </div>
        <div>
            <div class="text-center mt-3">
                <button class="btn btn-secondary" type="reset">Borrar</button>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </form> 


</div>

<script src="JS/validacion.js"></script>

