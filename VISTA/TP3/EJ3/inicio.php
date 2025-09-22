<html>

<head>
    <title>CINEM@S</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
    include_once '../../estructura/head.php';
    ?>
    <link href="style.css" rel="stylesheet">
</head>


<body>
    <?php
        include_once '../../estructura/header.php';
    ?>
    <main class="container mt-5">
        <a class="btn btn-primary"  href="../../../menu.php">Volver al menú</a><br><br> 
        <section class="card shadow p-4 mb-2">
            <form class="needs-validation" novalidate action="proceso.php" id="form1" method="POST" enctype="multipart/form-data">
                <h5 class="mb-4 text-primary"><i class="bi bi-film"></i>Cinem@s</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Titulo"  required name="titulo">
                        <div class="invalid-feedback">Ingrese un titulo</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="actores">Actores</label>
                        <input type="text" class="form-control" id="actores" placeholder="Actores"  required name="actores">
                        <div class="invalid-feedback">Ingrese un actor</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="director">Director</label>
                        <input type="text" class="form-control" id="director" placeholder="Director"  required name="director">
                        <div class="invalid-feedback">Ingrese un director</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="guion">Guion</label>
                        <input type="text" class="form-control" id="guion" placeholder="Guion"  required name="guion">
                        <div class="invalid-feedback">Ingrese un gion</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="produccion">Produccion</label>
                        <input type="text" class="form-control" id="produccion" required name="produccion">
                        <div class="invalid-feedback">Ingrese una produccion</div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="anio">Año</label>
                        <input type="number" class="form-control" id="anio" required name="anio" max="9999">
                        <div class="invalid-feedback">Ingrese un anio</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" required name="nacionalidad">
                        <div class="invalid-feedback">Ingrese una nacionalidad</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="genero">Genero</label>
                        <select class="custom-select d-block w-100" id="genero" required name="genero">
                            <option selected disabled value="">Seleccionar</option>
                            <option value="comedia">Comedia</option>
                            <option value="accion">Acción</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romantica">Romantica</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otra">Otra</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="duracion">Duracion</label>
                        <input type="number" class="form-control" id="duracion" max="999"  name="duracion"   value required>
                        <small class="text-muted">(minutos)</small>

                        <div class="invalid-feedback">Ingrese la duracion</div>
                    </div>
                    <div class="col-md-6" id=restricciones>
                        <h4>Restricciones de edad</h4>
                        <input id="radio" name="radio" type="radio" class="form-check-input" value="1">
                        <label class="custom-control-label" for="atp">Todo publico</label>
                        <input id="radio" name="radio" type="radio" class="form-check-input" value="2">
                        <label class="custom-control-label" for="m7">Mayor de 7 años</label>
                        <input id="radio" name="radio" type="radio" class="form-check-input" value="3">
                        <label class="custom-control-label" for="m18">Mayor de 18 años</label>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="validationTextarea" class="form-label">Sinopsis</label>
                    <textarea class="form-control" id="validationTextarea" required name="validationTextarea"></textarea>
                    <div class="invalid-feedback">
                        Ingrese una sinopsis.
                    </div>
                </div>
                <div class="row">
                    <input name="miArchivo" id="miArchivo" type="file" required>  
                <div class="d-flex gap-2" id="botones">
                      <button class="btn btn-primary" type="submit">Enviar</button>
                        <button class="btn" type="reset" id="btn-borrar">Borrar</button>
                        
                </div>
                </div>


            </form>
        </section>
    </main>

    <?php
    include_once '../../estructura/footer.php';
    ?>
    <script src="JS/validacionPropia.js"></script>
     <script src="JS/script.js"></script>
</body>

</html>