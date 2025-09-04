
<?php

Class Persona {

    public function salidaPersona($nombre, $apellido, $edad, $direccion, $nivelEstudios, $tipoSexo) {
if ($edad>= 18) {
        $cadena = (
            "
            $nombre $apellido, que vive en $direccion de $edad años es mayor de edad
            "
        );
        } else {
          $cadena = (
            "
            $nombre $apellido, que vive en $direccion de $edad años es menor de edad
            "
        );  
        }

        switch ($nivelEstudios) {
            case 1:
                $cadena .= " no posee estudios\n";
            break;
            case 2:
                $cadena .= " posee estudios primarios\n";
            break;
            case 3:
                $cadena .= " posee estudios secundarios\n";
            break;
        } 

        switch ($tipoSexo) {
            case 'M':
                $cadena .= " y su sexo es masculino";
            break;
            case 'F':
                $cadena .= " y su sexo es femenino";
            break;
            case 'O':
                $cadena .= " y su sexo es otro";
            break;
        }

        return $cadena;
}
    }