<?php
session_start();

require_once(__DIR__ . '/../../../../CONTROL/TP4/C_Auto.php');
require_once(__DIR__ . '/../../../../CONTROL/TP4/C_Persona.php');
require_once '../../../estructura/header.php';

// Recopilar datos del formulario
$datos = [];
$datos['nroDni'] = isset($_POST['nroDni']) ? trim($_POST['nroDni']) : '';
$datos['apellido'] = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
$datos['nombre'] = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$datos['fechaNac'] = isset($_POST['fechaNac']) ? $_POST['fechaNac'] : '';
$datos['telefono'] = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
$datos['domicilio'] = isset($_POST['domicilio']) ? trim($_POST['domicilio']) : '';

$banderaPersona = false;
$mensajeError = '';



try {
    $c_Persona = new C_Persona();
    $nuevaPersona = $c_Persona->alta($datos);
    
    if($nuevaPersona) {
        $banderaPersona = true;
        // Guardar los datos en la sesión para mostrarlos en la página de resultado
        $_SESSION['resultado_registro'] = [
            'exito' => true,
            'datos' => $datos,
            'mensaje' => 'Persona registrada exitosamente'
        ];
    } else {
        $_SESSION['resultado_registro'] = [
            'exito' => false,
            'datos' => $datos,
            'mensaje' => 'Error al registrar la persona. Verifique que el DNI no esté duplicado.'
        ];
    }
} catch (Exception $e) {
    $_SESSION['resultado_registro'] = [
        'exito' => false,
        'datos' => $datos,
        'mensaje' => 'Error del sistema: ' . $e->getMessage()
    ];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php
require_once('../../estructura/header.php');
?>
    <body>
        <div class="result-container">
            <div class="result-card">
                <?php
                if ($banderaPersona) {
                    echo '
                    <i class="fas fa-check-circle success-icon"></i>
                    <h1 class="result-title success-title">¡Registro Exitoso!</h1>
                    <p class="result-message">La persona ha sido registrada correctamente en el sistema.</p>
                    
                    <div class="person-info">
                        <h3 class="mb-3"><i class="fas fa-user me-2"></i>Datos Registrados</h3>
                        <div class="info-row">
                            <span class="info-label">DNI:</span>
                            <span class="info-value">' . htmlspecialchars($datos['nroDni']) . '</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Apellido:</span>
                            <span class="info-value">' . htmlspecialchars($datos['apellido']) . '</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Nombre:</span>
                            <span class="info-value">' . htmlspecialchars($datos['nombre']) . '</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Fecha de Nacimiento:</span>
                            <span class="info-value">' . date('d/m/Y', strtotime($datos['fechaNac'])) . '</span>
                        </div>';
                    
                    if (!empty($datos['telefono'])) {
                        echo '
                        <div class="info-row">
                            <span class="info-label">Teléfono:</span>
                            <span class="info-value">' . htmlspecialchars($datos['telefono']) . '</span>
                        </div>';
                    }
                    
                    if (!empty($datos['domicilio'])) {
                        echo '
                        <div class="info-row">
                            <span class="info-label">Domicilio:</span>
                            <span class="info-value">' . htmlspecialchars($datos['domicilio']) . '</span>
                        </div>';
                    }
                    
                    echo '
                    </div>
                    
                    <div class="mt-4">
                        <a href="nuevaPersona.php" class="btn-custom">
                            <i class="fas fa-plus me-2"></i>Registrar Otra Persona
                        </a>
                        <a href="../index.php" class="btn-custom btn-secondary-custom">
                            <i class="fas fa-home me-2"></i>Volver al Inicio
                        </a>
                    </div>';
                    
                } else {
                    echo '
                    <i class="fas fa-times-circle error-icon"></i>
                    <h1 class="result-title error-title">Error en el Registro</h1>
                    <p class="result-message">
                        No se pudo registrar la persona en el sistema. 
                        Por favor, verifique los datos ingresados e intente nuevamente.
                    </p>
                    
                    <div class="person-info">
                        <h3 class="mb-3 text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Posibles Causas del Error</h3>
                        <ul class="text-start">
                            <li>El DNI ya existe en el sistema</li>
                            <li>Formato de datos incorrecto</li>
                            <li>Error de conexión con la base de datos</li>
                            <li>Campos obligatorios incompletos</li>
                        </ul>
                    </div>
                    
                    <div class="mt-4">
                        <a href="javascript:history.back()" class="btn-custom">
                            <i class="fas fa-arrow-left me-2"></i>Volver e Intentar Nuevamente
                        </a>
                        <a href="../../../../menu.php" class="btn-custom btn-secondary-custom">
                            <i class="fas fa-home me-2"></i>Volver al Inicio
                        </a>
                    </div>';
                }
                ?>
            </div>
        </div>
    </body>
</body>
</html>


<?php
require_once('../../../estructura/footer.php');
?>
