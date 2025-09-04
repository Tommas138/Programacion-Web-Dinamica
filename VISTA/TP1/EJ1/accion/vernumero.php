<!DOCTYPE html>
<html>
    <head>
</head>

<body>

<?php


include_once('../../../../CONTROL/TP1/EJ1/numero.php');


if ($_POST) {
$numeroFormulario = $_POST['numero'];

$resultado = new Numero();

$tipo = $resultado->tipoNumero($numeroFormulario);

switch ($tipo) {
    case 0:
        $salida = 'El numero es cero';
        break;
    case 1:
        $salida = 'El numero es positivo';
        break;
    case -1:
        $salida = 'El numero es negativo';
        break;  
}

}
?>
<?php
echo $salida;
?>
<a href="../../../VISTA/TP1/EJ1/ejercicio1.html">Volver al formulario </a>
</body>
</html>
