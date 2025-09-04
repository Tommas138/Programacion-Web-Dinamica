<!DOCTYPE html>
<html>
    <head>
</head>

<body>

        <?php

        include_once('../../../../CONTROL/TP1/EJ2/calculoHoras.php');
        if ($_GET) {
            $horasDinamica = [];
            $horasLunes = intval($_GET['horario_lunes']);
            $horasMartes = intval($_GET['horario_martes']);
            $horasMiercoles = intval($_GET['horario_miercoles']);
            $horasJueves = intval($_GET['horario_jueves']);
            $horasViernes = intval($_GET['horario_viernes']);
            $horasDinamica = [$horasLunes, $horasMartes, $horasMiercoles, $horasJueves, $horasViernes];
            $calculo = new Calculo();

            $totalHoras = $calculo->calcularHoras($horasDinamica);
            $salida = 'El total de horas es: ' . $totalHoras;
        } else {
            $salida = 'No se recibieron datos';
        }    
        echo $salida;
        ?>
        
        
</body>
</html>
