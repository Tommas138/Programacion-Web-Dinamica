<!DOCTYPE html>
<html>
    <head>
</head>

<body>

        <?php

        if ($_GET) {
            $horasDinamica = [];
            $horasLunes = intval($_GET['horario_lunes']);
            $horasMartes = intval($_GET['horario_martes']);
            $horasMiercoles = intval($_GET['horario_miercoles']);
            $horasJueves = intval($_GET['horario_jueves']);
            $horasViernes = intval($_GET['horario_viernes']);
            $horasDinamica = [$horasLunes, $horasMartes, $horasMiercoles, $horasJueves, $horasViernes];
            $totalHoras = 0;
            foreach ($horasDinamica as $hora) {
                $totalHoras = $totalHoras + $hora;
            }
            echo "El total de horas por semana es: $totalHoras horas";
        } 
        else {
            echo "No se recibieron parametros";
        }
        ?>  
</body>
</html>
