<?php
include_once '../../../CONTROL/TP1/EJ7/Calculadora.php';
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

echo "<h2>Resultado</h2>";

$calculadora = new Calculadora($num1, $num2, $operacion);
$calculadora->calcular();

if($calculadora->getError()) {
    echo "Error: " . $calculadora->getError() . "<br>";
} 
else {
    echo "Resultado: " . $calculadora->getResultado() . "<br>";
}
echo "Volver a <a href='./inicio.php'>la calculadora</a>.";
?>