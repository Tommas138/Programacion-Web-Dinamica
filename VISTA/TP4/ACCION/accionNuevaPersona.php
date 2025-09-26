<?php

require_once '../../../CONTROL/TP4/C_Auto.php';
require_once '../../../CONTROL/TP4/C_Persona.php';
require_once '../../../MODELO/TP4/Persona.php';
require_once '../../../MODELO/TP4/Auto.php';

$datos = [];
$datos['nroDni'] = isset($_POST['nroDni']) ? trim($_POST['nroDni']) : '';
$datos['apellido'] = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
$datos['nombre'] = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$datos['fechaNac'] = isset($_POST['fechaNac']) ? $_POST['fechaNac'] : '';
$datos['telefono'] = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
$datos['domicilio'] = isset($_POST['domicilio']) ? trim($_POST['domicilio']) : '';

$banderaPersona = false;
$c_Persona = new C_Persona();
$nuevaPersona = $c_Persona->alta($datos);

if($nuevaPersona){
    $banderaPersona = true;
}

$datos = null;