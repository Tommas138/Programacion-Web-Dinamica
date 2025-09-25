<script src="../JS/validacion.js"></script>
<?php

require_once(__DIR__ . '/../../CONTROL/TP4/C_Persona.php');
require_once(__DIR__ . '/../Estructura/Utilidades/funciones.php');
require_once(__DIR__ . '/../Estructura/Utilidades/links.php');



$objControladorPersona=new C_Persona();
$datos = data_submitted();
$dniPersona=$datos["dni"][0];
$param['nroDni']=$dniPersona;
//Busca la persona según el dni ingresado:
$personaDatos=$objControladorPersona->buscar($param);

?>
<div class="container-md m-5 mx-auto">
            <form method="post" action="../actualizarDatosPersona.php" class="needs-validation" novalidate>
            <div class="row justify-content-center g-3 px-5">
            <div class="col-6 col-lg-4">
                    <label for="nroDni" class="form-label">DNI</label>
                    <input type="number" class="form-control" 
                    value=<?php echo $personaDatos[0]->getNroDni()?> name="nroDni" id="nroDni" readonly>
                </div>
                <div class="col-6 col-lg-4">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $personaDatos[0]->getNombre()?>" name="nombre" id="nombre" 
                            pattern="[a-z,A-Z]{3,20}$" required>
                    <div class="valid-feedback">
                    Se ve bien.
                    </div>
                    <div class="invalid-feedback">
                    Por favor ingrese un nombre válido.
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $personaDatos[0]->getApellido()?>" name="apellido" id="apellido" 
                    pattern="[a-z,A-Z]{3,20}$" required>
                    <div class="valid-feedback">
                    Se ve bien.
                    </div>
                    <div class="invalid-feedback">
                    Por favor ingrese un nombre válido.
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" 
                    value="<?php echo $personaDatos[0]->getFechaNac()?>" name="fechaNac" id="fechaNac" required>
                    <div class="valid-feedback">
                    Se ve bien.
                    </div>
                    <div class="invalid-feedback">
                    Por favor ingrese una fecha.
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $personaDatos[0]->getTelefono()?>" name="telefono" id="telefono" 
                            pattern="(\+34)?([0-9]{3})(\-)?([0-9]){8,10}" required>
                    <div class="valid-feedback">
                    Se ve bien.
                    </div>
                    <div class="invalid-feedback">
                    Por favor ingrese un teléfono válido.
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $personaDatos[0]->getDomicilio()?>" name="domicilio" id="domicilio" 
                            pattern="[a-z A-Z 0-9]{5,30}$" required>
                    <div class="valid-feedback">
                    Se ve bien.
                    </div>
                    <div class="invalid-feedback">
                    Por favor provea una dirección.
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-3">MODIFICAR</button>
                </div>
            </div>
            
            </form>
</div>
<script src="../Estructura/Utilidades/validacion.js"></script>