<?php
//Insertar el header 
require_once(__DIR__ . '/../../../estructura/Utilidades/links.php');
require_once(__DIR__ . '/../../../estructura/Utilidades/funciones.php');
require_once('../../../../../TP4/CONTROL/C_Auto.php');
require_once('../../../../../TP4/CONTROL/C_Persona.php');

$datos = data_submitted();
try {
    if (!isset($datos['dniDuenio']) || !isset($datos['patente'])) {
        throw new exception('Falta DNI o Patente');
    }
$dni = $datos['dniDuenio'];
$objControlPersona = new C_Persona();
$existeDni = $objControlPersona->existeDni($dni);
$objControlAuto = new C_Auto();
$existePatente = $objControlAuto->existePatente($datos['patente']);
} catch (exception $e) {
}
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ8 Cambio de Dueño</title>
     <link rel="stylesheet" href="../../CSS/styles.css">
    
    
</head>
<?php
require_once('../../../estructura/header.php');
?>
<body>
    <div class="container-md m-5 justify-content-center" style="display:flex">
        <?php
        
            if($existeDni) {
                if(!$existePatente) {
                    $exito = $objControlAuto->alta($datos);
                    if($exito) {
                        ?>
                        <div class="w-50 text-center">
                            <div class="alert alert-success">
                                Se cargo el nuevo auto con exito!
                            </div>
                        </div>
                        <?php
                    }else {
                        ?>
                        <div class="w-50 text-center">
                            <div class="alert alert-warning">
                                Error, no se pudo cargar el auto con exito.
                            </div>
                        </div>
                        <?php
                    } 
                } else {
                    ?>
                    <div class="w-50 text-center">
                        <div class="alert alert-warning">
                            La patente ingresada ya existe!, Si desea cambiar el dueño por favor haga click en el siguiente boton.
                        </div>
                        <a type="button" class="btn btn-primary" href="../CambioDuenio.php">Cambiar Dueño</a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="w-50 text-center">
                    <div class="alert alert-warning" role="alert">
                        No existe la persona con dicho dni, si desea crear un nuevo registro de persona, seleccione el siguiente boton.
                        <a type="button" class="btn btn-primary" href="../../EJ6/NuevaPersona.php"> Crear Persona Nueva </a>
                        Tambien puede ver <a href="../../EJ5/listaPersonas.php">aqui</a> las persona registradas.
                <?php 
            }
            ?>
        </div>
        <a class="btn btn-primary my-3" style="background-color: #006efdff; border-color: #006efdff;" href="../../../../menu.php">Volver al menú</a>
    </body>
<?php
require_once('../../../estructura/header.php');
?>

