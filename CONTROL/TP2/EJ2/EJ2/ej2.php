<!DOCTYPE html>
<html> 
    <head></head>
    <body>
        <?php
            if ($_GET) {
                
                $horasLunes = intval($_GET ['lunes_form']);
                $horasMartes = intval($_GET ['martes_form']);
                $horasMiercoles = intval($_GET ['miercoles_form']);
                $horasJueves = intval($_GET ['jueves_form']);
                $horasViernes = intval($_GET ['viernes_form' ]);
                $totalHoras = $horasLunes + $horasMartes + $horasMiercoles + $horasJueves + $horasViernes;
                echo "El total de horas fue de: " . $totalHoras;
            }
        ?>
        <a href='ej2.html'> volver </a>
    </body>
</html>

