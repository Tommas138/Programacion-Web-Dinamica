<!DOCTYPE html>

<html> 

<head>
<link href="style.css" rel="stylesheet">    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>


<body>
    

<?php 
    include_once ('ACCION/accion.php');


    $array = validador($_POST);
    $titulo = $array[0];
    $actores = $array[1];
    $director = $array[2];
    $guion = $array[3];
    $produccion = $array[4];
    $anio = $array[5];
    $nacionalidad = $array[6];
    $genero = $array[7];
    $duracion = $array[8];
    $restriccion = $array[9];
    $rutaImagen = $array[10];
    $esValido = $array[11];

    
?>
 <div class="alert alert-success p-4 m-4" role="alert" id= "peli">
    <a class="bi bi-x-lg" id="salir" href="inicio.html"></a>
        <h2 class="text-primary">La película introducida es</h2> <br>
        <p id="datos">
            <strong>Título:</strong> <?= htmlspecialchars($titulo) ?><br>
            <strong>Actores:</strong> <?= htmlspecialchars($actores) ?><br>
            <strong>Director:</strong> <?= htmlspecialchars($director) ?><br>
            <strong>Guión:</strong> <?= htmlspecialchars($guion) ?><br>
            <strong>Producción:</strong> <?= htmlspecialchars($produccion) ?><br>
            <strong>Año:</strong> <?= htmlspecialchars($anio) ?><br>
            <strong>Nacionalidad:</strong> <?= htmlspecialchars($nacionalidad) ?><br>
            <strong>Género:</strong> <?= htmlspecialchars($genero) ?><br>
            <strong>Duración:</strong> <?= htmlspecialchars($duracion) ?><br>
            <strong>Restricciones de edad:</strong> <?= htmlspecialchars($restriccion) ?><br>
        </p>
        <?php if ($esValido && !empty($rutaImagen)): ?>
            <strong>Imagen:</strong>
            <img src="<?= htmlspecialchars($rutaImagen) ?>" alt="Imagen pelicula" style="max-width: 100%; height: auto;">
            <?php else: ?>
                <p style="color: red;"> Error: no se pudo subir la imagen</p>
                <?php endif;?>
    </div>
</body>
</html>