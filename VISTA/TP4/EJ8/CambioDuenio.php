
<?php
include_once('../../estructura/Utilidades/links.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ8 Cambio de Dueño</title>
     <link rel="stylesheet" href="../../CSS/styles.css">
    
    
</head>
<body class="wrapper">
    <?php
    include_once '../../estructura/header.php';
    ?>
    <div class="content-wrap">
        <div class="col-lg-12 col-md-12 col-sm-10 d-flex justify-content-center align-items-center flex-column" id="principal">
            <h2>Cambio de Dueño</h2>
            <form action="ACCION/accionCambioDuenio.php" method="post" class="needs-validation" novalidate>
                <div class="row mb-3">
                    <div class="form-floating col-12 col-md-12">
                        <input type="text" class="form-control" id="validationCustom01" name="patente" pattern="([A-Z]{3}\s[0-9]{3})|([A-Z]{2}\s[0-9]{3}\s[A-Z]{2})" required>
                        <label for="validationCustom01">Patente</label>
                        <div class="invalid-feedback">
                            Debe ingresar una patente válida en formato antiguo (3 letras y 3 números, Ej: ABC 123) O en formato nuevo (2 letras, 3 números, y 2 letras, Ej: ABC 123 DE).
                        </div>
                        <div class="valid-feedback">
                            Todo esta correcto!
                        </div>
                    </div> 
                </div> 
                <div class="row mb-3">
                    <div class="form-floating col-8 col-md-12">
                        <input type="text" class="form-control" name="nroDni" id="validationCustom02" minlength="8" required>
                        <label for="validationCustom02" class="form-label">DNI del dueño: </label>    
                        <div class="invalid-feedback">
                            Debe ingresar un DNI valido
                        </div>
                        <div class="valid-feedback">
                            Todo esta correcto!
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <input type="submit" class="btn btn-success p-2" style="background-color: #42d665; border-color: #42d665;" value="Enviar">
                    <a class="btn btn-success p-2" style="background-color: #006efdff; border-color: #006efdff;" href="../../../menu.php">Volver al menú</a>
                </div>
            </form>
        </div>
    </div>



   
<?php
include_once('../../estructura/footer.php');
?>
 
</body>


</html>


