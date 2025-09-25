<html>
<head>
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
<!--Revisar con lian--->
    <?php
    require_once '../../estructura/head.php';
    ?>
</head>
<body>

    <?php
        require_once '../../estructura/header.php';
    ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header text-center border-0 bg-white">
                    <h4 class="fw-normal">Member Login</h4>
                </div>
                <div class="card-body">
                    <form action="ACCION/verificaPass.php" method="POST" class="needs-validation" id="form1" novalidate>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text" id="user-span">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control border-start-0" id="usuario" placeholder="Username" name="usuario" required>
                                <div class="invalid-feedback">
                                    Por favor, elige un nombre de usuario.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group" id="pass-cont">
                                <span class="input-group-text" id="pass-span">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control border-start-0" id="password" placeholder="Password" name="password" required>
                                <div class="invalid-feedback" id="passwordError">
                                    Debe ser de 8-20 caracteres de longitud.
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success p-2" style="background-color: #42d665; border-color: #42d665;">Login</button>
                            <a class="btn btn-success p-2" style="background-color: #42d665; border-color: #42d665;" href="../../../menu.php">Volver al menú</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="JS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
    <?php
        require_once '../../estructura/footer.php';
    ?>
</html>
