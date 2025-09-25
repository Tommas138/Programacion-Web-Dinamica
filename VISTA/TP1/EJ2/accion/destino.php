<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <?php

        require_once('../../../../CONTROL/TP1/EJ2/Calculo.php');
        if ($_GET) {
            $horasDinamica = [];
            $horasLunes = intval($_GET['horario_lunes']);
            $horasMartes = intval($_GET['horario_martes']);
            $horasMiercoles = intval($_GET['horario_miercoles']);
            $horasJueves = intval($_GET['horario_jueves']);
            $horasViernes = intval($_GET['horario_viernes']);
        } else if ($_POST) {
            $horasDinamica = [];
            $horasLunes = intval($_POST['horario_lunes']);
            $horasMartes = intval($_POST['horario_martes']);
            $horasMiercoles = intval($_POST['horario_miercoles']);
            $horasJueves = intval($_POST['horario_jueves']);
            $horasViernes = intval($_POST['horario_viernes']);
        } else {
            $salida = 'No se recibieron datos';
        }
            $horasDinamica = [$horasLunes, $horasMartes, $horasMiercoles, $horasJueves, $horasViernes];
            $calculo = new Calculo();

            $totalHoras = $calculo->calcularHoras($horasDinamica);
            $salida = 'El total de horas es: ' . $totalHoras;

            
            echo $salida;
            ?>
            
            
    </body>
</html>
