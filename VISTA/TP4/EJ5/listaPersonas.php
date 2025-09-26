<?php

require_once('../../../MODELO/TP4/Persona.php');
require_once('../Estructura/Utilidades/funciones.php');
require_once('../Estructura/Utilidades/links.php');

$arrPersonas = (new C_Persona())->buscar(NULL);
$cantPersonas = count($arrPersonas);
?>

    <div class="container-md m-4 mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NroDoc</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Domicilio</th>
                </tr>
            </thead>
        <h1>
            <?php
            $i = 0;
            while ($i<$cantPersonas) {
                ?>
                <tbody>
                    <tr>
                        <th><?php echo $arrPersonas[$i]->getNroDni()?></th>
                        <th><?php echo $arrPersonas[$i]->getNombre()?></th>
                        <th><?php echo $arrPersonas[$i]->getApellido()?></th>
                        <th><?php echo $arrPersonas[$i]->getFechaNac()?></th>
                        <th><?php echo $arrPersonas[$i]->getTelefono()?></th>
                        <th><?php echo $arrPersonas[$i]->getDomicilio()?></th>
                    </tr>
                </tbody>
            <?php
            $i++;
            }
            ?>
        </h1>

        </table>
        </div>
    <div class="container-md">
        <div class="row justify-content-center">
            <form class="w-50 mt-3" action="ACCION/autosPersona.php" method="post">
            <h6>Seleccione el dni de la persona a buscar</h6>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                name="dni[]" id="dni">
            <?php
                $i = 0;
            while ($i<$cantPersonas) {
                echo "<option value=".$arrPersonas[$i]->getNroDni().">"
                .$arrPersonas[$i]->getNroDni()."</option>";
                $i++;
            };
            ?>
            </select>
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-3">VER AUTOS</button>
        </div>
        </form>
        </div>
        </div>

        

                


