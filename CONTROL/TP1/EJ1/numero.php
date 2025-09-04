<?php

class Numero {

public function tipoNumero($numeroFormulario) {

if ($numeroFormulario > 0) {
    $resultado = 1;
}     elseif ($numeroFormulario <0) {
        $resultado = -1;
    } else {
        $resultado = 0;
    }

return $resultado;

}
}
?>