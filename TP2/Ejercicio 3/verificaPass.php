<?php
// lista
$usuarios = [
    ["usuario" => "juan", "clave" => "1234"],
    ["usuario" => "maria", "clave" => "abcd"],
    ["usuario" => "admin", "clave" => "admin123"]
];

// data del formulario
$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada = $_POST['clave'] ?? '';

$valido = false;

foreach ($usuarios as $user) {
    if ($user["usuario"] === $usuarioIngresado && $user["clave"] === $claveIngresada) {
        $valido = true;
        break;
    }
}

if ($valido) {
    echo "<h2>Bienvenido, $usuarioIngresado</h2>";
} else {
    echo "<h2 style='color:red;'>Usuario o contraseña incorrectos ❌</h2>";
}
?>
