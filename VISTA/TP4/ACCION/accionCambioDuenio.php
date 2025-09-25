<?php
    include_once ('../../CONTROL/C_Auto.php');
    include_once ('../../CONTROL/C_Persona.php');
    include_once ('../Estructura/Utilidades/funciones.php');

    
    $data = data_submitted();
    $auto = new C_Auto();
    $exito = false;

    $arrAuto = $auto->buscar($data);
    if(!empty($arrAuto)){
        $arrPersona = (new C_Persona())->buscar($data);
        if(!empty($arrPersona)){
            if($arrAuto[0]->getObjDuenio()->getNroDni() != $arrPersona[0]->getNroDni()){
                $autoDuenioNuevo = [
                    'patente'=> ($arrAuto[0]->getPatente()),
                    'marca'=> ($arrAuto[0]->getMarca()),
                    'modelo'=> ($arrAuto[0]->getModelo()),
                    'dniDuenio'=> ($arrPersona[0]->getNroDni())
                ];
                if($auto->modificar($autoDuenioNuevo)){
                    $exito = true;
                    echo "Funciona jeje";
                }
            }
        }
    }
?>