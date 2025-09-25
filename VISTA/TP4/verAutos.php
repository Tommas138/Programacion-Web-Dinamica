<?php

include_once('../CONTROL/C_Auto.php');
include_once('Estructura/Utilidades/links.php');


$objControlAuto = new C_Auto();
$arrAutos = $objControlAuto->buscar(NULL);
$i = 0;

if ($arrAutos != null) {
    $cantAutos = count($arrAutos);
} else {
    $cantAutos = -1;
}
?>

<div class="container-md my-4 mt-5">


<?php 
if ($cantAutos != -1 ) {
    ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Patente</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Duenio</th>
        </tr>
    </thead>
    <?php
    while ($i < $cantAutos) {
        ?>
        <tbody>
            <tr>
                <th><?php echo $arrAutos[$i]->getPatente()?></th>
                <td><?php echo $arrAutos[$i]->getMarca()?></th>
                <td><?php echo $arrAutos[$i]->getModelo()?></ht>
                <td><?php echo $arrAutos[$i]->getObjDuenio()->getNombre() . " " . $arrAutos[$i]->getObjDuenio()->getApellido() ?></td>
            </tr>
        </tbody>
        <?php
        $i++;
    }
    } else {
        ?>
        <div class="alert alert-warning" role="alert">
            No existen autos cargados
        </div>
    <?php
    }
    ?>

</div>
</div>

