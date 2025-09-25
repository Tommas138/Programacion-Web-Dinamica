<?php
//Insertar el header 
include_once(__DIR__ . '/../Estructura/Utilidades/links.php');
include_once(__DIR__ . '/../Estructura/Utilidades/funciones.php');
include_once('../../CONTROL/C_Auto.php');
include_once('../../CONTROL/C_Persona.php');

$datos = data_submitted();
$dni = $datos['dniDuenio'];
$objControlPersona = new C_Persona();
$existeDni = $objControlPersona->existeDni($dni);
$objControlAuto = new C_Auto();
$existePatente = $objControlAuto->existePatente($datos['patente']);
?>

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
                    No existe la persona con dicho dni, si desea crear un nuevo registro de persona, seleccioine el siguiente boton.
                    <a type="button" class="btn btn-primary" href="../NuevaPersona.php"> Crear Persona Nueva </a>
                    Tambien puede ver <a href="../listaPersonas.php">aqui</a> las persona registradas.
            <?php 
        }

    ?>
</div>

<?php
//Insertar el footer
?>
