<!DOCTYPE html>
<html>
    <head>
</head>

<body>

<?php


if ($_POST) {
$numeroFormulario = $_POST['numero'];
if ($numeroFormulario > 0) {
    echo "<h3 class='positivo'>El numero es positivo </h3>";
}     elseif ($numeroFormulario <0) {
        echo "<h3 class='negativo'>El numero es negativo</h3>";
    } else {
        echo "<h3 class='cero'>El numero es CERO</h3>";
    }
} else {
    echo "No se recibieron datos<br>";
}

?>
<a href="ejercicio1.php">Volver al formulario </a>
</body>
</html>
