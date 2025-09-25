<?php
require_once '../../../../CONTROL/TP1/EJ7/Calculadora.php';

if ($_POST) {   
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
} else if ($_GET) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];
}
echo "<h2>Resultado</h2>";

$calculadora = new Calculadora($num1, $num2, $operacion);
$calculadora->calcular();

if($calculadora->getError()) {
    echo "Error: " . $calculadora->getError() . "<br>";
} 
else {
    echo "Resultado: " . $calculadora->getResultado() . "<br>";
}
echo "Volver a <a href='../../../../VISTA/TP1/EJ7/inicio.php'>la calculadora</a>.";
?>