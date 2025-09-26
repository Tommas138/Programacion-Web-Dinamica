<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="VISTA/CSS/styles.css">
</head>    

<?php
    require_once 'VISTA/estructura/head.php';
?>
<body class="bg-dark vh-100">
    <div class="d-flex justify-content-center align-items-center flex-column mb-4 bg-white">

    <?php
        require_once 'VISTA/estructura/header.php';
    ?>
    
    <div class="p-4" style="width: 90%; max-width: 500px;">
        <h2 class="text-center mb-4">
            <i class="bi bi-collection me-2"></i>Menú de Trabajos Prácticos
        </h2>
        
        <!-- Carrusel de TPs -->
        <div id="tpCarousel" class="carousel slide" data-bs-ride="false">
            
            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#tpCarousel" data-bs-slide-to="0" class="active bg-primary"></button>
                <button type="button" data-bs-target="#tpCarousel" data-bs-slide-to="1" class="bg-primary"></button>
                <button type="button" data-bs-target="#tpCarousel" data-bs-slide-to="2" class="bg-primary"></button>
                <button type="button" data-bs-target="#tpCarousel" data-bs-slide-to="3" class="bg-primary"></button>
            </div>

            <!-- Slides del carrusel -->
            <div class="carousel-inner">
                <!-- Controles de navegación (flechas) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#tpCarousel" data-bs-slide="prev">
                    <div class="rounded-circle p-2">
                        <span class="carousel-control-prev-icon"></span>
                    </div>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#tpCarousel" data-bs-slide="next">
                    <div class="rounded-circle p-2">
                        <span class="carousel-control-next-icon"></span>
                    </div>                
                </button>    
                <!-- TP1 -->
                <div class="carousel-custom carousel-item active">
                    <div class="d-flex gap-3 flex-column align-items-center">
                        <div class="card-header text-black text-center w-100">
                            <h4 class="mb-0">
                                <i class="bi bi-1-square me-2"></i>Trabajo Práctico 1
                            </h4>
                        </div>
                        <div class="card-body w-100 d-flex justify-content-center align-items-center p-5">
                            <div class="list-group list-group-flush">
                                <a href="VISTA/TP1/EJ1/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-primary"></i> Ejercicio 1
                                </a>
                                <a href="VISTA/TP1/EJ2/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-primary"></i> Ejercicio 2
                                </a>
                                <a href="VISTA/TP1/EJ6/ejercicio6.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-primary"></i> Ejercicio 6
                                </a>
                                <a href="VISTA/TP1/EJ7/inicio.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-primary"></i> Ejercicio 7
                                </a>
                                <a href="VISTA/TP1/EJ8/inicio.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-primary"></i> Ejercicio 8
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TP2 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3 flex-column align-items-center">
                        <div class="card-header text-black text-center w-100">
                            <h4 class="mb-0">
                                <i class="bi bi-2-square me-2"></i>Trabajo Práctico 2
                            </h4>
                        </div>
                        <div class="card-body w-100 d-flex justify-content-center align-items-center p-5">
                            <div class="list-group list-group-flush">
                                <a href="VISTA/TP2/EJ2/EJ2/ej2.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-success"></i> Ejercicio 2
                                </a>
                                <a href="VISTA/TP2/EJ2/EJ3/ejercicio3.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-success"></i> EJ3_TP1
                                </a>
                                <a href="VISTA/TP2/EJ2/EJ4/ej4.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-success"></i> EJ4_TP1
                                </a>
                                <a href="VISTA/TP2/EJ2/EJ5/ejercicio5.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-success"></i> EJ5_TP1
                                </a>
                                <a href="VISTA/TP2/EJ2/EJ6/inicio.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-success"></i> EJ6_TP1
                                </a>
                                <a href="VISTA/TP2/EJ2/EJ7/ejercicio2-7.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-success"></i> EJ7_TP1
                                </a>
                                <a href="VISTA/TP2/EJ2/EJ8/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-check-circle me-2 text-success"></i> EJ8_TP1
                                </a>
                                <a href="VISTA/TP2/EJ3/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-success"></i> Ejercicio 3
                                </a>
                                <a href="VISTA/TP2/EJ4/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-success"></i> Ejercicio 4
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TP3 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3 flex-column align-items-center">
                        <div class="card-header text-black text-center w-100">
                            <h4 class="mb-0">
                                <i class="bi bi-3-square me-2"></i>Trabajo Práctico 3
                            </h4>
                        </div>
                        <div class="card-body w-100 d-flex justify-content-center align-items-center p-5">
                            <div class="list-group list-group-flush">
                                <a href="VISTA/TP3/EJ1/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-warning"></i> Ejercicio 1
                                </a>
                                <a href="VISTA/TP3/EJ2/index.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-warning"></i> Ejercicio 2
                                </a>
                                <a href="VISTA/TP3/EJ3/inicio.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text me-2 text-warning"></i> Ejercicio 3
                                </a>
                                <div class="text-center mt-4 text-muted">
                                <i class="bi bi-info-circle me-2"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TP4 -->
                <div class="carousel-item">
                    <div class="d-flex gap-3 flex-column align-items-center">
                        <div class="card-header text-black text-center w-100">
                            <h4 class="mb-0">
                                <i class="bi bi-4-square me-2"></i>Trabajo Práctico 4
                            </h4>
                        </div>
                        <div class="card-body w-100 d-flex justify-content-center align-items-center p-5">
                            <div class="list-group list-group-flush">
                                <a href="VISTA/TP4/EJ3/verAutos.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-car-front me-2 text-danger"></i> EJ3 - Ver Autos
                                </a>
                                <a href="VISTA/TP4/EJ4/buscarAuto.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-search me-2 text-danger"></i> EJ4 - Buscar Auto
                                </a>
                                <a href="VISTA/TP4/EJ5/listaPersonas.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-people me-2 text-danger"></i> EJ5 - Lista Personas
                                </a>
                                <a href="VISTA/TP4/EJ6/nuevaPersona.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-person-plus me-2 text-danger"></i> EJ6 - Nueva Persona
                                </a>
                                <a href="VISTA/TP4/EJ7/nuevoAuto.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-plus-square me-2 text-danger"></i> EJ7 - Nuevo Auto
                                </a>
                                <a href="VISTA/TP4/EJ8/cambioDuenio.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-arrow-left-right me-2 text-danger"></i> EJ8 - Cambio Dueño
                                </a>
                                <a href="VISTA/TP4/EJ9/buscarPersona.php" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <i class="bi bi-person-search me-2 text-danger"></i> EJ9 - Buscar Persona
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
        require_once 'VISTA/estructura/footer.php';
    ?>

</body>
</html>