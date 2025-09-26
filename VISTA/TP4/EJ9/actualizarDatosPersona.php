<?php
require_once ('../../../CONTROL/TP4/C_Persona.php');
require_once ('../../estructura/Utilidades/funciones.php');
require_once ('../../estructura/Utilidades/links.php');

$objControladorPersona=new C_Persona();
$datos = data_submitted();
$modifico=$objControladorPersona->modificar($datos);

//
if($modifico){
    ?>
    <div class="container-md my-5 w-75">
        <div class="alert alert-info text-center" role="alert">
            ¡Persona modificada correctamente!
        </div>
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-10 col-md-6" id="persona">               
                <h6 class="display-6"> <?php echo $datos['apellido']?> <?php echo $datos['nombre']?></h6>
                <h6>Fecha de Nacimiento: <?php echo $datos['fechaNac']?></h6>
                <h6>Telefono: <?php echo $datos['telefono']?></h6>
                <h6>Domicilio: <?php echo $datos['domicilio']?></h6>
            </div>
        </div>
        <a class="btn btn-success p-2" style="background-color: #006efdff; border-color: #006efdff;" href="../../../menu.php">Volver al menú</a>
    </div>
<?php
}else{
    ?>
    <div class="container-md my-5 w-75">
    <div class="alert alert-danger text-center" role="alert">
        Error al modificar persona
    </div>
    <a class="btn btn-success p-2" style="background-color: #006efdff; border-color: #006efdff;" href="../../../menu.php">Volver al menú</a>
    </div>
    <?php
}

?>